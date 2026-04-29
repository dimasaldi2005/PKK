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
                <h2>Berita Terbaru</h2>
                <h3>Berita PKK <span>Kabupaten Nganjuk </span></h3>
                <p>Berita dan informasi terkini dari PKK Kabupaten Nganjuk.</p>
            </div>
            <div class="row gy-3">
                @forelse($berita as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card custom-card">
                            <div class="card-img">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->judul }}" class="img-fluid" style="height: 200px; object-fit: cover;">
                                @else
                                    <div style="height: 200px; background-color: #e0e0e0; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-image" style="font-size: 48px; color: #999;"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <h5>{{ $item->judul }}</h5>
                                <p>{{ Str::limit($item->deskripsi, 100) }}</p>
                                <small class="text-muted">{{ $item->created_at->format('d F Y') }}</small>
                                <br>
                                <a href="{{ route('berita.show', $item->id) }}" class="btn btn-sm btn-primary mt-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-muted">Belum ada berita</p>
                    </div>
                @endforelse
            </div>
            <!-- End Card Item -->
            <div class="text-center mt-4">
                <a href="{{ route('berita.index') }}" class="btn btn-primary">Lihat Semua Berita</a>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Pengumuman Section ======= -->
    <section id="pengumuman" class="services">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Pengumuman Terbaru</h2>
                <h3>Pengumuman PKK <span>Kabupaten Nganjuk </span></h3>
                <p>Pengumuman penting dari PKK Kabupaten Nganjuk.</p>
            </div>
            <div class="row gy-3">
                @forelse($pengumuman as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card custom-card">
                            <div class="card-body">
                                <h5>{{ $item->judul }}</h5>
                                <p>{{ Str::limit($item->deskripsi, 100) }}</p>
                                <small class="text-muted"><strong>Tempat:</strong> {{ $item->tempat }}</small>
                                <br>
                                <small class="text-muted"><strong>Tanggal:</strong> {{ $item->tanggal->format('d F Y') }}</small>
                                <br>
                                <a href="{{ route('pengumuman.show', $item->id) }}" class="btn btn-sm btn-primary mt-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-muted">Belum ada pengumuman</p>
                    </div>
                @endforelse
            </div>
            <!-- End Card Item -->
            <div class="text-center mt-4">
                <a href="{{ route('pengumuman.index') }}" class="btn btn-primary">Lihat Semua Pengumuman</a>
            </div>
        </div>
    </section>
    <!-- End Pengumuman Section -->
</main>
<!-- End #main -->

@endsection