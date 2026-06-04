<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use App\Models\Merek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MobilController extends Controller
{
    // Menampilkan daftar mobil
    public function index()
    {
        // Mengambil data mobil beserta data mereknya (Relasi)
        $mobils = Mobil::with('merek')->get();
        return view('admin.mobil.index', compact('mobils'));
    }

    // Menampilkan form tambah mobil
    public function create()
    {
        // Kirim data merek untuk ditampilkan di elemen <select> (Dropdown)
        $mereks = Merek::all();
        return view('admin.mobil.create', compact('mereks'));
    }

    // Memproses form dan UPLOAD FOTO
    public function store(Request $request)
    {
        // 1. Validasi inputan (Kriteria 9 - Back-end validation)
        $request->validate([
            'merek_id'   => 'required',
            'nama_mobil' => 'required|string|max:255',
            'harga'      => 'required|numeric',
            'deskripsi'  => 'required',
            'foto'       => 'required|image|mimes:jpeg,png,jpg|max:2048', // Maksimal 2MB
        ]);

        $input = $request->all();

        // 2. Logika Upload Foto
        if ($gambar = $request->file('foto')) {
            $tujuan_upload = 'uploads/';
            $nama_gambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move(public_path($tujuan_upload), $nama_gambar);
            $input['foto'] = $nama_gambar;
        }

        // 3. Simpan ke database
        Mobil::create($input);
        return redirect()->route('admin.mobil.index')->with('success', 'Data mobil beserta foto berhasil ditambahkan!');
    }

    // UPDATE (GET): Menampilkan form edit mobil
    public function edit(Mobil $mobil)
    {
        $mereks = Merek::all();
        return view('admin.mobil.edit', compact('mobil', 'mereks'));
    }

    // UPDATE (POST/PUT): Memproses perubahan data & foto
    public function update(Request $request, Mobil $mobil)
    {
        $request->validate([
            'merek_id'   => 'required',
            'nama_mobil' => 'required|string|max:255',
            'harga'      => 'required|numeric',
            'deskripsi'  => 'required',
            // Foto tidak required saat update, berjaga-jaga jika admin hanya ingin ganti harga/teks
            'foto'       => 'image|mimes:jpeg,png,jpg|max:2048', 
            'status'     => 'required'
        ]);

        $input = $request->all();

        // Cek jika admin mengupload foto baru
        if ($gambar = $request->file('foto')) {
            // Hapus foto lama dari folder public/uploads
            if(File::exists(public_path('uploads/' . $mobil->foto))){
                File::delete(public_path('uploads/' . $mobil->foto));
            }

            // Upload foto baru
            $tujuan_upload = 'uploads/';
            $nama_gambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move(public_path($tujuan_upload), $nama_gambar);
            $input['foto'] = $nama_gambar;
        }

        $mobil->update($input);
        return redirect()->route('admin.mobil.index')->with('success', 'Data mobil berhasil diperbarui!');
    }

    // DELETE (POST/DELETE): Menghapus data dan fotonya
    public function destroy(Mobil $mobil)
    {
        // Hapus foto fisiknya dari folder terlebih dahulu
        if(File::exists(public_path('uploads/' . $mobil->foto))){
            File::delete(public_path('uploads/' . $mobil->foto));
        }

        // Hapus data dari database
        $mobil->delete();
        return redirect()->route('admin.mobil.index')->with('success', 'Data mobil beserta fotonya berhasil dihapus!');
    }
}