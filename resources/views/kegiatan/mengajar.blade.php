@extends('kegiatan.app')

@section('title', 'Asistensi Mengajar')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Asistensi Mengajar
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
        <p>Ditulis pada 19 Agustus 2021, 14:58 WIB</p>

        <hr>

        <!-- Post Content -->
        <p class="lead">Kualitas pendidikan dasar dan menengah di Indonesia masih sangat rendah (PISA
            2018 peringkat Indonesia no 7 dari bawah). Jumlah satuan pendidikan di Indonesia
            sangat banyak dan beragam permasalahan baik satuan pendidikan formal, non
            formal maupun informal. Kegiatan pembelajaran dalam bentuk asistensi mengajar
            dilakukan oleh mahasiswa di satuan pendidikan seperti sekolah dasar, menengah,
            maupun atas. Sekolah tempat praktek mengajar dapat berada di lokasi kota maupun
            di daerah terpencil.</p>

        <p>Tujuan program asistensi mengajar di satuan pendidikan antara lain:<br/>
            1) Memberikan kesempatan bagi mahasiswa yang memiliki minat dalam bidang
            pendidikan untuk turut serta mengajarkan dan memperdalam ilmunya dengan
            cara menjadi guru di satuan pendidikan.<br/>
            2) Membantu meningkatkan pemerataan kualitas pendidikan, serta relevansi
            pendidikan dasar dan menengah dengan pendidikan tinggi dan perkembangan
            zaman.</p>

        <p>Adapun mekanisme pelaksanaan asistensi mengajar di satuan pendidikan adalah
            sebagai berikut.<br/>
            <b>1) Perguruan Tinggi</b><br/>
            a) Menyusun dokumen kerja sama (MoU/SPK) dengan mitra satuan pendidikan,
            izin dari dinas Pendidikan, dan menyusun program bersama satuan
            Pendidikan setempat.<br/>
            b) Program ini dapat dilakukan melalui kerjasama dengan program Indonesia
            Mengajar, Forum Gerakan Mahasiswa Mengajar Indonesia (FGMMI), dan
            program-program lain yang direkomendasikan oleh Kemendikbud.<br/>
            c) Memberikan kesempatan kepada mahasiswa untuk mengikuti program mengajar di satuan pendidikan formal maupun non-formal.<br/>
            d) Data satuan pendidikan dapat diperoleh dari Kemendikbud maupun dari
            Dinas Pendidikan setempat. Kebutuhan jumlah tenaga asisten pegajar dan
            mata pelajarannya didasarkan pada kebutuhan masing-masing pemerintah
            daerah melalui dinas pendidikan provinsi/kota.<br/>
            e) Menugaskan dosen pembimbing untuk melakukan pendampingan,
            pelatihan, monitoring, serta evaluasi terhadap kegiatan mengajar di satuan
            pendidikan yang dilakukan oleh mahasiswa.<br/>
            f ) Melakukan penyetaraan/rekognisi jam kegiatan mengajar di satuan
            pendidikan untuk diakui sebagai SKS.<br/>
            g) Melaporkan hasil kegiatan belajar ke Direktorat Jenderal Pendidikan Tinggi
            melalui Pangkalan Data Pendidikan Tinggi.</p>

        <p><b>2) Sekolah/Satuan Pendidikan</b><br/>
            a) Menjamin kegiatan mengajar di satuan pendidikan yang diikuti mahasiswa
            sesuai dengan kesepakatan dalam kontrak kerja sama<br/>
            b) Menunjuk guru pamong/pendamping mahasiswa yan melakukan kegiatan
            mengajar di satuan pendidikan.<br/>
            c) Bersama-sama dosen pembimbing melakukan monitoring dan evaluasi atas
            kegiatan yang diikuti oleh mahasiswa<br/>
            d) Memberikan nilai untuk direkognisi menjadi SKS mahasiswa.<br/></p>

           <p><b> 3) Mahasiswa</b><br/>
            a) Dengan persetujuan Dosen Pembimbing Akademik (DPA) mahasiswa
            mendaftarkan dan mengikuti seleksi asisten mengajar di satuan pendidikan.<br/>
            b) Melaksanakan kegiatan asistensi mengajar di satuan Pendidikan di bawah
            bimbingan dosen pembimbing.<br/>
            c) Mengisi logbook sesuai dengan aktivitas yang dilakukan.<br/>
            d) Menyusun laporan kegiatan dan menyampaikan laporan dalam bentuk
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
              Untuk melakukan pendaftaran kegiatan asistensi mengajar, silakan klik tombol di bawah ini : <br/>
              <span class="inpug-group-append">
                <a class="btn btn-primary" href="/mahasiswa/showdaftarajar">Daftar</a>
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