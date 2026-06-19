<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Pesan;

class HomeController extends Controller
{
    // Menampilkan Landing Page
    public function index()
    {
        // Mengambil mobil yang berstatus "Tersedia", diurutkan dari yang terbaru
        $mobils = Mobil::with('merek')->where('status', 'Tersedia')->latest()->get();
        return view('welcome', compact('mobils'));
    }

    // Memproses form pesan dari pengunjung (POST)
    public function storePesan(Request $request)
    {
        $request->validate([
            'nama_pengirim' => 'required|string|max:255',
            'no_hp'         => 'required|numeric',
            'pesan_teks'    => 'required|string'
        ]);

        Pesan::create($request->all());

        // Kembali ke halaman depan dengan pesan sukses
        return redirect('/#kontak')->with('success', 'Pesan berhasil dikirim! Tim kami akan segera menghubungi Anda.');
    }
    public function detail($id)
    {
    $mobil = \App\Models\Mobil::with('merek')->findOrFail($id);
    return view('mobil-detail', compact('mobil'));
    }
}