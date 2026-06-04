@extends('layouts.admin')

@section('content')
<div class="row mb-3">
    <div class="col-md-6">
        <h2>Data Mobil</h2>
    </div>
    <div class="col-md-6 text-end">
        <a href="{{ route('admin.mobil.create') }}" class="btn btn-success">+ Tambah Mobil</a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body text-center">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th width="15%">Foto</th>
                    <th>Merek</th>
                    <th>Nama Mobil</th>
                    <th>Harga</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mobils as $index => $m)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <img src="{{ asset('uploads/' . $m->foto) }}" alt="{{ $m->nama_mobil }}" width="120" class="img-thumbnail rounded">
                    </td>
                    <td>{{ $m->merek->nama_merek }}</td>
                    <td>{{ $m->nama_mobil }}</td>
                    <td>Rp {{ number_format($m->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('admin.mobil.edit', $m->id) }}" class="btn btn-sm btn-warning">Edit</a>
    
                        <form action="{{ route('admin.mobil.destroy', $m->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus mobil ini? Fotonya juga akan terhapus.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-4">Belum ada data mobil. Silakan klik "Tambah Mobil".</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection