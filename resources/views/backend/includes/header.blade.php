<header id="header" class="header fixed-top d-flex align-items-center px-4">

  <!-- KIRI -->
  <div class="d-flex align-items-center gap-3">
    <img src="{{ asset('backend/assets/img/logo.png') }}" alt="" width="42">

    <div class="header-title">
      <div class="title-main">
        Pemberdayaan Kesejahteraan Keluarga
      </div>
      <div class="title-sub">
        Kabupaten Nganjuk
      </div>
    </div>
  </div>

  <!-- KANAN -->
  <div class="ms-auto d-flex align-items-center gap-3">

    <!-- Profile -->
    <div class="dropdown">
      <div class="profile-circle" data-bs-toggle="dropdown">
        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
      </div>

      <ul class="dropdown-menu dropdown-menu-end shadow-sm">
        <li class="dropdown-header text-center">
          <strong>{{ auth()->user()->name ?? 'User' }}</strong><br>
          <small class="text-muted">{{ auth()->user()->role ?? '' }}</small>
        </li>
        <li><hr class="dropdown-divider"></li>

        <li>
          <a class="dropdown-item" href="{{ route('admin.profile.index') }}">
            <i class="bi bi-person"></i> Profil
          </a>
        </li>

        <li>
          <a class="dropdown-item text-danger" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </li>
      </ul>
    </div>

  </div>

</header>