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

            <hr>
            <h6 class="text-muted mb-3">Spesifikasi Teknis <small>(opsional)</small></h6>

             <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Tahun</label>
                    <input type="number" name="tahun" class="form-control" placeholder="Contoh: 1969">
                </div>
                 </div>
                <div class="col-md-4 mb-3">
                    <label>Tenaga</label>
                    <input type="text" name="tenaga_hp" class="form-control" placeholder="Contoh: 375 HP">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Akselerasi 0-60 MPH</label>
                    <input type="text" name="akselerasi" class="form-control" placeholder="Contoh: 5.5 seconds">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Mesin</label>
                    <input type="text" name="mesin" class="form-control" placeholder="Contoh: 428 Cobra Jet V8">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Torsi</label>
                    <input type="text" name="torsi" class="form-control" placeholder="Contoh: 450 lb-ft">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Transmisi</label>
                    <input type="text" name="transmisi" class="form-control" placeholder="Contoh: 4-Speed Manual">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Simpan Data</button>
            <a href="{{ route('admin.mobil.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection