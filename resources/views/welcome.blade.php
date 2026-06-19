<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naga Motor - Jual Beli Mobil Terpercaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;800;900&family=Barlow:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --red: #E31E24;
            --black: #0D0D0D;
            --dark: #141414;
            --card-bg: #1A1A1A;
            --text-muted: #888;
            --white: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: var(--black);
            color: var(--white);
            font-family: 'Barlow', sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: transparent;
            position: absolute;
            top: 0; left: 0; right: 0;
            z-index: 100;
            padding: 24px 0;
        }
        .navbar-brand {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 900;
            font-size: 1.6rem;
            color: var(--white) !important;
            letter-spacing: 1px;
        }
        .navbar-brand span { color: var(--red); }
        .nav-link {
            color: rgba(255,255,255,0.75) !important;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-left: 28px;
            transition: color 0.2s;
        }
        .nav-link:hover { color: var(--white) !important; }

        /* HERO */
        .hero {
            min-height: 100vh;
            background: linear-gradient(to bottom, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.85) 100%),
                        url('https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=1600&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            padding-top: 100px;
        }
        .hero-eyebrow {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 5rem;
            font-weight: 900;
            color: rgba(255,255,255,0.07);
            letter-spacing: 8px;
            text-transform: uppercase;
            line-height: 1;
            margin-bottom: -20px;
        }
        .hero-title {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 6.5rem;
            font-weight: 900;
            color: var(--red);
            text-transform: uppercase;
            line-height: 1;
            letter-spacing: 2px;
        }
        .hero-sub {
            color: rgba(255,255,255,0.55);
            font-size: 1rem;
            max-width: 420px;
            line-height: 1.7;
            margin: 20px 0 36px;
        }
        .btn-red {
            background: var(--red);
            color: var(--white);
            border: none;
            padding: 14px 32px;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 0.95rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s;
        }
        .btn-red:hover { background: #c0181d; color: var(--white); }
        .btn-outline-white {
            background: transparent;
            color: var(--white);
            border: 1.5px solid rgba(255,255,255,0.35);
            padding: 14px 32px;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 0.95rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-decoration: none;
            transition: border-color 0.2s, color 0.2s;
        }
        .btn-outline-white:hover { border-color: var(--white); color: var(--white); }

        /* CATALOG SECTION */
        .section-catalog {
            background: var(--dark);
            padding: 90px 0;
        }
        .section-label {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 2.8rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .section-label span { color: var(--red); }
        .section-desc {
            color: var(--text-muted);
            font-size: 0.9rem;
            max-width: 480px;
            margin: 12px auto 50px;
            line-height: 1.7;
        }

        /* CAR CARDS */
        .car-card {
            background: var(--card-bg);
            border: none;
            overflow: hidden;
        }
        .car-card img {
            height: 220px;
            object-fit: cover;
            width: 100%;
            filter: brightness(0.9);
            transition: transform 0.4s, filter 0.4s;
        }
        .car-card:hover img {
            transform: scale(1.04);
            filter: brightness(1);
        }
        .car-card-body {
            padding: 22px 20px 16px;
        }
        .car-name {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 800;
            font-size: 1.2rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }
        .car-desc {
            color: var(--text-muted);
            font-size: 0.85rem;
            line-height: 1.6;
            margin-bottom: 18px;
        }
        .car-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid rgba(255,255,255,0.07);
            padding-top: 14px;
        }
        .car-hp {
            display: flex;
            align-items: center;
            gap: 6px;
            color: var(--text-muted);
            font-size: 0.82rem;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .car-hp svg { color: var(--red); }
        .car-price {
            color: #4ade80;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 1rem;
        }
        .link-detail {
            color: var(--red);
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .link-detail:hover { color: #ff4a4f; }

        .link-catalog {
            color: var(--white);
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            text-decoration: none;
            border-bottom: 1px solid rgba(255,255,255,0.3);
            padding-bottom: 2px;
            transition: border-color 0.2s;
        }
        .link-catalog:hover { border-color: var(--white); color: var(--white); }

        /* WHY SECTION */
        .section-why {
            background: var(--black);
            padding: 90px 0;
        }
        .why-title {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 1.1;
        }
        .why-title span { color: var(--red); }
        .why-desc {
            color: var(--text-muted);
            font-size: 0.9rem;
            line-height: 1.8;
            margin: 16px 0 36px;
            max-width: 460px;
        }
        .why-item {
            display: flex;
            gap: 16px;
            margin-bottom: 28px;
            align-items: flex-start;
        }
        .why-icon {
            width: 38px;
            height: 38px;
            background: rgba(227,30,36,0.12);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 2px;
        }
        .why-icon svg { color: var(--red); }
        .why-item-title {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 800;
            font-size: 1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 4px;
        }
        .why-item-desc {
            color: var(--text-muted);
            font-size: 0.85rem;
            line-height: 1.6;
        }
        .why-img-wrap {
            position: relative;
        }
        .why-img-wrap img {
            width: 100%;
            height: 460px;
            object-fit: cover;
            filter: brightness(0.75);
        }
        .why-img-caption {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, transparent 100%);
            padding: 32px 24px 22px;
        }
        .why-img-caption h6 {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 800;
            font-size: 1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 4px;
        }
        .why-img-caption p {
            color: var(--text-muted);
            font-size: 0.8rem;
        }

        /* CTA SECTION */
        .section-cta {
            background: var(--red);
            padding: 90px 0;
            text-align: center;
        }
        .cta-title {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 3.5rem;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 1.1;
            max-width: 560px;
            margin: 0 auto 16px;
        }
        .cta-sub {
            color: rgba(255,255,255,0.75);
            font-size: 0.95rem;
            max-width: 420px;
            margin: 0 auto 36px;
            line-height: 1.7;
        }
        .btn-dark-cta {
            background: var(--black);
            color: var(--white);
            border: none;
            padding: 16px 40px;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 0.95rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
            transition: background 0.2s;
        }
        .btn-dark-cta:hover { background: #222; color: var(--white); }

        /* CONTACT SECTION */
        .section-contact {
            background: var(--dark);
            padding: 90px 0;
        }
        .form-control-dark {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            color: var(--white);
            padding: 14px 16px;
            border-radius: 0;
            font-size: 0.9rem;
        }
        .form-control-dark:focus {
            background: rgba(255,255,255,0.08);
            border-color: var(--red);
            color: var(--white);
            box-shadow: none;
        }
        .form-control-dark::placeholder { color: rgba(255,255,255,0.3); }
        .form-label-dark {
            color: rgba(255,255,255,0.6);
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        /* FOOTER */
        footer {
            background: #0A0A0A;
            border-top: 1px solid rgba(255,255,255,0.06);
            padding: 24px 0;
            text-align: center;
            color: rgba(255,255,255,0.3);
            font-size: 0.82rem;
            letter-spacing: 0.5px;
        }

        @media (max-width: 768px) {
            .hero-eyebrow { font-size: 2.8rem; }
            .hero-title { font-size: 3.8rem; }
            .section-label { font-size: 2rem; }
            .why-title { font-size: 2.2rem; }
            .cta-title { font-size: 2.5rem; }
        }
    </style>
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
            <div class="text-center mt-5">
                <a href="#kontak" class="link-catalog">Lihat Seluruh Katalog ›</a>
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