@extends('frontend/layouts.app')

@section('content')


<div id="cekk">
    <div class="section-title">
        <h3 class="text-center fs-1"> <span>Mars PKK</span></h3>
        <p class="text-center">Kabupaten Nganjuk</p>
    </div>
</div>

<!-- Breadcrumb -->
<div class="container">
    <nav aria-label="breadcrumb" style="background-color: #fff" class="mt-3">
        <ol class="breadcrumb p-3">
            <li class="breadcrumb-item"><a href="{{ route('home')}}" class="text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item active"><a aria-current="page" value="">Lagu Mars PKK</a></li>
        </ol>
    </nav>
</div>

<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
        <p class="fw-normal" id="cek">Marilah hai Rakyat Indonesia</p>
        <p class="fw-normal" id="cek">Membangun segera</p>
        <p class="fw-normal" id="cek">Membangun kluarga yang sejahtera</p>
        <p class="fw-normal" id="cek">Dengan PKK</p> </br>
        <p class="fw-normal" id="cek">Hayatilah dan amalkan Pancasila</p>
        <p class="fw-normal" id="cek">Untuk negara</p>
        <p class="fw-normal" id="cek">Hidup gotong royong, makmur pangan dan sandang</p>
        <p class="fw-normal" id="cek">Rumah sehat sentosa</p> </br>
        <p class="fw-normal" id="cek">Tata laksana di dalam rumah tangga</p>
        <p class="fw-normal" id="cek">Rapi dan indah</p>
        <p class="fw-normal" id="cek">Didiklah putra berpribadi bangsa</p>
        <p class="fw-normal" id="cek">Trampil dan sehat</p></br>
        <p class="fw-normal" id="cek">Kembangkan koprasi jagalah lingkungan</p>
        <p class="fw-normal" id="cek">Dan sekitarnya</p>
        <p class="fw-normal" id="cek">Aman dan bahagia kluarga berencana</p>
        <p class="fw-normal" id="cek">Hidup jaya PKK</p>
</section>
<!-- End Services Section -->
@endsection