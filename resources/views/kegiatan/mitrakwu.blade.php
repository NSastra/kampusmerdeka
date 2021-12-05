@extends('kegiatan.indexapp')

@section('title', 'Daftar Mitra Kewirausahaan')

@section('content')


<!-- Masthead-->
<header class="masthead" id="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Pendaftaran Kegiatan Kewirausahaan</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">Untuk melakukan pendaftaran kegiatan kewirausahaan, silakan pilih tempat atau mitra yang sesuai dengan keinginan anda.</p>
                <a class="btn btn-primary btn-xl" href="#mitra">Lihat Daftar Mitra</a>
            </div>
        </div>
    </div>
</header>
<!-- Kegiatan-->
<section class="page-section" id="mitra">
    <div class="container px-4 px-lg-5">
        <h3 class="text-center mt-0">Daftar Mitra Kewirausahaan Kampus Merdeka</h3>
        <hr class="divider" />
        <div class="row">
        @foreach($Mitrakwu as $mitrakwu)
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-star fs-1 text-primary"></i></div>
                    <h3 class="h5 mb-2">{{ $mitrakwu['nama_mitra'] }}</h3>
                    <a href="/kegiatan/showdfkwu/{{ $mitrakwu['id'] }}" class="text-muted mb-0">Pendaftaran</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</section>
@endsection