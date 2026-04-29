<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Dashboard</title>

  <!-- Favicons -->
  <link href="backend/assets/img/favicon.png" rel="icon">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- ✅ SELECT2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Nunito|Poppins" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  {{-- HEADER --}}
  @include('backend.includes.header')

  {{-- SIDEBAR --}}
  @include('backend.includes.sidebar')

  <main id="main" class="main">
    @yield('content')
  </main>

  <!-- 🔥 LOGOUT MODAL -->
  <div class="modal fade" id="logoutModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Konfirmasi Logout</h5>
        </div>

        <div class="modal-body">
          Yakin ingin keluar?
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Batal
          </button>

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">
              Keluar
            </button>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!--  JQUERY (WAJIB) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!--  SELECT2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!--  INIT SELECT2 -->
  <script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Pilih Jabatan",
            allowClear: true,
            width: '100%'
        });
    });
  </script>
  <script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Pilih Pokja",
            allowClear: true,
            width: '100%'
        });
    });
  </script>

</body>
</html>