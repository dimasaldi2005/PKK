<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  @php
  $isAdmin = Auth::guard('web')->check();
  $isPengguna = Auth::guard('pengguna')->check();
  @endphp

  <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-heading">Menu</li>


    {{-- Dashboard --}}
    @if ($isAdmin || $isPengguna)
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    @endif

    {{-- Admin Only --}}
    @if ($isAdmin)
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('admin.ttd.index') }}">
        <i class="fa-solid fa-signature"></i>
        <span>Tanda Tangan</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('admin.input_berita.index') }}">
        <i class="fa-solid fa-newspaper"></i>
        <span>Berita</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('admin.input_pengumuman.index') }}">
        <i class="fa-sharp fa-solid fa-bullhorn"></i>
        <span>Pengumuman</span>
      </a>
    </li>
    @endif

    {{-- Galeri (admin & pengguna) --}}
    @if ($isAdmin || $isPengguna)
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#galeri_nav" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-image"></i>
        <span>Galeri</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="galeri_nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="{{ route('admin.galeribidangumum.index') }}"><i class="bi bi-circle"></i><span>Bidang Umum</span></a></li>
        <li><a href="{{ route('admin.galeripokja1.index') }}"><i class="bi bi-circle"></i><span>Kelompok Kerja 1</span></a></li>
        <li><a href="{{ route('admin.galeripokja2.index') }}"><i class="bi bi-circle"></i><span>Kelompok Kerja 2</span></a></li>
        <li><a href="{{ route('admin.galeripokja3.index') }}"><i class="bi bi-circle"></i><span>Kelompok Kerja 3</span></a></li>
        <li><a href="{{ route('admin.galeripokja4.index') }}"><i class="bi bi-circle"></i><span>Kelompok Kerja 4</span></a></li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-book"></i>
        <span>Kelompok Kerja</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="{{ route('admin.accbidangumum.index') }}"><i class="bi bi-circle"></i><span>Bidang Umum</span></a></li>
        <li><a href="{{ route('admin.pokja1.index') }}"><i class="bi bi-circle"></i><span>Kelompok Kerja 1</span></a></li>
        <li><a href="{{ route('admin.pokja2.index') }}"><i class="bi bi-circle"></i><span>Kelompok Kerja 2</span></a></li>
        <li><a href="{{ route('admin.pokja3.index') }}"><i class="bi bi-circle"></i><span>Kelompok Kerja 3</span></a></li>
        <li><a href="{{ route('admin.pokja4.index') }}"><i class="bi bi-circle"></i><span>Kelompok Kerja 4</span></a></li>
      </ul>
    </li>
    @endif

    <!-- Halaman -->
        <li class="nav-heading">Halaman</li>

    {{-- Profil --}}
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('admin.profile.index') }}">
        <i class="fa-solid fa-user"></i>
        <span>Profil</span>
      </a>
    </li>

    {{-- Logout --}}
    <li class="nav-item">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="nav-link collapsed" onclick="return confirm('Apakah anda yakin ingin keluar?')">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span>Keluar</span>
        </button>
      </form>
    </li>

  </ul>

</aside>