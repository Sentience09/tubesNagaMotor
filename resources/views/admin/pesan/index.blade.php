@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mb-4">Daftar Pesan Masuk / Leads</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Tanggal Masuk</th>
                            <th>Nama Pengirim</th>
                            <th>No. HP / WA</th>
                            <th>Isi Pesan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pesans as $index => $p)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $p->created_at->format('d M Y - H:i') }}</td>
                            <td>{{ $p->nama_pengirim }}</td>
                            <td>
                                <a href="https://wa.me/{{ $p->no_hp }}" target="_blank" class="text-success fw-bold text-decoration-none">
                                    {{ $p->no_hp }}
                                </a>
                            </td>
                            <td>{{ $p->pesan_teks }}</td>
                            <td>
                                <form action="{{ route('admin.pesan.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada pesan masuk dari pengunjung.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection