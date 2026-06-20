<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pesan - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.merek.index') }}">Data Merek</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.mobil.index') }}">Data Mobil</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('admin.pesan.index') }}">Pesan Masuk</a></li>
                </ul>
            </div>
        </div>
    </nav>

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
</body>
</html>