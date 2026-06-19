<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    // Menampilkan semua pesan yang masuk
    public function index()
    {
        // Mengambil semua data pesan, diurutkan dari yang terbaru
        $pesans = Pesan::latest()->get();
        return view('admin.pesan.index', compact('pesans'));
    }

    // Menghapus pesan
    public function destroy($id)
    {
        $pesan = Pesan::findOrFail($id);
        $pesan->delete();

        return redirect()->route('admin.pesan.index')->with('success', 'Pesan berhasil dihapus!');
    }
}