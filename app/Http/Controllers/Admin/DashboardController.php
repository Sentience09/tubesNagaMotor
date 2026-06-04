<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Merek;
use App\Models\Pesan;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah baris data di masing-masing tabel
        $total_mobil = Mobil::count();
        $total_merek = Merek::count();
        $total_pesan = Pesan::count();

        // Mengirim data hitungan ke halaman view
        return view('admin.dashboard', compact('total_mobil', 'total_merek', 'total_pesan'));
    }
}