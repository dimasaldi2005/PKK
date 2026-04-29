<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">
    <div class="d-flex gap-3">
      <div class="logo d-flex align-items-center">
        <img src="{{ asset ('frontend/assets/img/logo.png')}}" alt="">
      </div>
      <h1 class="logo d-flex align-items-center"><a href="home">Pemberdayaan Kesejahteraan Keluarga </br>Kabupaten Nganjuk<span></span></a></h1>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="{{ route('home') }}#hero">Beranda</a></li>
        <li><a class="nav-link scrollto" href="{{ route('home') }}#portfolio">Galeri</a></li>
        <li><a class="nav-link scrollto " href="{{ route('home') }}#service">Program Kerja</a></li>

        <li class="dropdown"><a href="#informasi"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-toggle"></i></a>
          <ul>
            <li><a href="{{ route('frontend.berita.index') }}">Berita</a></li>
            <li><a href="{{ route('frontend.pengumuman.index') }}">Pengumuman</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-toggle"></i></a>
          <ul>

            <li><a href="{{ route('frontend.visimisi.index') }}">Visi Misi</a></li>
            <li><a href="{{ route('frontend.lambang.index') }}">Arti Lambang PKK</a></li>
            <li><a href="{{ route('frontend.sejarah.index') }}">Sejarah</a></li>
            <li><a href="{{ route('frontend.mars.index') }}">Mars PKK</a></li>
          </ul>
        </li>
        <li class="btn-login">
          <a href="{{ auth()->check() ? route('admin.dashboard') : route('login') }}">
            Masuk
          </a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->