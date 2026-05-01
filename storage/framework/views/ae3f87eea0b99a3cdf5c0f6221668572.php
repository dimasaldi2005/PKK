<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/img/logo.png')); ?>" type="image/x-icon">

  <!-- CSS -->
  <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/login.css')); ?>">
</head>

<body>

  <div class="login-wrapper">

    <div class="login-card">
      <div class="row g-0">

        <!-- 🔵 KIRI (BACKGROUND + LOGO) -->
        <div class="col-md-6 login-left d-flex flex-column justify-content-center align-items-center text-center text-white">
          <h4 class="mb-3 typing-text">PKK Kabupaten Nganjuk</h4>
          <p class="small mb-4">Pusat Informasi Seputar Kegiatan PKK di Kabupaten Nganjuk</p>
          <img src="<?php echo e(asset('frontend/assets/img/logo.png')); ?>"
            width="140"
            class="logo-animate logo-enter">
        </div>

        <!-- ⚪ KANAN (FORM LOGIN) -->
        <div class="col-md-6 login-right p-5">

          <h2 class="text-center mb-4">Masuk</h2>

          <?php if($message = Session::get('success')): ?>
          <div class="alert alert-success"><?php echo e($message); ?></div>
          <?php endif; ?>

          <?php if($message = Session::get('reset')): ?>
          <div class="alert alert-success"><?php echo e($message); ?></div>
          <?php endif; ?>

          <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <!-- LOGIN -->
            <div class="mb-3">
              <label>Email atau Nomor WhatsApp</label>
              <input type="text" name="login"
                class="form-control <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Masukkan Email atau Nomor WhatsApp"
                value="<?php echo e(old('login')); ?>" required>

              <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- PASSWORD -->
            <div class="mb-4">
              <label>Kata Sandi</label>
              <input type="password" name="password"
                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Masukkan Kata Sandi Anda" required>

              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback">Password salah</div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">
              Masuk
            </button>

            <div class="text-center">
              <a href="<?php echo e(route('password.request')); ?>">Lupa kata sandi?</a>
            </div>
          </form>

        </div>

      </div>
    </div>

  </div>

  <!-- JS -->
  <script src="<?php echo e(asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

</body>
<script>
  const text = "Pemberdayaan Kesejahteraan Keluarga";
  let i = 0;
  let isDeleting = false;

  function typeLoop() {
    let currentText = text.substring(0, i);
    document.querySelector(".typing-text").innerHTML = currentText;

    if (!isDeleting) {
      i++;
      if (i > text.length) {
        isDeleting = true;
        setTimeout(typeLoop, 1000); // jeda sebelum hapus
        return;
      }
    } else {
      i--;
      if (i === 0) {
        isDeleting = false;
      }
    }

    setTimeout(typeLoop, isDeleting ? 50 : 100);
  }

  typeLoop();
</script>

</html><?php /**PATH D:\PKK\resources\views/auth/login.blade.php ENDPATH**/ ?>