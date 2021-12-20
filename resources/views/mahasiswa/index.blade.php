@extends('app.indexmahasiswa')

@section('title', 'Homepage')

@section('content')


<!-- Masthead-->
<header class="masthead" id="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Selamat Datang, {{ Auth::user()->name }}!</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">Untuk membaca informasi mengenai kampus merdeka beserta kegiatan apa saja yang ada di dalamnya silakan langsung klik tombol di bawah ini</p>
                <a class="btn btn-primary btn-xl" href="#mbkm">Apa Itu Kampus Merdeka?</a>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="page-section bg-primary" id="mbkm">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Merdeka Belajar Kampus Merdeka</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Merdeka Belajar – Kampus Merdeka merupakan salah satu kebijakan dari       Menteri Pendidikan dan Kebudayaan, Nadiem Makariem. Salah satu program dari kebijakan Merdeka Belajar
                    – Kampus Merdeka adalah Hak Belajar Tiga Semester di Luar Program Studi. Program
                    tersebut merupakan amanah dari berbagai regulasi/landasan hukum pendidikan tinggi
                    dalam rangka peningkatan mutu pembelajaran dan lulusan pendidikan tinggi.</p>
                <a class="btn btn-light btn-xl" href="/kegiatan/mbkm">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- Kegiatan-->
<section class="page-section" id="kegiatan">
    <div class="container px-4 px-lg-5">
        <h3 class="text-center mt-0">Daftar Kegiatan Kampus Merdeka</h3>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-person fs-1 text-primary"></i></div>
                    <h3 class="h5 mb-2">Magang / Praktik Kerja</h3>
                    <a href="/kegiatan/mitramagang" class="text-muted mb-0">Pendaftaran</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h5 mb-2">Studi Independen</h3>
                    <a href="/kegiatan/mitrastudi" class="text-muted mb-0">Pendaftaran</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h5 mb-2">Proyek Kemanusiaan</h3>
                    <a href="/kegiatan/mitrakms" class="text-muted mb-0">Pendaftaran</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-people fs-1 text-primary"></i></div>
                    <h3 class="h5 mb-2">KKN Tematik</h3>
                    <a href="/kegiatan/mitrakkn" class="text-muted mb-0">Pendaftaran</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-search fs-1 text-primary"></i></div>
                    <h3 class="h5 mb-2">Penelitian</h3>
                    <a href="/kegiatan/mitraplt" class="text-muted mb-0">Pendaftaran</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-book fs-1 text-primary"></i></div>
                    <h3 class="h5 mb-2">Asistensi Mengajar</h3>
                    <a href="/kegiatan/mitraajar" class="text-muted mb-0">Pendaftaran</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-people fs-1 text-primary"></i></div>
                    <h3 class="h5 mb-2">Pertukaran Pelajar</h3>
                    <a href="/kegiatan/mitraptk" class="text-muted mb-0">Pendaftaran</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-cash fs-1 text-primary"></i></div>
                    <h3 class="h5 mb-2">Kewirausahaan</h3>
                    <a href="/kegiatan/mitrakwu" class="text-muted mb-0">Pendaftaran</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection