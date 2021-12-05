@extends('kegiatan.app')

@section('title', 'Kewirausahaan')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Kewirausahaan
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Merdeka Belajar - Kampus Merdeka</li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ url('img/mbkm.jpg') }}" alt="">

        <hr>

        <!-- Date/Time -->
        <p>Ditulis pada 19 Agustus 2021, 15:07 WIB</p>

        <hr>

        <!-- Post Content -->
        <p class="lead">Berdasarkan Global Entrepreneurship Index (GEI) pada tahun 2018, Indonesia hanya
            memiliki skor 21% wirausahawan dari berbagai bidang pekerjaan, atau peringkat 94
            dari 137 negara yang disurvei. Sementara menurut riset darn IDN Research Institute
            tahun 2019, 69,1% millennial di Indonesia memiliki minat untuk berwirausaha.
            Sayangnya, potensi wirausaha bagi generasi milenial tersebut belum dapat dikelola
            dengan baik selama ini. Kebijakan Kampus Merdeka mendorong pengembangan
            minat wirausaha mahasiswa dengan program kegiatan belajar yang sesuai.</p>

        <p>Tujuan program wirausaha antara lain:<br/>
            1) Memberikan mahasiswa yang memiliki minat berwirausaha untuk
            mengembangkan usahanya lebih dini dan terbimbing.<br/>
            2) Menangani permasalahan pengangguran yang menghasilkan pengangguran
            intelektual dari kalangan sarjana.</p>

        <p>Kegiatan pembelajaran dalam bentuk wirausaha baik yang belum maupun sudah
            ditetapkan dalam kurikulum program studi. Persyaratan diatur dalam pedoman
            akademik yang dikeluarkan oleh Perguruan Tinggi. Adapun untuk mekanisme
            pelaksanaan kegiatan wirausaha adalah sebagai berikut.<br/>
            <b>1) Perguruan Tinggi</b><br/>
            a) Program kewirausahaan mahasiswa hendaknya disusun pada tingkat
            perguruan tinggi, dengan menyusun silabus kegiatan wirausaha yang dapat
            memenuhi 20 SKS/semester atau 40 SKS/tahun.<br/>
            b) Program tersebut bisa merupakan kombinasi beberapa mata kuliah dari
            berbagai program studi yang ditawarkan oleh Fakultas yang ada di dalam
            perguruan tinggi maupun di luar perguruan tinggi, termasuk kursus/microcredentials
            yang ditawarkan melalui pembelajaran daring maupun luring.<br/>
            c) Untuk penilaian program kewirausahaan dapat disusun rubrik asesmen atau
            ukuran keberhasilan capaian pembelajaran. Misalnya bila mahasiswa berhasil
            membuat start up di akhir program maka mahasiswa mendapatkan nilai A
            dengan bobot 20 SKS/40 SKS.<br/>
            d) Selama mengikuti program wirausaha, mahasiswa dibimbing oleh dosen
            pembimbing, mentor pakar wirausaha/pengusaha yang telah berhasil.<br/>
            e) Perguruan tinggi yang memiliki pusat inkubasi diharapkan mengintegrasikan
            program ini dengan pusat tersebut. Bagi yang belum memiliki dapat bekerja
            sama dengan pusat-pusat inkubasi dan akselerasi bisnis.<br/>
            f ) Perguruan tinggi bekerja sama dengan institusi mitra dalam menyediakan
            sistem pembelajaran kewirausahaan yang terpadu dengan praktik langsung.
            Sistem pembelajaran ini dapat berupa fasilitasi pelatihan, pendampingan,
            dan bimbingan dari mentor/pelaku usaha.<br/>
            g) Menyusun pedoman teknis kegiatan pembelajaran melalui wirausaha.</p>

        <p><b>2) Mahasiswa</b><br/>
            a) Dengan persetujuan dosen pembimbing akademik (DPA), mahasiswa
            mendaftarkan program kegiatan wirausaha.<br/>
            b) Dengan bimbingan pusat inkubasi atau dosen pembimbing kewirausahaan/
            mentor, mahasiswa menyusun proposal kegiatan wirausaha.<br/>
            c) Melaksanakan kegiatan wirausaha di bawah bimbingan dosen pembimbing
            atau mentor kewirausahaan.<br/>
            d) Menyampaikan hasil kegiatan wirausaha dan menyampaikan laporan dalam
            bentuk presentasi.</p>

        <hr>
        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Pendaftaran -->
        {{-- <div class="card mb-4">
          <h5 class="card-header">Pendaftaran</h5>
          <div class="card-body">
            <div class="input-group">
              Untuk melakukan pendaftaran kegiatan kewirausahaan, silakan klik tombol di bawah ini : <br/>
              <span class="inpug-group-append">
                <a class="btn btn-primary" href="/mahasiswa/showdaftarkwu">Daftar</a>
              </span>
            </div>
          </div>
        </div> --}}

        <!-- Daftar Kegiatan -->
        <div class="card my-4">
          <h5 class="card-header">Kegiatan Lainnya</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="/kegiatan/magang">Magang</a>
                  </li>
                  <li>
                    <a href="/kegiatan/kkn">KKN</a>
                  </li>
                  <li>
                    <a href="/kegiatan/mengajar">Asistensi Mengajar</a>
                  </li>
                  <li>
                    <a href="/kegiatan/penelitian">Penelitian</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="/kegiatan/studi">Studi Independen</a>
                  </li>
                  <li>
                    <a href="/kegiatan/pertukaran">Pertukaran Pelajar</a>
                  </li>
                  <li>
                    <a href="/kegiatan/kemanusiaan">Proyek Kemanusiaan</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection