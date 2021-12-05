@extends('kegiatan.app')

@section('title', 'Magang')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Magang / Praktik Kerja
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
        <p>Ditulis pada 19 Agustus 2021, 14:41 WIB</p>

        <hr>

        <!-- Post Content -->
        <p class="lead">Selama ini mahasiswa kurang mendapat pengalaman kerja di industri/dunia
            profesi nyata sehingga kurang siap bekerja. Sementara magang yang berjangka
            pendek (kurang dari 6 bulan) sangat tidak cukup untuk memberikan pengalaman
            dan kompetensi industri bagi mahasiswa. Perusahaan yang menerima magang
            juga menyatakan magang dalam waktu sangat pendek tidak bermanfaat, bahkan
            mengganggu aktivitas di Industri.</p>

        <p>Tujuan program magang antara lain: <br/>
            Program magang 1-2 semester, memberikan pengalaman yang cukup kepada
            mahasiswa, pembelajaran langsung di tempat kerja (experiential learning). Selama
            magang mahasiswa akan mendapatkan hardskills (keterampilan, complex problem
            solving, analytical skills, dsb.), maupun soft skills (etika profesi/kerja, komunikasi,
            kerjasama, dsb.). Sementara industri mendapatkan talenta yang bila cocok nantinya
            bisa langsung di-recruit, sehingga mengurangi biaya recruitment dan training awal/
            induksi. Mahasiswa yang sudah mengenal tempat kerja tersebut akan lebih mantab
            dalam memasuki dunia kerja dan karirnya. Melalui kegiatan ini, permasalahan
            industri akan mengalir ke perguruan tinggi sehingga meng-update bahan ajar dan
            pembelajaran dosen serta topik-topik riset di perguruan tinggi akan makin relevan.</p>

        <p>Kegiatan pembelajaran yang dilakukan melalui kerja sama dengan mitra antara lain
            perusahaan, yayasan nirlaba, organisasi multilateral, institusi pemerintah, maupun
            perusahaan rintisan (startup). Adapun untuk mekanisme pelaksanaan magang/
            praktik kerja adalah sebagai berikut. <br/>
            <b>1) Perguruan Tinggi</b><br/>
            a) Membuat kesepakatan dalam bentuk dokumen kerja sama (MoU/SPK)
            dengan mitra antara lain proses pembelajaran, pengakuan kredit semester
            dan penilaian.<br/>
            b) Menyusun program magang bersama mitra, baik isi/content dari program
            magang, kompetensi yang akan diperoleh mahasiswa, serta hak dan
            kewajiban ke dua belah pihak selama proses magang.<br/>
            c) Menugaskan dosen pembimbing yang akan membimbing mahasiswa selama
            magang.<br/>
            d) Bila dimungkinkan pembimbing melakukan kunjungan di tempat magang
            untuk monitoring dan evaluasi.<br/>
            e) Dosen pembimbing bersama supervisor menyusun logbook dan melakukan
            penilaian capaian mahasiswa selama magang.
            f ) Pemantauan proses magang dapat dilakukan melalui Pangkalan Data
            Pendidikan Tinggi.</p>

        <p><b>2) Mitra Magang</b><br/>
            a) Bersama Perguruan Tinggi, menyusun dan menyepakati program magang
            yang akan ditawarkan kepada mahasiswa.<br/>
            b) Menjamin proses magang yang berkualitas sesuai dokumen kerja sama
            (MoU/SPK).<br/>
            c) Menyediakan supervisor/mentor/coach yang mendampingi mahasiswa/
            kelompok mahasiswa selama magang.<br/>
            d) Memberikan hak dan jaminan sesuai peraturan perundangan (asuransi
            kesehatan, keselamatan kerja, honor magang, hak karyawan magang).<br/>
            e) Supervisor mendampingi dan menilai kinerja mahasiswa selama magang,
            dan bersama dosen pembimbing memberikan penilaian.</p>
            
        <p><b>3) Mahasiswa</b><br/>
            a) Dengan persetujuan dosen pembimbing akademik mahasiswa mendaftar/
            melamar dan mengikuti seleksi magang sesuai ketentuan tempat magang.
            b) Mendapatkan persetujuan Dosen Pembimbing Akademik (DPA) dan
            mendapatkan dosen pembimbing magang.
            c) Melaksanakan kegiatan Magang sesuai arahan supervisor dan dosen
            pembimbing magang.
            d) Mengisi logbook sesuai dengan aktivitas yang dilakukan.
            e) Menyusun laporan kegiatan dan menyampaikan laporan kepada supervisor
            dan dosen pembimbing.</p>

        <p><b>4) Dosen Pembimbing & Supervisor</b><br/>
            a) Dosen pembimbing meberikan pembekalan bagi mahasiswa sebelum
            berangkat magang.<br/>
            b) Dosen pembimbing memberikan arahan dan tugas-tugas bagi mahasiswa
            selama proses magang. Supervisor menjadi mentor dan membimbing
            mahasiswa selama proses magang.<br/>
            c) Dosen pembimbing </p>

        <p> <b>Catatan:</b><br/>
            1) Topik magang yang dilakukan mahasiswa tidak harus sesuai dengan program studi/jurusan<br/>
            2) Magang yang berjalan selama 1 semester wajib mendapatkan minimum 20 sks (tidak boleh
            kurang, tapi boleh lebih banyak) </p>

        <hr>
        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Pendaftaran -->
        {{-- <div class="card mb-4">
          <h5 class="card-header">Pendaftaran</h5>
          <div class="card-body">
            <div class="input-group">
              Untuk melakukan pendaftaran kegiatan magang, silakan klik tombol di bawah ini : <br/>
              <span class="inpug-group-append">
                <a class="btn btn-primary" href="/mahasiswa/showdaftarmagang">Daftar</a>
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
                    <a href="/kegiatan/menajar">Asistensi Mengajar</a>
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
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection