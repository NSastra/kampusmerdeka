@extends('kegiatan.app')

@section('title', 'KKN Tematik')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">KKN Tematik
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
        <p>Ditulis pada 19 Agustus 2021, 15:32 WIB</p>

        <hr>

        <!-- Post Content -->
        <p class="lead">Kuliah Kerja Nyata Tematik (KKNT) merupakan suatu bentuk pendidikan dengan
            cara memberikan pengalaman belajar kepada mahasiswa untuk hidup di tengah
            masyarakat di luar kampus, yang secara langsung bersama-sama masyarakat
            mengidentifikasi potensi dan menangani masalah sehingga diharapkan mampu
            mengembangkan potensi desa/daerah dan meramu solusi untuk masalah yang ada
            di desa. Kegiatan KKNT diharapkan dapat mengasah softskill kemitraan, kerjasama
            tim lintas disiplin/keilmuan (lintas kompetensi), dan leadership mahasiswa dalam
            mengelola program pembangunan di wilayah perdesaan. Sejauh ini perguruan
            tinggi sudah menjalankan program KKNT, hanya saja Satuan Kredit Semesternya
            (SKS) belum bisa atau dapat diakui sesuai dengan program kampus merdeka yang
            pengakuan kreditnya setara 6 – 12 bulan atau 20 – 40 SKS, dengan pelaksanaannya
            berdasarkan beberapa model. Diharapkan juga setelah pelaksanaan KKNT, mahasiswa
            dapat menuliskan hal-hal yang dilakukannya beserta hasilnya dalam bentuk tugas
            akhir.</p>

        <p> Pelaksanaan KKNT dilakukan untuk mendukung kerja sama bersama Kementerian
            Desa PDTT serta Kementerian/stakeholder lainnya. Pemerintah melalui Kementerian
            Desa PDTT menyalurkan dana desa 1 milyar per desa kepada sejumlah 74.957
            desa di Indonesia, yang berdasarkan data Indeks Desa Membangun (IDM) tahun
            2019, terdapat desa sangat tertinggal sebanyak 6.549 dan desa tertinggal 20.128.
            Pelaksanaan KKNT dapat dilakukan pada desa sangat tertinggal, tertinggal dan
            berkembang, yang sumber daya manusianya belum memiliki kemampuan
            perencanaan pembangunan dengan fasilitas dana yang besar tersebut. Sehingga
            efektivitas penggunaan dana desa untuk menggerakkan pertumbuhan ekonomi
            masih perlu ditingkatkan, salah satunya melalui mahasiswa yang dapat menjadi
            sumber daya manusia yang lebih memberdayakan dana desa. </p>

        <p>Tujuan program KKN antara lain:<br/>
            1) Kehadiran mahasiswa selama 6 – 12 bulan dapat memberikan kesempatan
            kepada mahasiswa untuk memanfaatkan ilmu pengetahuan, teknologi,
            dan keterampilan yang dimilikinya bekerjasama dengan banyak pemangku
            kepentingan di lapangan.<br/>
            2) Membantu percepatan pembangunan di wilayah pedesaan bersama dengan
            Kementerian Desa PDTT.</p>

        <p>Manfaat program membangun desa/kuliah kerja nyata antara lain: <br/>
            <b> 1) Bagi Mahasiswa </b><br/>
            a) Membuat mahasiswa mampu melihat potensi desa, mengidentifikasi masalah
            dan mencari solusi untuk meningkatkan potensi dan menjadi desa mandiri.<br/>
            b) Membuat mahasiswa mampu berkolaborasi menyusun dan membuat
            Rencana Pembangunan Jangka Menengah Desa (RPJMDes), Rencana Kegiatan
            Pembangunan Desa (RKPDes), dan program strategis lainnya di desa bersama
            Dosen Pendamping, Pemerintah Desa, Penggerak Swadaya Masyarakat (PSM),
            Kader Pemberdayaan Masyarakat Desa (KPMD), pendamping lokal desa, dan
            unsur masyarakat.<br/>
            c) Membuat mahasiswa dapat mengaplikasikan ilmu yang dimiliki secara
            kolaboratif bersama dengan Pemerintah Desa dan unsur masyarakat untuk
            membangun desa.<br/>
            d) Mahasiswa mampu memanfaatkan ilmu pengetahuan, teknologi, dan
            keterampilan yang dimilikinya di lapangan yang disukainya.<br/>
            <b>2) Bagi Perguruan Tinggi</b><br/>
            a) Memberikan umpan balik bagi perguruan tinggi tentang ilmu pengetahuan
            dan teknologi yang dibutuhkan secara nyata oleh masyarakat.<br/>
            b) Menjadi sarana bagi perguruan tinggi dalam membentuk jejaring atau mitra
            strategis dalam membantu pembangunan desa.<br/>
            c) Menjadi sarana pengembangan tri dharma perguruan tinggi.<br/>
            d) Menjadi sarana aktualisasi dosen dalam pengembangan ilmu pengetahuan.<br/>
            <b>3) Bagi Desa</b><br/>
            a) Memperoleh bantuan pemikiran dan tenaga dari tenaga terdidik untuk
            menyusun Rencana Pembangunan Jangka Menengah Desa (RPJMDes) dan
            Rencana Kegiatan Pembangunan Desa (RKPDes).<br/>
            b) Membantu perubahan/perbaikan tata kelola desa.<br/>
            c) Memacu terbentuknya tenaga muda yang diperlukan dalam pemberdayaan
            masyarakat desa<br/>
            d) Membantu pengayaan wawasan masyarakat terhadap pembangunan desa.<br/>
            e) Percepatan pembangunan di wilayah pedesaan.</p>

        <p> Selain persyaratan umum yang terdapat pada pelaksanaan kebijakan Merdeka Belajar
            - Kampus Merdeka di atas, untuk kegiatan KKNT terdapat persyaratan tambahan
            yang harus dipenuhi oleh mahasiswa, yaitu:<br/>
            1) Mahasiswa telah menyelesaikan proses pembelajaran setelah semester 6.<br/>
            2) Dilakukan secara berkelompok, anggota berjumlah ± 10 orang per kelompok
            dan atau sesuai kebutuhan desa, dan bersifat multidisiplin (asal prodi/fakultas/
            kluster yang berbeda).<br/>
            3) Peserta wajib tinggal di komunitas atau wajib “live in” di lokasi yang telah
            ditentukan.<br/>
            4) Sehat jasmani dan rohani serta tidak sedang hamil bagi wanita.<br/>
            5) IPK minimal 2.00 sampai dengan semester 5.<br/>
            6) Ketentuan lain dapat diatur oleh perguruan tinggi pelaksana. </p>


        <p>Adapun untuk mekanisme pelaksanaan kegiatan membangun desa/kuliah kerja
            nyata adalah sebagai berikut. <br/>
            <b>1) Perguruan Tinggi</b><br/>
            a) Menjalin kerja sama dengan pihak Kementerian Desa PDTT, serta Kemdikbud
            dalam penyelenggaraan program proyek di desa atau menjalin kerja sama
            langsung dengan pemerintah daerah untuk penyelenggaraan program
            proyek di desa.<br/>
            b) Mengelola pendaftaran dan penempatan mahasiswa ke desa tujuan.<br/>
            c) Menugaskan dosen pembimbing yang akan membimbing mahasiswa selama
            KKNT.<br/>
            d) Bila dimungkinkan pembimbing melakukan kunjungan di lokasi KKNT untuk
            monitoring dan evaluasi.<br/>
            e) Memberangkatkan dan memulangkan mahasiswa dari kampus ke lokasi
            penempatan program.<br/>
            f ) Memberikan pembekalan, pemeriksaan kesehatan, dan menyediakan
            jaminan kesehatan dan keselamatan kepada mahasiswa calon peserta KKNT.<br/>
            g) Perguruan tinggi menyusun SOP pelaksanaan KKNT dengan
            mempertimbangkan jaminan Keamanan dan Keselamatan Mahasiswa
            selama di lapangan.<br/>
            h) Perguruan tinggi memberikan pembekalan tentang kearifan lokal masyarakat
            dan perilaku etika selama melaksanakan kegiatan KKNT.<br/>
            i) Melaporkan hasil kegiatan KKNT ke Direktorat Jenderal Pendidikan Tinggi.</p>

        <p><b>2) Mahasiswa</b><br/>
            a) Mahasiswa wajib tinggal (live in) pada lokasi yang telah ditentukan.<br/>
            b) Jika dalam proses pelaksanaan kompetensi mahasiswa tidak memenuhi
            ekuivalensi 20 SKS, maka mahasiswa dapat mengambil MK daring atau
            lainnya sesuai ketentuan Perguruan Tinggi.<br/>
            c) Proses dan hasil kegiatan ditulis dan dilaporkan kepada Perguruan Tinggi.<br/>
            d) Hasil kegiatan dapat diekuivalensikan sebagai skripsi atau tugas akhir sesuai
            ketentuan Perguruan Tinggi.</p>

        <p><b>3) Pembimbing</b><br/>
            a) Dosen Pembimbing Akademik dari perguruan tinggi yang bertanggung
            jawab terhadap kegiatan mahasiswa dari awal sampai dengan akhir.<br/>
            b) Pembimbing pendamping dari pemerintah desa di lokasi setempat.<br/>
            c) Melibatkan unsur-unsur mitra, misalnya Penggerak Swadaya Masyarakat
            (PSM) maupun unsur lain sesuai lingkup kegiatan.<br/>
            d) Dosen pendamping bersama pembimbing di desa melakukan pembimbingan
            dan penilaian terhadap program yang dilakukan mahasiswa.<br/>
            e) Ketentuan lain dapat diatur oleh perguruan tinggi pelaksana.</p>

        <p><b>4) Lokasi Pelaksanaan</b><br/>
            a) Lokasi berdasarkan rekomendasi dari Direktorat Jenderal Pendidikan Tinggi.<br/>
            b) Lokasi pelaksanaan di desa sangat tertinggal, tertinggal dan berkembang.<br/>
            c) Desa-desa Binaan Perguruan Tinggi Pelaksana.<br/>
            d) Radius desa lokasi KKNT dengan Perguruan Tinggi dirancang 200 km.<br/>
            e) Desa lainnya yang diusulkan oleh Mitra (Pemda, Industri, dan lainnya.</p>
            
        <p><b>5) Mitra</b><br/>
            a) Pemerintah (Kemendes, Desa binaan PT, Kemkes, PUPR, Kementan, Kemensos,
            KLHK, Kemdagri, Kemlu, TNI, Polri, dan lembaga lainnya).
            b) Pemerintah Daerah.
            c) BUMN dan Industri.
            d) Social Investment.
            e) Kelompok Masyarakat (perantau dan diaspora).</p>

        <p><b>6) Keamanan dan Keselamatan Mahasiswa (Kondisi Khusus)</b><br/>
            a) Terkait mahasiswa yang menderita penyakit dan/atau berkepentingan
            khusus sehingga tidak bisa mengikuti kegiatan, wajib melaporkan keadaan
            ini ke pengelola KKNT perguruan tinggi pelaksana yang dibuktikan oleh surat
            keterangan dari pihak yang berwenang, sehingga penempatan di lokasi
            dapat diatur dengan pertimbangan jarak dan kemudahan akses.<br/>
            b) Perguruan tinggi menyusun SOP pelaksanaan KKNT dengan
            mempertimbangkan jaminan Keamanan dan Keselamatan Mahasiswa
            selama di lapangan.<br/>
            c) Perguruan tinggi memberikan pembekalan tentang kearifan lokal masyarakat
            dan perilaku etika selama melaksanakan kegiatan KKNT.</p>

        <p><b>7) Pendanaan</b><br/>
            a) Sumber Pendanaan<br/>
            (1) Perguruan Tinggi.<br/>
            (2) Mitra.<br/>
            (3) Sumber lain yang tidak mengikat.<br/>
            (4) Mahasiswa.<br/>
            b) Komponen Penggunaan Dana<br/>
            (1) Transportasi.<br/>
            (2) Biaya Hidup.<br/>
            (3) Asuransi Kecelakaan dan Kesehatan.<br/>
            (4) Biaya Program.<br/>
            (5) Pembiayaan lain “insidentil” yang timbul berkaitan dengan pelaksanaan
            program di lapangan.<br/>
            (6) Komponen pembiayaan yang lebih lanjut akan disusun sesuai ketentuan
            perguruan tinggi pelaksana.</p>

        <hr>
        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Pendaftaran -->
        {{-- <div class="card mb-4">
          <h5 class="card-header">Pendaftaran</h5>
          <div class="card-body">
            <div class="input-group">
              Untuk melakukan pendaftaran kegiatan KKN, silakan klik tombol di bawah ini : <br/>
              <span class="inpug-group-append">
                <a class="btn btn-primary" href="/mahasiswa/showdaftarkkn">Daftar</a>
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