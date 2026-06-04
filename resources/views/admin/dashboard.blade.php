@extends('layouts.admin')

@section('content')
<h2 class="mb-4">Dashboard Ringkasan</h2>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card text-white bg-primary shadow-sm h-100">
            <div class="card-body">
                <h5 class="card-title">Total Mobil</h5>
                <h2 class="display-4">{{ $total_mobil }}</h2>
                <p class="card-text">Unit mobil di dalam katalog.</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.mobil.index') }}">Lihat Detail</a>
                <div class="small text-white">></div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card text-white bg-success shadow-sm h-100">
            <div class="card-body">
                <h5 class="card-title">Total Merek</h5>
                <h2 class="display-4">{{ $total_merek }}</h2>
                <p class="card-text">Merek mobil terdaftar.</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.merek.index') }}">Lihat Detail</a>
                <div class="small text-white">></div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card text-dark bg-warning shadow-sm h-100">
            <div class="card-body">
                <h5 class="card-title">Pesan / Leads</h5>
                <h2 class="display-4">{{ $total_pesan }}</h2>
                <p class="card-text">Pengunjung yang tertarik.</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-dark stretched-link" href="#">Lihat Detail</a>
                <div class="small text-dark">></div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-dark text-white">
        Selamat Datang di Panel Admin
    </div>
    <div class="card-body">
        <p class="card-text m-0">Gunakan navigasi di atas untuk mulai mengelola data katalog mobil dan memantau interaksi dari calon pembeli.</p>
    </div>
</div>
@endsection