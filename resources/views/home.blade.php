@extends('frontend.layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->

<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="hero-content">
            <div class="hero-logo d-flex align-items-center ms-5 gap-3">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" height="120" dispay="block">
                <div class="hero-text">
                    <h1>Pemberdayaan<br>Kesejahteraan Keluarga</h1>
                    <p>Kabupaten Nganjuk</p>
                </div>
            </div>

            <!-- <div class="d-flex align-items-center ms-5 mt-4 gap-5">
                <a href="#about" class="btn-get-started scrollto">Mulai</a>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('frontend/assets/img/download.png') }}" alt="" height="40" class="me-2">
                    <a href="#" class="btn-watch-video">
                        <i class="bi bi-download"></i>
                        <span>Download Aplikasi</span>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End Hero -->


<!-- Main -->
<main id="main">
    <!-- ======= Beranda ======= -->
    <section id="about" class="about section-bg">

        <div class="container" data-aos="fade-up">
            <!-- Judul -->
            <div class="section-title">
                <h2>Beranda</h2>
                <h3>PKK <span>Kabupaten Nganjuk</span></h3>
            </div>
            <!-- BAGIAN 1: APP -->
            <div class="app-content">
                <div class="app-image">
                    <img src="{{ asset('frontend/assets/img/gadget.png') }}" alt="">
                </div>

                <div class="app-text">
                    <h4 class="fw-bold">E-PKK Kab.Nganjuk App</h4>
                    <p>
                        E-PKK Kab. Nganjuk adalah aplikasi digital yang digunakan untuk mendukung pelaksanaan program PKK agar lebih mudah, cepat, dan teratur. Aplikasi ini memudahkan pengguna dalam melakukan pelaporan kegiatan secara langsung melalui perangkat genggam.

                        Selain itu, E-PKK juga menyediakan fitur unggah galeri untuk mendokumentasikan kegiatan PKK dalam bentuk foto maupun laporan. Dengan fitur ini, seluruh aktivitas dapat tercatat dengan rapi, mudah diakses, dan terdokumentasi dengan baik dalam satu sistem.
                    </p>
                    <a href="#" class="btn-download">Download Sekarang</a>
                </div>
            </div>

            <!-- BAGIAN 2: PROFIL -->
            <div class="profile-content">

                <div class="profile-text">
                    <h4>Ketua TPPK Kab. Nganjuk</h4>
                    <p>
                        Ketua Tim Penggerak PKK (TP PKK) Kabupaten Nganjuk saat ini adalah 
                        Ny. S. Wahyuni Marhaen, S.E.. Beliau aktif memimpin program pemberdayaan keluarga, penurunan stunting, dan kesehatan masyarakat, didampingi pengurus TP PKK lainnya di Kabupaten Nganjuk.
                    </p>
                </div>

                <div class="profile-image">
                    <img src="{{ asset('frontend/assets/img/ketuapkk.png') }}" alt="">
                </div>

                <div class="visi-misi">
                    <h5>Visi Utama</h5>
                    <p>Mewujudkan keluarga sehat, cerdas, berdaya, beriman, dan bertaqwa menuju Nganjuk Melesat (Maju, Sejahtera, Bermartabat).</p>

                    <h5>Misi Utama</h5>
                    <ul>
                        <li>Sinergi Daerah</li>
                        <li>Digitalisasi PKK</li>
                        <li>Pemberdayaan</li>
                        <li>Kolaborasi</li>
                    </ul>
                </div>

            </div>

        </div>

    </section>
    <!-- End Beranda -->

    <!-- ======= Galeri ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container">
            <div class="section-title">
                <h2>Galeri</h2>
                <h3>Galeri PKK <span>Kabupaten Nganjuk</span></h3>
                <p>Dokumentasi Acara kegiatan PKK Kabupaten Nganjuk.</p>
            </div>
        </div>

        <div class="gallery-wrapper">

            <!-- tombol kiri -->
            <button class="nav prev">
                <img src="{{ asset('frontend/assets/img/kiri.png') }}" alt="">
            </button>

            <!-- slider -->
            <div class="gallery-container" id="slider">

                <div class="gallery-card">
                    <img src="{{ asset('frontend/assets/img/galeri1.jpeg') }}">
                    <div class="gallery-info">
                        <h5>Pelatihan PKK</h5>
                        <span>12 Januari 2026</span>
                    </div>
                </div>

                <div class="gallery-card">
                    <img src="{{ asset('frontend/assets/img/galeri2.jpeg') }}">
                    <div class="gallery-info">
                        <h5>Kegiatan Posyandu</h5>
                        <span>20 Februari 2026</span>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('frontend/assets/img/galeri1.jpeg') }}">
                    <div class="gallery-info">
                        <h5>Kegiatan Posyandu</h5>
                        <span>20 Februari 2026</span>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('frontend/assets/img/galeri2.jpeg') }}">
                    <div class="gallery-info">
                        <h5>Kegiatan Posyandu</h5>
                        <span>20 Februari 2026</span>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('frontend/assets/img/galeri1.jpeg') }}">
                    <div class="gallery-info">
                        <h5>Kegiatan Posyandu</h5>
                        <span>20 Februari 2026</span>
                    </div>
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('frontend/assets/img/galeri2.jpeg') }}">
                    <div class="gallery-info">
                        <h5>Kegiatan Posyandu</h5>
                        <span>20 Februari 2026</span>
                    </div>
                </div>

            </div>

            <!-- tombol kanan -->
            <button class="nav next">
                <img src="{{ asset('frontend/assets/img/kanan.png') }}" alt="">
            </button>
        </div>

    </section>
    <!-- End  Galeri -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services section-bg">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Program Kerja</h2>
                <h3>Program Kerja PKK <span>Kabupaten Nganjuk </span></h3>
                <p>Program Kerja yang akan dikerjakan Ketua PKK Kabupaten Nganjuk.</p>
            </div>
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card custom-card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/assets/img/galeri1.jpeg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5>Kelompok Kerja 1</h5>
                            <p>
                                Membidangi Pembinaan Karakter dalam Keluarga, yang di antaranya mengelola
                                program Penghayatan dan Pengalaman Pancasila serta Gotong Royong.
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card custom-card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/assets/img/galeri2.jpeg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5>Kelompok Kerja 2</h5>
                            <p>
                                Membidangi Pendidikan & Peningkatan Ekonomi Keluarga...
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card custom-card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/assets/img/galeri1.jpeg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5>Kelompok Kerja 3</h5>
                            <p>
                                Membidangi penguatan ketahanan keluarga...
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card custom-card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/assets/img/galeri2.jpeg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5>Kelompok Kerja 4</h5>
                            <p>
                                Membidangi penguatan ketahanan keluarga...
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Item -->
        </div>
    </section>
    <!-- End Services Section -->
</main>
<!-- End #main -->

@endsection