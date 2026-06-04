@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                Tambah Data Merek
            </div>
            <div class="card-body">
                <form action="{{ route('admin.merek.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label">Nama Merek</label>
                        <input type="text" name="nama_merek" class="form-control" placeholder="Contoh: Toyota, Honda..." required>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('admin.merek.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection