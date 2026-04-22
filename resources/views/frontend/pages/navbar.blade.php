<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">
    <div class="d-flex gap-3">
      <div class="logo d-flex align-items-center">
        <img src="{{ asset ('frontend/assets/img/logo.png')}}" class="img-fluid" alt="">
      </div>
      <h1 class="logo d-flex align-items-center"><a href="home">Pemberdayaan Kesejahteraan Keluarga </br>Kabupaten Nganjuk<span></span></a></h1>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="#about">Beranda</a></li>
        <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
        <li><a class="nav-link scrollto " href="#service">Program Kerja</a></li>

        <li class="dropdown"><a href="#informasi"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-toggle"></i></a>
          <ul>
            <li><a href="berita">Berita</a></li>
            {{-- <li><a href="">Laporan Kesehatan</a>
        </li>
        <li><a href="">Laporan Kelestarian Lingkungan Hidup</a></li>
        <li><a href="">Laporan Perencanaan Sehat</a></li> --}}
            <li><a href="">Pengumuman</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-toggle"></i></a>
          <ul>

            <li><a href="">Visi Misi</a></li>
            <li><a href="">Arti Lambang PKK</a></li>
            <li><a href="">Sejarah</a></li>
            <li><a href="">Mars PKK</a></li>
          </ul>
        </li>
        <li class="btn-login"><a href="">Masuk</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->