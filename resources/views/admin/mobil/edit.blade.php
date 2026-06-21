@extends('layouts.admin')

@section('content')
<div class="card shadow-sm mb-4">
    <div class="card-header bg-warning text-dark">
        Edit Data Mobil
    </div>
    <div class="card-body">
        <form action="{{ route('admin.mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Merek Mobil</label>
                <select name="merek_id" class="form-control" required>
                    <option value="">-- Pilih Merek --</option>
                    @foreach($mereks as $m)
                        <option value="{{ $m->id }}" {{ $mobil->merek_id == $m->id ? 'selected' : '' }}>
                            {{ $m->nama_merek }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Nama/Tipe Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" value="{{ $mobil->nama_mobil }}" required>
            </div>

            <div class="mb-3">
                <label>Harga (Rp)</label>
                <input type="number" name="harga" class="form-control" value="{{ $mobil->harga }}" required>
            </div>

            <div class="mb-3">
                <label>Status Penjualan</label>
                <select name="status" class="form-control" required>
                    <option value="Tersedia" {{ $mobil->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <option value="Terjual" {{ $mobil->status == 'Terjual' ? 'selected' : '' }}>Terjual</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Deskripsi Singkat</label>
                <textarea name="deskripsi" class="form-control" rows="3" required>{{ $mobil->deskripsi }}</textarea>
            </div>

            <div class="mb-3">
                <label>Foto Saat Ini:</label><br>
                <img src="{{ asset('uploads/' . $mobil->foto) }}" width="150" class="mb-2 img-thumbnail"><br>
                
                <label>Ganti Foto (Kosongkan jika tidak ingin ganti)</label>
                <input type="file" name="foto" class="form-control" accept="image/*">
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Tahun</label>
                    <input type="number" name="tahun" class="form-control" value="{{ $mobil->tahun }}" required>
                </div>
                 </div>
                <div class="col-md-4 mb-3">
                    <label>Tenaga</label>
                    <input type="text" name="tenaga_hp" class="form-control" value="{{ $mobil->tenaga_hp }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Akselerasi 0-60 MPH</label>
                    <input type="text" name="akselerasi" class="form-control" value="{{ $mobil->akselerasi }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Mesin</label>
                    <input type="text" name="mesin" class="form-control" value="{{ $mobil->mesin }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Torsi</label>
                    <input type="text" name="torsi" class="form-control" value="{{ $mobil->torsi }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Transmisi</label>
                    <input type="text" name="transmisi" class="form-control" value="{{ $mobil->transmisi }}" required>
                </div>
            </div>

            <button type="submit" class="btn btn-warning">Update Data</button>
            <a href="{{ route('admin.mobil.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection