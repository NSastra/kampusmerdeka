@extends('kegiatan.app')

@section('title', 'Proyek Kemanusiaan')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Proyek Kemanusiaan
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
        <p>Ditulis pada 19 Agustus 2021, 14:10 WIB</p>

        <hr>

        <!-- Post Content -->
        <p class="lead">Indonesia banyak mengalami bencana alam, baik berupa gempa bumi, erupsi
            gunung berapi, tsunami, bencana hidrologi, dsb. Perguruan tinggi selama ini banyak
            membantu mengatasi bencana melalui program-program kemanusiaan. Pelibatan
            mahasiswa selama ini bersifat voluntary dan hanya berjangka pendek. Selain itu,
            banyak lembaga Internasional (UNESCO, UNICEF, WHO, dsb) yang telah melakukan
            kajian mendalam dan membuat pilot project pembangunan di Indonesia maupun
            negara berkembang lainnya. Mahasiswa dengan jiwa muda, kompetensi ilmu, dan
            minatnya dapat menjadi “foot soldiers” dalam proyek-proyek kemanusiaan dan
            pembangunan lainnya baik di Indonesia maupun di luar negeri.</p>

        <p>Tujuan program proyek kemanusiaan antara lain: <br/>
            1) Menyiapkan mahasiswa unggul yang menjunjung tinggi nilai kemanusiaan
            dalam menjalankan tugas berdasarkan agama, moral, dan etika. <br/>
            2) Melatih mahasiswa memiliki kepekaan sosial untuk menggali dan menyelami
            permasalahan yang ada serta turut memberikan solusi sesuai dengan minat dan
            keahliannya masing-masing.</p>

        <p>Adapun mekanisme pelaksanaan proyek kemanusiaan adalah sebagai berikut. <br/>
            <b>1) Perguruan Tinggi</b> <br/>
            a) Membuat kesepakatan dalam bentuk dokumen kerja sama (MoU/SPK)
            dengan mitra baik dalam negeri (Pemda, PMI, BPBD, BNPB, dll) maupun dari
            lembaga luar negeri (UNESCO, UNICEF, WHO, UNOCHA, UNHCR, dll).
            Buku Panduan Merdeka Belajar - Kampus Merdeka 18 <br/>
            b) Menunjuk dosen pendamping untuk melakukan pendampingan,
            pengawasan, penilaian dan evaluasi terhadap kegiatan proyek kemanusiaan
            yang dilakukan mahasiswa. <br/>
            c) Dosen bersama lembaga mitra menyusun form logbook.
            d) Melakukan evaluasi akhir dan penyetaraan kegiatan proyek kemanusiaan
            mahasiswa menjadi mata kuliah yang relevan (SKS), serta program
            berkesinambungan. <br/>
            e) Menyusun pedoman teknis kegiatan pembelajaran melalui proyek
            kemanusiaan.<br/>
            f ) Melaporkan hasil kegiatan belajar ke Direktorat Jenderal Pendidikan Tinggi
            melalui Pangkalan Data Pendidikan Tinggi.</p>

        <p><b>2) Lembaga Mitra </b> <br/>
            a) Menjamin kegiatan kemanusiaan yang diikuti mahasiswa sesuai dengan
            kesepakatan dalam dokumen kerja sama (MoU/SPK).<br/>
            b) Menjamin pemenuhan hak dan keselamatan mahasiswa selama mengikuti
            proyek kemanusiaan.<br/>
            c) Menunjuk supervisor/mentor dalam proyek kemanusiaan yang diikuti oleh
            mahasiswa.<br/>
            d) Melakukan monitoring dan evaluasi bersama dosen pembimbing atas
            kegiatan yang diikuti oleh mahasiswa.<br/>
            e) Memberikan nilai untuk direkognisi menjadi SKS mahasiswa.</p>

        <p><b>3) Mahasiswa </b><br/>
            a) Dengan persetujuan Dosen Pembimbing Akademik (DPA), mahasiswa
            mendaftarkan diri untuk mengikuti program kemanusiaan.<br/>
            b) Melaksanakan kegiatan proyek (relawan) kemanusiaan di bawah bimbingan
            dosen pembimbing dan supervisor/mentor lapangan.<br/>
            c) Mengisi logbook sesuai dengan aktivitas yang dilakukan.<br/>
            d) Menyusun laporan kegiatan dan menyampaikan laporan dalam bentuk
            publikasi atau presentasi.</p>

        <hr>
        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Pendaftaran -->
        {{-- <div class="card mb-4">
          <h5 class="card-header">Pendaftaran</h5>
          <div class="card-body">
            <div class="input-group">
              Untuk melakukan pendaftaran kegiatan proyek kemanusiaan, silakan klik tombol di bawah ini : <br/>
              <span class="inpug-group-append">
                <a class="btn btn-primary" href="/mahasiswa/showdaftarkms">Daftar</a>
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
                    <a href="/kegiatan/menajar">Asistensi Mengajar</a>
                  </li>
                  <li>
                    <a href="/kegiatan/penelitian">Penelitian</a>
                  </li>
                  <li>
                    <a href="/kegiatan/pertukaran">Pertukaran Pelajar</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="/kegiatan/studi">Studi Independen</a>
                  </li>
                  <li>
                    <a href="/kegiatan/wirausaha">Kewirausahaan</a>
                  </li>
                  <li>
                    <a href="/kegiatan/kkn">KKN</a>
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