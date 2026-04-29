<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TP - PKK Kabupaten Nganjuk</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts (FIXED) -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:300,400,500,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap-utilities.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

  @include('frontend.pages.navbar')

  @yield('content')

  @include('frontend.pages.footer')

  <!-- Preloader & Back to top -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- ================= JS ================= -->

  <!-- Vendor JS -->
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

  <!-- AOS INIT (WAJIB) -->
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>

  <!-- ================= TYPING JS ================= -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const text1 = "Pemberdayaan";
  const text2 = "Kesejahteraan Keluarga";
  const text3 = "Kabupaten Nganjuk";

  const el1 = document.getElementById("typing-text");
  const el2 = document.getElementById("typing-text-2");
  const el3 = document.getElementById("typing-text-3");

  let i = 0, j = 0, k = 0;
  let mode = "typing"; // typing | deleting

  function loop() {

    if (mode === "typing") {

      // ===== BARIS 1 =====
      if (i < text1.length) {
        el1.textContent += text1[i++];
      }

      // ===== BARIS 2 =====
      else if (j < text2.length) {
        el2.textContent += text2[j++];
      }

      // ===== BARIS 3 (MUNCUL TERAKHIR) =====
      else if (k < text3.length) {
        el3.textContent += text3[k++];
      }

      // ===== SELESAI KETIK =====
      else {
        mode = "pause";
        setTimeout(() => {
          mode = "deleting";
          loop();
        }, 1500);
        return;
      }

    } else if (mode === "deleting") {

      // hapus dari bawah
      if (k > 0) {
        el3.textContent = text3.substring(0, --k);
      }
      else if (j > 0) {
        el2.textContent = text2.substring(0, --j);
      }
      else if (i > 0) {
        el1.textContent = text1.substring(0, --i);
      }
      else {
        mode = "typing"; // ulang lagi
      }

    }

    setTimeout(loop, mode === "typing" ? 70 : 35);
  }

  loop();

});
</script>


</body>

</html>