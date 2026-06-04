<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naga Motor - Jual Beli Mobil Terpercaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS Tambahan agar tampilan lebih rapi */
        .hero-section {
            background-color: #343a40;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Naga Motor</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#katalog">Katalog Mobil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">Temukan Mobil Impianmu</h1>
            <p class="lead">Koleksi mobil terbaik dengan harga bersaing dan kualitas terjamin.</p>
            <a href="#katalog" class="btn btn-primary btn-lg mt-3">Lihat Katalog</a>
        </div>
    </section>

    <section id="katalog" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Katalog Mobil Tersedia</h2>
            <div class="row">
                @forelse($mobils as $m)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('uploads/' . $m->foto) }}" class="card-img-top" alt="{{ $m->nama_mobil }}">
                        <div class="card-body">
                            <span class="badge bg-secondary mb-2">{{ $m->merek->nama_merek }}</span>
                            <h5 class="card-title">{{ $m->nama_mobil }}</h5>
                            <h6 class="text-success fw-bold">Rp {{ number_format($m->harga, 0, ',', '.') }}</h6>
                            <p class="card-text text-muted">{{ Str::limit($m->deskripsi, 80) }}</p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="#kontak" class="btn btn-outline-success w-100">Saya Tertarik</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p class="text-muted">Maaf, saat ini belum ada mobil yang tersedia.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="kontak" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center mb-4">Tertarik? Hubungi Kami</h2>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <form action="{{ route('pesan.store') }}" method="POST" id="formKontak" onsubmit="return validasiForm()">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama_pengirim" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nomor HP/WhatsApp</label>
                                    <input type="text" id="no_hp" name="no_hp" class="form-control" required>
                                    <small id="errorHp" class="text-danger d-none">Nomor HP hanya boleh berisi angka!</small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pesan / Mobil yang diminati</label>
                                    <textarea name="pesan_teks" class="form-control" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="m-0">&copy; 2026 Naga Motor. Final Project Web Programming.</p>
    </footer>

    <script>
        function validasiForm() {
            let noHp = document.getElementById("no_hp").value;
            let errorText = document.getElementById("errorHp");
            
            // Cek menggunakan Regular Expression (RegEx): Apakah input HANYA berisi angka?
            let isNumber = /^\d+$/.test(noHp);
            
            if (!isNumber) {
                // Jika mengandung huruf/simbol, tampilkan pesan error dan blokir pengiriman form
                errorText.classList.remove("d-none");
                document.getElementById("no_hp").classList.add("is-invalid");
                return false; 
            } else {
                // Jika aman, lanjutkan proses POST
                errorText.classList.add("d-none");
                document.getElementById("no_hp").classList.remove("is-invalid");
                return true;
            }
        }
    </script>
</body>
</html>