@extends('backend.utama')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
  {{ $message }}
</div>
@endif

<section class="section dashboard">
  <h4 class="mb-3 fw-bold text-primary">
    <i></i> Dashboard
  </h4>

  <div class="row">

    <div class="col-lg-4 col-md-6">
      <div class="card info-card sales-card">
        <a href="{{ route('admin.accbidangumum.index') }}">

          <div class="card-body">
            <h5 class="card-title">Laporan Bidang Umum</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-newspaper"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $bidangumum }}</h6>
                <span class="text-muted small pt-2 ps-1">Jumlah total Laporan Bidang Umum</span>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <!-- Pokja 1 -->
    <div class="col-lg-4 col-md-6">
      <div class="card info-card sales-card">
        <a href="{{ route('admin.pokja1.index') }}">

          <div class="card-body">
            <h5 class="card-title">Laporan Kelompok Kerja 1</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-newspaper"></i>
              </div>

              <div class="ps-3">
                <h6>{{ $totalbidang1 }}</h6>
                <span class="text-muted small">Jumlah total laporan</span>
              </div>
            </div>
          </div>

        </a>
      </div>
    </div>

    <!-- Pokja 2 -->
    <div class="col-lg-4 col-md-6">
      <div class="card info-card sales-card">
        <a href="{{ route('admin.pokja2.index') }}">

          <div class="card-body">
            <h5 class="card-title">Laporan Kelompok Kerja 2</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-newspaper"></i>
              </div>

              <div class="ps-3">
                <h6>{{ $totalbidang2 }}</h6>
                <span class="text-muted small">Jumlah total laporan</span>
              </div>
            </div>
          </div>

        </a>
      </div>
    </div>

    {{-- Pokja 3 --}}
    {{--
<div class="col-xxl-6 col-md-6">
  <div class="card info-card sales-card">
    <a href="{{ route('admin.pokja3.index') }}">
    <div class="card-body">
      <h5 class="card-title">Laporan Kelompok Kerja 3</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="fa-solid fa-newspaper"></i>
        </div>

        <div class="ps-3">
          <h6>{{ $totalbidang3 }}</h6>
          <span class="text-muted small">Jumlah total laporan</span>
        </div>
      </div>
    </div>
    </a>
  </div>
  </div>
  --}}

  {{-- Pokja 4 --}}
  {{--
<div class="col-xxl-6 col-md-6">
  <div class="card info-card sales-card">
    <a href="{{ route('admin.pokja4.index') }}">
  <div class="card-body">
    <h5 class="card-title">Laporan Kelompok Kerja 4</h5>

    <div class="d-flex align-items-center">
      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
        <i class="fa-solid fa-newspaper"></i>
      </div>

      <div class="ps-3">
        <h6>{{ $totalbidang4 }}</h6>
        <span class="text-muted small">Jumlah total laporan</span>
      </div>
    </div>
  </div>
  </a>
  </div>
  </div>
  --}}

<div class="row mb-3">
    <div class="col-md-4">

      <form method="GET">
        <select name="filter" class="form-select" onchange="this.form.submit()">
          <option value="">-- Pilih Laporan --</option>
          <option value="umum" {{ request('filter')=='umum'?'selected':'' }}>Bidang Umum</option>
          <option value="pokja1" {{ request('filter')=='pokja1'?'selected':'' }}>Pokja 1</option>
          <option value="pokja2" {{ request('filter')=='pokja2'?'selected':'' }}>Pokja 2</option>
        </select>
      </form>

    </div>
  </div>

  <div class="row mt-4">
  <div class="col-12">
    <div class="card p-5">

      <h5 class="mb-3">Semua Laporan</h5>

      {{-- ISI UTAMA --}}
      <div class="text-center">
        <h4>Ini enaknya diisi apa</h4>
        <p class="text-muted">Nanti isi data laporan di sini</p>
      </div>

    </div>
  </div>
</div>

  </div>
</section>

@endsection