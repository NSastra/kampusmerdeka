@extends('kegiatan.app')

@section('title', 'Penelitian / Riset')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Penelitian / Riset
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Merdeka Belajar - Kampus Merdeka</li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ url('img/MASTER.png') }}" alt="">

        <hr>

        <!-- Date/Time -->
        <p>Ditulis pada 19 Agustus 2021, 15:04 WIB</p>

        <hr>

        <!-- Post Content -->
        <p class="lead">Bagi mahasiswa yang memiliki passion menjadi peneliti, merdeka belajar dapat
            diwujudkan dalam bentuk kegiatan penelitian di Lembaga riset/pusat studi. Melalui
            penelitian mahasiswa dapat membangung cara berpikir kritis, hal yang sangat
            dibutuhkan untuk berbagai rumpun keilmuan pada jenjang pendidikan tinggi.
            Dengan kemampuan berpikir kritis mahasiswa akan lebih mendalami, memahami,
            dan mampu melakukan metode riset secara lebih baik. Bagi mahasiswa yang
            memiliki minat dan keinginan berprofesi dalam bidang riset, peluang untuk magang
            di laboratorium pusat riset merupakan dambaan mereka. Selain itu, Laboratorium/
            Lembaga riset terkadang kekurangan asisten peneliti saat mengerjakan proyek riset
            yang berjangka pendek (1 semester – 1 tahun).</p>

        <p>Tujuan program penelitian/riset antara lain:<br/>
            1) Penelitian mahasiswa diharapkan dapat ditingkatkan mutunya. Selain itu,
            pengalaman mahasiswa dalam proyek riset yang besar akan memperkuat pool
            talent peneliti secara topikal.<br/>
            2) Mahasiswa mendapatkan kompetensi penelitian melalui pembimbingan
            langsung oleh peneliti di lembaga riset/pusat studi.<br/>
            3) Meningkatkan ekosistem dan kualitas riset di laboratorium dan lembaga riset
            Indonesia dengan memberikan sumber daya peneliti dan regenerasi peneliti
            sejak dini.</p>

        <p>Adapun mekanisme pelaksanaan penelitian/riset adalah sebagai berikut. <br/>
           <b> 1) Perguruan Tinggi</b><br/>
            a) Membuat kesepakatan dalam bentuk dokumen kerja sama (MoU/SPK)
            dengan mitra dari lembaga riset/laboratorium riset.<br/>
            b) Memberikan hak kepada mahasiswa untuk mengikuti seleksi hingga evaluasi
            program riset di lembaga/laboratorium riset di luar kampus.<br/>
            c) Menunjuk dosen pembimbing untuk melakukan pembimbingan,
            pengawasan, serta bersama-sama dengan peneliti di lembaga/laboratorium
            riset untuk memberikan nilai.<br/>
            d) Dosen bersama-sama dengan peneliti menyusun form logbook.<br/>
            e) Melakukan evaluasi akhir dan penyetaraan kegiatan riset di lembaga/
            laboratorium menjadi mata kuliah yang relevan (SKS) serta program
            berkesinambungan.<br/>
            f ) Menyusun pedoman teknis kegiatan pembelajaran melalui penelitian/riset.<br/>
            g) Melaporkan hasil kegiatan belajar ke Direktorat Jenderal Pendidikan Tinggi
            melalui Pangkalan Data Pendidikan Tinggi.</p>

        <p><b>2) Lembaga Mitra</b><br/>
            a) Menjamin terselenggaranya kegiatan riset mahasiswa di lembaga mitra
            sesuai dengan kesepakatan.<br/>
            b) Menunjuk pendamping untuk mahasiswa dalam menjalankan riset.<br/>
            c) Bersama-sama dengan dosen pendamping melakukan evaluasi dan penilaian
            terhadap proyek riset yang dilakukan oleh mahasiswa.</p>

           <p><b> 3) Mahasiswa</b><br/>
            a) Dengan persetujuan Dosen Pembimbing Akademik (DPA), mahasiswa
            mendaftarkan diri untuk program asisten riset.<br/>
            b) Melaksanakan kegiatan riset sesuai dengan arahan dari Lembaga riset/pusat
            studi tempat melakukan riset.<br/>
            c) Mengisi logbook sesuai dengan aktivitas yang dilakukan.<br/>
            d) Menyusun laporan kegiatan dan menyampaikan laporan dalam bentuk
            laporan penelitian/skripsi atau publikasi ilmiah.</p>

        <hr>
        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Pendaftaran -->
        {{-- <div class="card mb-4">
          <h5 class="card-header">Pendaftaran</h5>
          <div class="card-body">
            <div class="input-group">
              Untuk melakukan pendaftaran kegiatan penelitian, silakan klik tombol di bawah ini : <br/>
              <span class="inpug-group-append">
                <a class="btn btn-primary" href="/mahasiswa/showdaftarplt">Daftar</a>
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