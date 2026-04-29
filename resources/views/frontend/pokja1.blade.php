@extends('frontend/layouts.app')

@section('content')

<section id="heroo" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h2 class="bold">Sekilas Tentang</h2>
        <h4 class="bold">Kelompok Kerja 1</h4>
        <p class="bold">
            Membidangi Pembinaan Karakter dalam Keluarga, yang di antaranya</br> menglola program Penghayatan dan Pengalaman Pancasila serta</br> Gotong Royong.
        </p>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Service Details Section ======= -->
<section id="service-details" class="service-details">
    <section id="about" class="about ">
        <div class="text-center">
            <img src="{{ asset ('frontend/assets/img/logo.png')}}" class="img-fluid" alt="" style="max-height: 300px;margin-bottom: 43px">
        </div>
        <div class="container" data-aos="fade-up">
            <p class="fw-bold fs-4 text-center" id="bold">Visi Pokja 1 :</p></br>
            <p class="fw-normal text-center" id="cek">Menumbuhkan karakter keluarga yang bahagia,
                aman dan damai melalui penghayatan dan pengamalan Pancasila serta semangat gotong royong.</p></br>
            <p class="fw-bold fs-4 text-center" id="bold">Program Pokok Pokja 1 :</p></br>
            <div id="cek">
                <p class="fw-normal text-center">Penghayatan dan Pengamalan Pancasila</p>
                <p class="fw-normal text-center">Gotong Royong</p>

            </div>
        </div>

    </section><!-- End About Section -->

    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <p class="fw-bold fs-4 text-center" id="bold">Tugas :</p></br>
            <div id="cek">
                <p class="fw-normal">1. Memantapkan kerukunan dan toleransi antar umat beragama, saling menghormati dan menghargai dalam wadah Negara Kesatuan Republik Indonesia.</p>
                <p class="fw-normal">2. Meningkatkan ketahanan keluarga dalam rangka mewujudkan kesadaran setiap warga tentang Penghayatan dan Pengamalan Pancasila melalui Pembinaan Kesadaran Bela Negara (PKBN)</p>
                <p class="fw-normal">3. Memantapan Pola Asuh Anak dan remaja dalam keluarga serta perlindungan anak melalui Lokakarya dan Ujicoba.</p>
                <p class="fw-normal">4. Peningkatan pemahaman dan pengamalan perilaku budi pekerti dan sopan santun dalam keluarga dan lingkungan</p>
                <p class="fw-normal">5. Meningkatkan pemahaman peraturan perundangan yang berkait dengan pencegahan Kekerasan Dalam Rumah Tangga (KDRT), pencegahan perdagangan orang (trafficking), peningkatan pemahaman penyalahgunaan narkoba melalui life skill dan parenting skill.</p>
                <p class="fw-normal">6. Meningkatkan kesadaran hidup bergotong royong, kesetiakawanan sosial, keamanan lingkungan, Tentara Manunggal Membangun Desa (TMMD) dan lain lainnya.</p>
                <p class="fw-normal">7. Memberdayakan LANSIA dalam kegiatan yang produktif dan menjadi teladan dalam keluarga dan lingkungannya.</p>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <section id="about" class="about ">
        <div class="container" data-aos="fade-up">
            <p class="fw-bold fs-4 text-center" id="bold">Prioritas Program</p>
            </br>
            <div class="text-center">
                <img src="{{ asset('frontend/assets/img/p.jpeg') }}"
                    alt=""
                    class="img-fluid rounded mb-3"
                    style="width: 100%; height: auto;">
            </div>
            <br>
            <p class="fw-bold fs-4" id="bold">
                Penghayatan dan Pengamalan Pancasila</p>
            <p class="fw-normal" id="cek">Menumbuhkan ketahanan keluarga melalui kesadaran bermasyarakat, berbangsa dan bernegara perlu dilaksanakan pemahaman secara terpadu</p></br>

            <p class="fw-bold fs-4" id="bold">Pembinaan Kesadaran Bela Negara (PKBN)</p>
            <p class="fw-normal" id="cek">PKBN mencakup 5 (lima) unsur: Kecintaan tanah air, Kesadaran berbangsa dan bernegara, Keyakinan atas kebenaran Pancasila, Kerelaan berkorban untuk Bangsa dan Negara serta Memiliki kemampuan awal bela Negara.</p></br>

            <p class="fw-bold fs-4" id="bold">Kesadaran Hukum (KEDARKUM)</p>
            <p class="fw-normal" id="cek">ADARKUM adalah upaya untuk meningkatkan pemahaman tentang peraturan perundang-undangan diprioritaskan di PKK untuk pencegahan PKDRT, Trafficking, Perlindungan Anak, NARKOBA Dan lain-lain</p></br>

            <p class="fw-bold fs-4" id="bold">Pola Asuh Anak Dan Remaja</p>
            <p class="fw-normal" id="cek">Pola Asuh anak dan remaja adalah upaya untuk menumbuhkan dan membangun perilaku, budi pekerti, sopan santun didalam keluarga sesuai budaya bangsa</p></br>

            <p class="fw-bold fs-4" id="bold">Pemahaman Dan Ketrampilan Hidup</p>
            <p class="fw-normal" id="cek">Pemahaman dan ketrampilan hidup adalah upaya menumbuhkan kesadaran orang tua dalam upaya pencegahan penyalahgunaan Narkoba.</p>
        </div>
    </section>
    <!-- End About Section -->

    <section id="about" class="about section-bg gotong">
        <div class="container" data-aos="fade-up">
            <p class="fw-bold fs-4 text-center" id="bold">Gotong royong</p></br>
            <p class="fw-normal" id="cek">Kegiatan gotong royong dilaksanakan dengan membangun kerjasama yang baik antar sesama: keluarga, warga dan kelompok untuk mewujudkan semangat persatuan dan kesatuan.</p></br>
            <p class="fw-bold fs-4" id="bold">Misi Tim Penggerak PKK :</p></br>
            <div id="cek">
                <p class="fw-normal">1. Menumbuhkan kesadaran, kesetiakawanan sosial, bertenggang rasa dan kebersamaan serta saling menghormati antar umat beragama</p>
                <p class="fw-normal">2. Memberdayakan LANSIA agar dapat menjaga kesehatan fisik dan mental, kebugaran, keterampilan agar dapat melaksanakan kegiatan secara produktif dan menjadi teladan bagi keluarga dan lingkungannya.</p>
                <p class="fw-normal">3. Berpartisipasi dalam pelaksanaan kegiatan bakti sosial, kegiatan Tentara Manunggal Membangun Desa (TMMD).</p>
            </div>
    </section><!-- End About Section -->
</section><!-- End Service Details Section -->

</section><!-- End Services Section -->
@endsection