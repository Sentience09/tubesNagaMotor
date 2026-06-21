<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naga Motor - Jual Beli Mobil Terpercaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;800;900&family=Barlow:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">NAGA <span>MOTOR</span></a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-eyebrow">Kekuatan Murni</div>
                    <h1 class="hero-title">Naga Motor</h1>
                    <p class="hero-sub">Temukan koleksi mobil terbaik dengan harga bersaing dan kualitas terjamin. Setiap mobil adalah pernyataan identitas.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#katalog" class="btn-red">Lihat Koleksi <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></a>
                        <a href="#kontak" class="btn-outline-white">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- KATALOG --}}
    <section id="katalog" class="section-catalog">
        <div class="container">
            <div class="text-center">
                <h2 class="section-label">Model <span>Legendaris</span></h2>
                <p class="section-desc">Koleksi terbaik kami yang mendominasi jalanan. Masing-masing memiliki sejarah dan performa yang tak tergantikan.</p>
            </div>
            <div class="row g-4">
                @forelse($mobils as $m)
                <div class="col-md-4">
                    <div class="car-card">
                        <div style="overflow:hidden;">
                            <img src="{{ asset('uploads/' . $m->foto) }}" alt="{{ $m->nama_mobil }}">
                        </div>
                        <div class="car-card-body">
                            <div class="car-name">{{ $m->nama_mobil }}</div>
                            <p class="car-desc">{{ Str::limit($m->deskripsi, 90) }}</p>
                            <div class="car-footer">
                                <div class="car-hp">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/></svg>
                                    <span class="car-price">Rp {{ number_format($m->harga, 0, ',', '.') }}</span>
                                </div>
                               <a href="{{ route('mobil.detail', $m->id) }}" class="link-detail">
                                    Detail
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <p style="color: var(--text-muted);">Belum ada mobil yang tersedia saat ini.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- WHY --}}
    <section class="section-why">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="why-title">Kenapa Memilih<br><span>Naga Motor?</span></h2>
                    <p class="why-desc">Bukan sekadar jual beli, ini adalah pengalaman menemukan kendaraan yang benar-benar cocok untuk kamu. Kualitas terjamin, harga transparan.</p>

                    <div class="why-item">
                        <div class="why-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/></svg>
                        </div>
                        <div>
                            <div class="why-item-title">Koleksi Berkualitas</div>
                            <p class="why-item-desc">Setiap mobil telah melalui seleksi ketat untuk memastikan kualitas terbaik sampai ke tangan kamu.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/><path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/></svg>
                        </div>
                        <div>
                            <div class="why-item-title">Mudah Dimodifikasi</div>
                            <p class="why-item-desc">Mekanika konvensional membuatnya menjadi kanvas yang sempurna bagi para pecinta modifikasi dan kecepatan.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.048.962V8.338l.001.006z"/><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10h14V4h-3.5zM2 5h12v8H2V5z"/></svg>
                        </div>
                        <div>
                            <div class="why-item-title">Nilai Investasi</div>
                            <p class="why-item-desc">Banyak model kami yang harganya terus meningkat, menjadikannya aset berharga jangka panjang.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-img-wrap">
                        <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=800&q=80" alt="Featured Car">
                        <div class="why-img-caption">
                            <h6>Koleksi Unggulan Kami</h6>
                            <p>Salah satu mobil paling dicari dan langka di koleksi kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-cta">
        <div class="container">
            <h2 class="cta-title">Siap Untuk Mendominasi Jalanan?</h2>
            <p class="cta-sub">Jelajahi inventaris kami atau hubungi tim spesialis kami untuk menemukan mobil impian Anda.</p>
            <a href="#kontak" class="btn-dark-cta">Hubungi Spesialis Kami</a>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="kontak" class="section-contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h2 class="section-label text-center">Tertarik? <span>Hubungi Kami</span></h2>
                    <p class="section-desc text-center mx-auto">Isi form di bawah dan tim kami akan segera menghubungi kamu.</p>

                    @if(session('success'))
                        <div class="alert" style="background: rgba(74,222,128,0.1); border: 1px solid rgba(74,222,128,0.3); color: #4ade80; border-radius:0; padding: 14px 18px; margin-bottom: 24px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('pesan.store') }}" method="POST" onsubmit="return validasiForm()">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label-dark">Nama Lengkap</label>
                            <input type="text" name="nama_pengirim" class="form-control form-control-dark" placeholder="Masukkan nama kamu" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label-dark">Nomor HP / WhatsApp</label>
                            <input type="text" id="no_hp" name="no_hp" class="form-control form-control-dark" placeholder="Contoh: 08123456789" required>
                            <small id="errorHp" class="text-danger d-none mt-1 d-block">Nomor HP hanya boleh berisi angka!</small>
                        </div>
                        <div class="mb-4">
                            <label class="form-label-dark">Pesan / Mobil yang Diminati</label>
                            <textarea name="pesan_teks" class="form-control form-control-dark" rows="4" placeholder="Ceritakan mobil yang kamu cari..." required></textarea>
                        </div>
                        <button type="submit" class="btn-red w-100" style="justify-content:center; padding: 16px;">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer>
        <p>&copy; 2026 Naga Motor. Final Project Web Programming.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validasiForm() {
            let noHp = document.getElementById("no_hp").value;
            let errorText = document.getElementById("errorHp");
            let isNumber = /^\d+$/.test(noHp);
            if (!isNumber) {
                errorText.classList.remove("d-none");
                document.getElementById("no_hp").classList.add("is-invalid");
                return false;
            } else {
                errorText.classList.add("d-none");
                document.getElementById("no_hp").classList.remove("is-invalid");
                return true;
            }
        }
    </script>
</body>
</html>