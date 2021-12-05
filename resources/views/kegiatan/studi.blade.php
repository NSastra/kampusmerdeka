@extends('kegiatan.app')

@section('title', 'Studi Independen')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Studi Independen
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
        <p class="lead">Banyak mahasiswa yang memiliki passion untuk mewujudkan karya besar yang
            dilombakan di tingkat internasional atau karya dari ide yang inovatif. Idealnya, studi/
            proyek independen dijalankan untuk menjadi pelengkap dari kurikulum yang sudah
            diambil oleh mahasiswa. Perguruan tinggi atau fakultas juga dapat menjadikan studi
            independen untuk melangkapi topik yang tidak termasuk dalam jadwal perkuliahan,
            tetapi masih tersedia dalam silabus program studi atau fakultas. Kegiatan proyek
            independent dapat dilakukan dalam bentuk kerja kelompok lintas disiplin keilmuan.</p>

        <p>Tujuan program studi independen antara lain:<br/>
            1) Mewujudkan gagasan mahasiswa dalam mengembangkan produk inovatif yang
            menjadi gagasannya.<br/>
            2) Menyelenggarakan pendidikan berbasis riset dan pengembangan (R&D).<br/>
            3) Meningkatkan prestasi mahasiswa dalam ajang nasional dan internasional.<br/>
            Studi/proyek independen dapat menjadi pelengkap atau pengganti mata kuliah yang
            harus diambil. Ekuivalensi kegiatan studi independen ke dalam mata kuliah dihitung
            berdasarkan kontribusi dan peran mahasiswa yang dibuktikan dalam aktivitas di
            bawah koordinasi dosen pembimbing. Adapun untuk mekanisme pelaksanaan
            kegiatan studi/proyek independen adalah sebagai berikut.</p>


        <p><b>1) Perguruan Tinggi</b><br/>
            a) Menyediakan tim dosen pendamping untuk proyek independen yang
            diajukan oleh tim mahasiswa sesuai dengan keahlian dari topik proyek
            independen yang diajukan.<br/>
            b) Memfasilitasi terbentuknya sebuah tim proyek independen yang terdiri dari
            mahasiswa lintas disiplin.<br/>
            c) Menilai kelayakan proyek independen yang diajukan.<br/>
            d) Menyelenggarakan bimbingan, pendampingan, serta pelatihan dalam proses
            proyek independen yang dijalankan oleh tim mahasiswa.<br/>
            e) Menyelenggarakan evaluasi dan penilaian dari proyek independen mahasiswa
            untuk disetarakan menjadi mata kuliah yang relevan (SKS).</p>

        <p><b>2) Mahasiswa</b><br/>
            a) Mendapatkan persetujuan Dosen Pembimbing Akademik (DPA).<br/>
            b) Membuat proposal kegiatan Studi Independen lintas disiplin.<br/>
            c) Melaksanakan kegiatan Studi Independen.<br/>
            d) Menghasilkan produk atau mengikuti lomba tingkat nasional atau
            internasional.<br/>
            e) Menyusun laporan kegiatan dan menyampaikan laporan dalam bentuk
            presentasi.</p>

        <hr>
        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Pendaftaran -->
        {{-- <div class="card mb-4">
          <h5 class="card-header">Pendaftaran</h5>
          <div class="card-body">
            <div class="input-group">
              Untuk melakukan pendaftaran kegiatan studi independen, silakan klik tombol di bawah ini : <br/>
              <span class="inpug-group-append">
                <a class="btn btn-primary" href="/mahasiswa/showdaftarstudi">Daftar</a>
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
                    <a href="/kegiatan/wirausaha">Kewirausahaan</a>
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