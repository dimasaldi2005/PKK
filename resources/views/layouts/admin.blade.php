<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - PKK Kabupaten Nganjuk')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
        }

        .top-header {
            background-color: white;
            padding: 15px 20px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .top-header img {
            width: 50px;
            height: 50px;
        }

        .top-header h5 {
            margin: 0;
            font-size: 14px;
            font-weight: 600;
            color: #333;
            line-height: 1.3;
        }

        .container-wrapper {
            display: flex;
            min-height: calc(100vh - 80px);
        }

        .sidebar {
            width: 200px;
            background-color: #f8f9fa;
            padding: 20px 0;
            border-right: 1px solid #e0e0e0;
            overflow-y: auto;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin: 0;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 15px;
            color: #666;
            text-decoration: none;
            font-size: 14px;
            text-align: left;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .sidebar-menu a:hover {
            background-color: #e8f0ff;
            color: #0066cc;
        }

        .sidebar-menu a.active {
            background-color: #e8f0ff;
            color: #0066cc;
            font-weight: 600;
            border-left-color: #0066cc;
        }

        .sidebar-menu i {
            font-size: 20px;
            width: 24px;
            text-align: center;
        }

        .sidebar-divider {
            height: 1px;
            background-color: #e0e0e0;
            margin: 15px 0;
        }

        .sidebar-section {
            padding: 0 10px;
        }

        .sidebar-section-title {
            font-size: 10px;
            font-weight: 600;
            color: #999;
            text-transform: uppercase;
            padding: 10px;
            text-align: center;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            margin-left: 0;
        }

        .content-card {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .page-title {
            font-size: 22px;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
        }

        .form-section {
            margin-bottom: 30px;
        }

        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px 12px;
            font-size: 13px;
            font-family: 'Poppins', sans-serif;
        }

        .form-control:focus {
            border-color: #0066cc;
            box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.25);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .input-group {
            display: flex;
            gap: 0;
        }

        .input-group .form-control {
            border-radius: 4px 0 0 4px;
        }

        .input-group-text {
            background-color: #0066cc;
            border: 1px solid #0066cc;
            color: white;
            padding: 10px 12px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .btn-kirim {
            background-color: #0066cc;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            float: right;
        }

        .btn-kirim:hover {
            background-color: #0052a3;
        }

        .table-section {
            margin-top: 40px;
            clear: both;
        }

        .table-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        .table thead {
            background-color: #f8f9fa;
        }

        .table thead th {
            padding: 12px;
            text-align: left;
            font-weight: 600;
            color: #555;
            border-bottom: 1px solid #ddd;
        }

        .table tbody td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            color: #666;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .btn-action {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
            margin-right: 5px;
            transition: all 0.3s ease;
        }

        .btn-edit {
            background-color: #28a745;
            color: white;
        }

        .btn-edit:hover {
            background-color: #218838;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .img-placeholder {
            width: 80px;
            height: 80px;
            background-color: #e0e0e0;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
        }

        .alert {
            border-radius: 4px;
            margin-bottom: 20px;
            padding: 12px 15px;
            font-size: 13px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 120px;
            }

            .main-content {
                padding: 15px;
            }

            .content-card {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Header -->
    <div class="top-header">
        <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo">
        <div>
            <h5>Pemberdayaan Kesejahteraan Keluarga<br>Kabupaten Nganjuk</h5>
        </div>
    </div>

    <div class="container-wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="bi bi-grid-3x3-gap"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <i class="bi bi-pencil-square"></i>
                        <span>Tanda Tangan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('berita.index') }}" class="{{ request()->routeIs('berita.*') ? 'active' : '' }}">
                        <i class="bi bi-newspaper"></i>
                        <span>Berita</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengumuman.index') }}" class="{{ request()->routeIs('pengumuman.*') ? 'active' : '' }}">
                        <i class="bi bi-megaphone"></i>
                        <span>Pengumuman</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <i class="bi bi-images"></i>
                        <span>Galeri</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <i class="bi bi-briefcase"></i>
                        <span>Kelompok Kerja</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-divider"></div>

            <div class="sidebar-section">
                <div class="sidebar-section-title">AKUN</div>
                <ul class="sidebar-menu">
                    <li>
                        <a href="#" class="">
                            <i class="bi bi-person-circle"></i>
                            <span>Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Alert Messages -->
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Content -->
            <div class="content-card">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
