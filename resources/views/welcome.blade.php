@extends('front.app')

@section('title', 'Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi')

@section('content')
<header class="masthead bg-primary text-white text-center" id="beranda">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img src="{{ asset('assets/logo.png') }}" class="mb-3" width="300px">

        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Sistem Pakar Pendeteksi Kerusakan Komputer</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>
</header>
<!-- Tentang Section-->
<section class="page-section bg-white mb-0" id="tentang">
    <div class="container">
        <!-- Tentang Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase">Tentang</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Tentang Section Content-->
        <div class="row">
            <div class="col-lg-12 text-center"><p class="lead">Sistem pakar pendeteksi kerusakan komputer adalah sebuah aplikasi berbasis teknologi kecerdasan buatan yang dirancang untuk membantu pengguna dalam mengidentifikasi dan mendiagnosis masalah atau kerusakan yang terjadi pada komputer mereka. Sistem ini menggabungkan pengetahuan dari para ahli dalam bidang perbaikan komputer ke dalam sebuah program komputer, sehingga dapat memberikan rekomendasi dan solusi yang akurat bagi pengguna.</p></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4">
                <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="..." />
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4">
                <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="..." />
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4">
                <img class="img-fluid" src="assets/img/portfolio/circus.png" alt="..." />
            </div>
        </div>
    </div>
</section>

<!-- Diagnosa Section-->
<section class="page-section bg-primary text-white mb-0" id="diagnosa">
    <div class="container">
        <!-- Diagnosa Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Deteksi Sekarang</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Diagnosa Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="/diagnosa">
                <i class="fas fa-search me-2"></i>
                Diagnosa!
            </a>
        </div>
    </div>
</section>