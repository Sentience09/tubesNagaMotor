@extends('layouts.admin')

@section('content')
<div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">
        Tambah Data Mobil
    </div>
    <div class="card-body">
        <form action="{{ route('admin.mobil.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Merek Mobil</label>
                <select name="merek_id" class="form-control" required>
                    <option value="">-- Pilih Merek --</option>
                    @foreach($mereks as $m)
                        <option value="{{ $m->id }}">{{ $m->nama_merek }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Nama/Tipe Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Harga (Rp)</label>
                <input type="number" name="harga" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Deskripsi Singkat</label>
                <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label>Upload Foto Mobil</label>
                <input type="file" name="foto" class="form-control" accept="image/*" required>
                <small class="text-muted">Format: JPG, JPEG, PNG. Maksimal 2MB.</small>
            </div>

            <button type="submit" class="btn btn-success">Simpan Data</button>
            <a href="{{ route('admin.mobil.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection