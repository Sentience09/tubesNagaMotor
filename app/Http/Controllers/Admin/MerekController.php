<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    // READ (GET): Menampilkan daftar merek
    public function index()
    {
        $mereks = Merek::all();
        return view('admin.merek.index', compact('mereks'));
    }

    // CREATE (GET): Menampilkan form tambah merek
    public function create()
    {
        return view('admin.merek.create');
    }

    // CREATE (POST): Menyimpan data merek ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_merek' => 'required|string|max:255'
        ]);

        Merek::create($request->all());
        return redirect()->route('admin.merek.index')->with('success', 'Merek berhasil ditambahkan!');
    }

    // UPDATE (GET): Menampilkan form edit merek
    public function edit(Merek $merek)
    {
        return view('admin.merek.edit', compact('merek'));
    }

    // UPDATE (POST/PUT): Menyimpan perubahan data merek
    public function update(Request $request, Merek $merek)
    {
        $request->validate([
            'nama_merek' => 'required|string|max:255'
        ]);

        $merek->update($request->all());
        return redirect()->route('admin.merek.index')->with('success', 'Merek berhasil diperbarui!');
    }

    // DELETE (POST/DELETE): Menghapus data merek
    public function destroy(Merek $merek)
    {
    if ($merek->mobil()->count() > 0) {
        return redirect()->route('admin.merek.index')->with('error', 'Merek tidak dapat dihapus karena masih ada mobil yang menggunakan merek ini!');
    }

    $merek->delete();
    return redirect()->route('admin.merek.index')->with('success', 'Merek berhasil dihapus!');
    }
}