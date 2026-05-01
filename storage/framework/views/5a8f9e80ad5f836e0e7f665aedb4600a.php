<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin - PKK Kabupaten Nganjuk'); ?></title>
    
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
            position: sticky;
            top: 0;
            z-index: 100;
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
            position: sticky;
            top: 80px;
            height: calc(100vh - 80px);
            align-self: flex-start;
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
            cursor: pointer;
        }

        .sidebar-menu a.dropdown-toggle::after {
            content: '';
            margin-left: auto;
            width: 0;
            height: 0;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 5px solid #666;
            transition: transform 0.3s ease;
        }

        .sidebar-menu a.dropdown-toggle[aria-expanded="true"]::after {
            transform: rotate(180deg);
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
        <img src="<?php echo e(asset('frontend/assets/img/logo.png')); ?>" alt="Logo">
        <div>
            <h5>Pemberdayaan Kesejahteraan Keluarga<br>Kabupaten Nganjuk</h5>
        </div>
    </div>

    <div class="container-wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
                        <i class="bi bi-grid-3x3-gap"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('tanda-tangan.index')); ?>" class="<?php echo e(request()->routeIs('tanda-tangan.*') ? 'active' : ''); ?>">
                        <i class="bi bi-pencil-square"></i>
                        <span>Tanda Tangan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('berita.index')); ?>" class="<?php echo e(request()->routeIs('berita.*') ? 'active' : ''); ?>">
                        <i class="bi bi-newspaper"></i>
                        <span>Berita</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('pengumuman.index')); ?>" class="<?php echo e(request()->routeIs('pengumuman.*') ? 'active' : ''); ?>">
                        <i class="bi bi-megaphone"></i>
                        <span>Pengumuman</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="toggleMenu(event, 'galeriMenu')" id="galeriToggle"
                       class="<?php echo e(request()->is('galeri/*') ? 'active' : ''); ?>"
                       style="display: flex; align-items: center; gap: 15px; padding: 12px 15px; color: <?php echo e(request()->is('galeri/*') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-size: 14px; border-left: 4px solid <?php echo e(request()->is('galeri/*') ? '#0066cc' : 'transparent'); ?>; background: <?php echo e(request()->is('galeri/*') ? '#e8f0ff' : 'transparent'); ?>; font-weight: <?php echo e(request()->is('galeri/*') ? '600' : 'normal'); ?>;">
                        <i class="bi bi-images" style="font-size: 20px; width: 24px; text-align: center;"></i>
                        <span style="flex: 1;">Galeri</span>
                        <i class="bi bi-chevron-down" id="galeriArrow" style="font-size: 12px; transition: transform 0.3s; <?php echo e(request()->is('galeri/*') ? 'transform: rotate(180deg);' : ''); ?>"></i>
                    </a>
                    <div id="galeriMenu" style="<?php echo e(request()->is('galeri/*') ? 'display:block;' : 'display:none;'); ?> background: #f0f4ff; overflow: hidden;">
                        <a href="<?php echo e(route('galeri.bidang-umum')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('galeri/bidang-umum') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('galeri/bidang-umum') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('galeri/bidang-umum') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Bidang Umum
                        </a>
                        <a href="<?php echo e(route('galeri.pokja1')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('galeri/pokja1') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('galeri/pokja1') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('galeri/pokja1') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Kelompok Kerja 1
                        </a>
                        <a href="<?php echo e(route('galeri.pokja2')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('galeri/pokja2') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('galeri/pokja2') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('galeri/pokja2') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Kelompok Kerja 2
                        </a>
                        <a href="<?php echo e(route('galeri.pokja3')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('galeri/pokja3') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('galeri/pokja3') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('galeri/pokja3') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Kelompok Kerja 3
                        </a>
                        <a href="<?php echo e(route('galeri.pokja4')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('galeri/pokja4') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('galeri/pokja4') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('galeri/pokja4') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Kelompok Kerja 4
                        </a>
                    </div>
                </li>
                <li>
                    <a href="#" onclick="toggleMenu(event, 'pokjaMenu')" id="pokjaToggle"
                       class="<?php echo e(request()->is('kelompok-kerja/*') ? 'active' : ''); ?>"
                       style="display: flex; align-items: center; gap: 15px; padding: 12px 15px; color: <?php echo e(request()->is('kelompok-kerja/*') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-size: 14px; border-left: 4px solid <?php echo e(request()->is('kelompok-kerja/*') ? '#0066cc' : 'transparent'); ?>; background: <?php echo e(request()->is('kelompok-kerja/*') ? '#e8f0ff' : 'transparent'); ?>; font-weight: <?php echo e(request()->is('kelompok-kerja/*') ? '600' : 'normal'); ?>;">
                        <i class="bi bi-briefcase" style="font-size: 20px; width: 24px; text-align: center;"></i>
                        <span style="flex: 1;">Kelompok Kerja</span>
                        <i class="bi bi-chevron-down" id="pokjaArrow" style="font-size: 12px; transition: transform 0.3s; <?php echo e(request()->is('kelompok-kerja/*') ? 'transform: rotate(180deg);' : ''); ?>"></i>
                    </a>
                    <div id="pokjaMenu" style="<?php echo e(request()->is('kelompok-kerja/*') ? 'display:block;' : 'display:none;'); ?> background: #f0f4ff; overflow: hidden;">
                        <a href="<?php echo e(route('kelompok-kerja.bidang-umum')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('kelompok-kerja/bidang-umum') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('kelompok-kerja/bidang-umum') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('kelompok-kerja/bidang-umum') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Bidang Umum
                        </a>
                        <a href="<?php echo e(route('kelompok-kerja.pokja1')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('kelompok-kerja/pokja1') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('kelompok-kerja/pokja1') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('kelompok-kerja/pokja1') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Kelompok Kerja 1
                        </a>
                        <a href="<?php echo e(route('kelompok-kerja.pokja2')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('kelompok-kerja/pokja2') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('kelompok-kerja/pokja2') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('kelompok-kerja/pokja2') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Kelompok Kerja 2
                        </a>
                        <a href="<?php echo e(route('kelompok-kerja.pokja3')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('kelompok-kerja/pokja3') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('kelompok-kerja/pokja3') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('kelompok-kerja/pokja3') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Kelompok Kerja 3
                        </a>
                        <a href="<?php echo e(route('kelompok-kerja.pokja4')); ?>"
                           style="display: flex; align-items: center; gap: 10px; padding: 10px 15px 10px 30px; font-size: 13px; color: <?php echo e(request()->is('kelompok-kerja/pokja4') ? '#0066cc' : '#666'); ?>; text-decoration: none; font-weight: <?php echo e(request()->is('kelompok-kerja/pokja4') ? '600' : 'normal'); ?>;">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: <?php echo e(request()->is('kelompok-kerja/pokja4') ? '#0066cc' : '#aaa'); ?>; flex-shrink: 0;"></span>
                            Kelompok Kerja 4
                        </a>
                    </div>
                </li>
            </ul>

            <div class="sidebar-divider"></div>

            <div class="sidebar-section">
                <div class="sidebar-section-title">AKUN</div>
                <ul class="sidebar-menu">
                    <li>
                        <a href="<?php echo e(route('profil.index')); ?>" class="<?php echo e(request()->routeIs('profil.*') ? 'active' : ''); ?>">
                            <i class="bi bi-person-circle"></i>
                            <span>Profil</span>
                        </a>
                    </li>
                    <li>
                        <form action="<?php echo e(route('logout')); ?>" method="POST" style="margin: 0;">
                            <?php echo csrf_field(); ?>
                            <button type="submit" style="background: none; border: none; width: 100%; text-align: left; cursor: pointer;">
                                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
                                   class="d-flex align-items-center gap-3"
                                   style="display: flex; align-items: center; gap: 15px; padding: 12px 15px; color: #666; text-decoration: none; font-size: 14px; border-left: 4px solid transparent;">
                                    <i class="bi bi-box-arrow-right" style="font-size: 20px; width: 24px; text-align: center;"></i>
                                    <span>Logout</span>
                                </a>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Alert Messages -->
            <?php if($errors->any()): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong>
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <!-- Content -->
            <div class="content-card">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleMenu(event, menuId) {
            event.preventDefault();
            const menu = document.getElementById(menuId);
            const arrowId = menuId.replace('Menu', 'Arrow');
            const arrow = document.getElementById(arrowId);

            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
                if (arrow) arrow.style.transform = 'rotate(180deg)';
            } else {
                menu.style.display = 'none';
                if (arrow) arrow.style.transform = 'rotate(0deg)';
            }
        }
    </script>
</body>
</html>
<?php /**PATH D:\PKK\resources\views/layouts/admin.blade.php ENDPATH**/ ?>