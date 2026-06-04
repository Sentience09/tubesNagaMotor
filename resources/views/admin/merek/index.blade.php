@extends('layouts.admin')

@section('content')
<div class="row mb-3">
    <div class="col-md-6">
        <h2>Data Merek Mobil</h2>
    </div>
    <div class="col-md-6 text-end">
        <a href="{{ route('admin.merek.create') }}" class="btn btn-success">+ Tambah Merek</a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th>Nama Merek</th>
                    <th width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mereks as $index => $m)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $m->nama_merek }}</td>
                    <td>
                        <a href="{{ route('admin.merek.edit', $m->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        
                        <form action="{{ route('admin.merek.destroy', $m->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus merek ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Belum ada data merek.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection