<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="shortcut icon" href="{{ asset('frontend/assets/img/logo.png') }}" type="image/x-icon">

  <!-- CSS -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/login.css') }}">
</head>

<body>

  <div class="login-wrapper">

    <div class="login-card">
      <div class="row g-0">

        <!-- 🔵 KIRI (BACKGROUND + LOGO) -->
        <div class="col-md-6 login-left d-flex flex-column justify-content-center align-items-center text-center text-white">
          <h4 class="mb-3 typing-text">PKK Kabupaten Nganjuk</h4>
          <p class="small mb-4">Pusat Informasi Seputar Kegiatan PKK di Kabupaten Nganjuk</p>
          <img src="{{ asset('frontend/assets/img/logo.png') }}"
            width="140"
            class="logo-animate logo-enter">
        </div>

        <!-- ⚪ KANAN (FORM LOGIN) -->
        <div class="col-md-6 login-right p-5">

          <h2 class="text-center mb-4">Masuk</h2>

          @if ($message = Session::get('success'))
          <div class="alert alert-success">{{ $message }}</div>
          @endif

          @if ($message = Session::get('reset'))
          <div class="alert alert-success">{{ $message }}</div>
          @endif

          <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- LOGIN -->
            <div class="mb-3">
              <label>Email atau Nomor WhatsApp</label>
              <input type="text" name="login"
                class="form-control @error('login') is-invalid @enderror"
                placeholder="Masukkan Email atau Nomor WhatsApp"
                value="{{ old('login') }}" required>

              @error('login')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- PASSWORD -->
            <div class="mb-4">
              <label>Kata Sandi</label>
              <input type="password" name="password"
                class="form-control @error('password') is-invalid @enderror"
                placeholder="Masukkan Kata Sandi Anda" required>

              @error('password')
              <div class="invalid-feedback">Password salah</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">
              Masuk
            </button>

            <div class="text-center">
              <a href="{{ route('password.request') }}">Lupa kata sandi?</a>
            </div>
          </form>

        </div>

      </div>
    </div>

  </div>

  <!-- JS -->
  <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

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

</html>