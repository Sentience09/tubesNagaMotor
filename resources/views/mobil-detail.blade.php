<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $mobil->nama_mobil }} - Naga Motor</title>
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
            background: var(--black);
            border-bottom: 1px solid rgba(255,255,255,0.07);
            padding: 18px 0;
        }
        .navbar-brand {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 900;
            font-size: 1.4rem;
            color: var(--white) !important;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .navbar-brand span { color: var(--red); }
        .brand-icon {
            width: 28px;
            height: 28px;
            background: var(--red);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .nav-link {
            color: rgba(255,255,255,0.6) !important;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-left: 24px;
            transition: color 0.2s;
        }
        .nav-link:hover { color: var(--white) !important; }
        .btn-katalog {
            background: var(--red);
            color: var(--white) !important;
            padding: 8px 20px;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-left: 24px;
        }
        .btn-katalog:hover { background: #c0181d; }

        /* HERO IMAGE */
        .detail-hero {
            position: relative;
            height: 420px;
            overflow: hidden;
        }
        .detail-hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.55);
        }
        .detail-hero-overlay {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            padding: 32px 0 28px;
            background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, transparent 100%);
        }
        .back-link {
            color: rgba(255,255,255,0.6);
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 10px;
            transition: color 0.2s;
        }
        .back-link:hover { color: var(--white); }
        .hero-merek {
            color: var(--red);
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 800;
            font-size: 0.9rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }
        .hero-nama {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 900;
            font-size: 3.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            line-height: 1;
        }

        /* MAIN CONTENT */
        .detail-content {
            padding: 56px 0 80px;
        }

        /* LEFT SIDE */
        .section-title {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 800;
            font-size: 1.1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 16px;
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .overview-text {
            color: rgba(255,255,255,0.65);
            font-size: 0.95rem;
            line-height: 1.85;
            margin-bottom: 44px;
        }

        /* SPEC CARDS */
        .spec-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 20px;
        }
        .spec-card {
            background: var(--card-bg);
            border: 1px solid rgba(255,255,255,0.06);
            padding: 22px 16px 18px;
            text-align: center;
        }
        .spec-icon {
            color: var(--red);
            margin-bottom: 10px;
        }
        .spec-label {
            color: var(--text-muted);
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }
        .spec-value {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 1.15rem;
            letter-spacing: 0.5px;
        }

        /* RIGHT SIDE - STICKY CARD */
        .sticky-card {
            position: sticky;
            top: 24px;
            background: var(--card-bg);
            border: 1px solid rgba(255,255,255,0.08);
            padding: 28px;
        }
        .harga-label {
            color: var(--text-muted);
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }
        .harga-value {
            color: #4ade80;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 900;
            font-size: 2.2rem;
            margin-bottom: 28px;
            letter-spacing: 1px;
        }
        .form-title {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 800;
            font-size: 1.1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        .form-label-dark {
            color: rgba(255,255,255,0.5);
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 7px;
            display: block;
        }
        .form-control-dark {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            color: var(--white);
            padding: 12px 14px;
            border-radius: 0;
            font-size: 0.88rem;
            width: 100%;
            margin-bottom: 16px;
            font-family: 'Barlow', sans-serif;
        }
        .form-control-dark:focus {
            outline: none;
            border-color: var(--red);
            background: rgba(255,255,255,0.07);
            color: var(--white);
        }
        .form-control-dark::placeholder { color: rgba(255,255,255,0.25); }
        textarea.form-control-dark { resize: none; }
        .btn-submit {
            width: 100%;
            background: var(--red);
            color: var(--white);
            border: none;
            padding: 15px;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 4px;
        }
        .btn-submit:hover { background: #c0181d; }
        .contact-alt {
            text-align: center;
            margin-top: 16px;
            color: var(--text-muted);
            font-size: 0.75rem;
            line-height: 1.6;
        }
        .contact-alt a {
            color: var(--white);
            text-decoration: none;
            font-weight: 600;
        }

        /* FOOTER */
        .site-footer {
            background: #0A0A0A;
            border-top: 1px solid rgba(255,255,255,0.07);
            padding: 56px 0 0;
        }
        .footer-brand {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 900;
            font-size: 1.3rem;
            color: var(--white);
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
        }
        .footer-brand span { color: var(--red); }
        .footer-desc {
            color: var(--text-muted);
            font-size: 0.85rem;
            line-height: 1.7;
            max-width: 280px;
        }
        .footer-heading {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 800;
            font-size: 0.85rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer-links li { margin-bottom: 10px; }
        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.88rem;
            transition: color 0.2s;
        }
        .footer-links a:hover { color: var(--white); }
        .footer-contact p {
            color: var(--text-muted);
            font-size: 0.88rem;
            margin-bottom: 8px;
        }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.07);
            margin-top: 48px;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer-bottom p {
            color: rgba(255,255,255,0.25);
            font-size: 0.8rem;
            margin: 0;
        }
        .footer-socials {
            display: flex;
            gap: 20px;
        }
        .footer-socials a {
            color: rgba(255,255,255,0.4);
            font-size: 0.8rem;
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-socials a:hover { color: var(--white); }

        @media (max-width: 768px) {
            .hero-nama { font-size: 2.5rem; }
            .spec-grid { grid-template-columns: repeat(2, 1fr); }
            .sticky-card { position: static; margin-top: 40px; }
        }
    </style>
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="brand-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/></svg>
                </div>
                NAGA <span>MOTOR</span>
            </a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#katalog">Koleksi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <div class="detail-hero">
        <img src="{{ asset('uploads/' . $mobil->foto) }}" alt="{{ $mobil->nama_mobil }}">
        <div class="detail-hero-overlay">
            <div class="container">
                <a href="{{ route('home') }}#katalog" class="back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg>
                    Kembali
                </a>
                <div class="hero-merek">{{ $mobil->merek->nama_merek }}</div>
                <h1 class="hero-nama">{{ $mobil->nama_mobil }}</h1>
            </div>
        </div>
    </div>

    {{-- MAIN CONTENT --}}
    <section class="detail-content">
        <div class="container">
            <div class="row g-5">

                {{-- LEFT: Overview + Spesifikasi --}}
                <div class="col-lg-7">
                    <div class="section-title">Overview</div>
                    <p class="overview-text">{{ $mobil->deskripsi }}</p>

                    <div class="section-title">Spesifikasi Teknis</div>
                    <div class="spec-grid">
                        <div class="spec-card">
                            <div class="spec-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/><path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/></svg>
                            </div>
                            <div class="spec-label">Tahun</div>
                            <div class="spec-value">{{ $mobil->tahun ?? '-' }}</div>
                        </div>
                        <div class="spec-card">
                            <div class="spec-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/><path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/><path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
                            </div>
                            <div class="spec-label">Tenaga</div>
                            <div class="spec-value">{{ $mobil->tenaga_hp ?? '-' }}</div>
                        </div>
                        <div class="spec-card">
                            <div class="spec-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/><path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/></svg>
                            </div>
                            <div class="spec-label">0-60 MPH</div>
                            <div class="spec-value">{{ $mobil->akselerasi ?? '-' }}</div>
                        </div>
                        <div class="spec-card">
                            <div class="spec-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/></svg>
                            </div>
                            <div class="spec-label">Mesin</div>
                            <div class="spec-value">{{ $mobil->mesin ?? '-' }}</div>
                        </div>
                        <div class="spec-card">
                            <div class="spec-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/><path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/></svg>
                            </div>
                            <div class="spec-label">Torsi</div>
                            <div class="spec-value">{{ $mobil->torsi ?? '-' }}</div>
                        </div>
                        <div class="spec-card">
                            <div class="spec-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.43.402-.662.cabinet-.2.18-.432.349-.648.521C9.952 11.512 8 12.5 8 12.5s-2-.988-2.864-1.669c-.216-.172-.448-.34-.648-.52-.232-.2-.46-.406-.663-.602A5.978 5.978 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.21.202.436.41.66.6.213.173.434.335.644.504C6.978 11.185 8 11.988 8 11.988s1.022-.803 2.175-1.292c.21-.169.431-.331.644-.504.224-.19.45-.398.66-.6A5 5 0 0 0 8 1z"/></svg>
                            </div>
                            <div class="spec-label">Transmisi</div>
                            <div class="spec-value">{{ $mobil->transmisi ?? '-' }}</div>
                        </div>
                    </div>
                </div>

                {{-- RIGHT: Harga + Form --}}
                <div class="col-lg-5">
                    <div class="sticky-card">
                        <div class="harga-label">Estimasi Harga</div>
                        <div class="harga-value">Rp {{ number_format($mobil->harga, 0, ',', '.') }}</div>

                        <div class="form-title">Tertarik Dengan<br>Mobil Ini?</div>

                        @if(session('success'))
                            <div style="background: rgba(74,222,128,0.1); border: 1px solid rgba(74,222,128,0.3); color: #4ade80; padding: 12px 16px; margin-bottom: 16px; font-size: 0.85rem;">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('pesan.store') }}" method="POST" onsubmit="return validasiForm()">
                            @csrf
                            <input type="hidden" name="pesan_teks" id="hidden_pesan">
                            <label class="form-label-dark">Nama Lengkap</label>
                            <input type="text" name="nama_pengirim" class="form-control-dark" placeholder="Masukkan nama..." required>

                            <label class="form-label-dark">Nomor Telepon</label>
                            <input type="text" id="no_hp" name="no_hp" class="form-control-dark" placeholder="+62 8..." required>
                            <small id="errorHp" style="color:#E31E24; font-size:0.75rem; display:none; margin-top:-10px; margin-bottom:12px; display:none;">Nomor HP hanya boleh berisi angka!</small>

                            <label class="form-label-dark">Pesan</label>
                            <textarea id="pesan_input" class="form-control-dark" rows="3" placeholder="Saya tertarik untuk test drive...">Saya tertarik dengan mobil {{ $mobil->nama_mobil }}</textarea>

                            <button type="submit" class="btn-submit">Kirim Permintaan</button>
                        </form>

                        <div class="contact-alt">
                            Atau hubungi kami langsung di<br>
                            <a href="tel:+628110000000">+62 811-0000-0000</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="site-footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="footer-brand">
                        <div class="brand-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/></svg>
                        </div>
                        NAGA <span>MOTOR</span>
                    </div>
                    <p class="footer-desc">Pusat penjualan dan komunitas penggemar mobil terbaik di Indonesia. Kami menghidupkan kembali legenda.</p>
                </div>
                <div class="col-lg-4">
                    <div class="footer-heading">Navigasi</div>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('home') }}#katalog">Koleksi Mobil</a></li>
                        <li><a href="{{ route('home') }}#kontak">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="footer-heading">Kontak</div>
                    <div class="footer-contact">
                        <p>Indonesia</p>
                        <p>info@nagamotor.com</p>
                        <p>+62 811-0000-0000</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Naga Motor. Hak cipta dilindungi undang-undang.</p>
                <div class="footer-socials">
                    <a href="#">Instagram</a>
                    <a href="#">YouTube</a>
                    <a href="#">Facebook</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validasiForm() {
            let noHp = document.getElementById("no_hp").value;
            let errorHp = document.getElementById("errorHp");
            let isNumber = /^\d+$/.test(noHp);

            // Salin isi textarea ke hidden input
            document.getElementById("hidden_pesan").value = document.getElementById("pesan_input").value;

            if (!isNumber) {
                errorHp.style.display = "block";
                return false;
            }
            errorHp.style.display = "none";
            return true;
        }
    </script>
</body>
</html>