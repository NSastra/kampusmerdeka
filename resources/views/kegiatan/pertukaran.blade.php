@extends('kegiatan.app')

@section('title', 'Pertukaran Pelajar')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Pertukaran Pelajar
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
        <p>Ditulis pada 19 Agustus 2021, 14:34 PM</p>

        <hr>

        <!-- Post Content -->
        <p class="lead">Saat ini pertukaran mahasiswa dengan full credit transfer sudah banyak dilakukan
            dengan mitra Perguruan Tinggi di luar negeri, tetapi sistem transfer kredit yang
            dilakukan antar perguruan tinggi di dalam negeri sendiri masih sangat sedikit
            jumlahnya. Pertukaran pelajar diselenggarakan untuk membentuk beberapa sikap
            mahasiswa yang termaktub di dalam Peraturan Menteri Pendidikan dan Kebudayaan
            (Permendikbud) Nomor 3 Tahun 2020, yaitu menghargai keanekaragaman budaya,
            pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang
            lain; serta bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap
            masyarakat dan lingkungan.</p>

        <p>Tujuan pertukaran pelajar antara lain:<br/>
            1) Belajar lintas kampus (dalam dan luar negeri), tinggal bersama dengan keluarga
            di kampus tujuan, wawasan mahasiswa tentang ke-Bhinneka Tunggal Ika akan
            makin berkembang, persaudaraan lintas budaya dan suku akan semakin kuat.<br/>
            2) Membangun persahabatan mahasiswa antar daerah, suku, budaya, dan agama,
            sehingga meningkatkan semangat persatuan dan kesatuan bangsa.<br/>
            3) Menyelenggarakan transfer ilmu pengetahuan untuk menutupi disparitas
            pendidikan baik antar perguruan tinggi dalam negeri, maupun kondisi pendidikan
            tinggi dalam negeri dengan luar negeri.</p>

        <p>Beberapa bentuk kegiatan belajar yang bisa dilakukan dalam kerangka pertukaran
            belajar adalah sebagai berikut.<br/>
            <b>1) Pertukaran Pelajar antar Program Studi pada Perguruan Tinggi yang sama</b><br/>
            Bentuk pembelajaran yang dapat diambil mahasiswa untuk menunjang
            terpenuhinya capaian pembelajaran baik yang sudah tertuang dalam struktur
            kurikulum program studi maupun pengembangan kurikulum untuk memperkaya
            capaian pembelajaran lulusan yang dapat berbentuk mata kuliah pilihan.<br/>
            a) Mekanisme<br/>
            (1) Program Studi<br/>
            • Menyusun atau menyesuaikan kurikulum yang memfasilitasi
            mahasiswa untuk mengambil mata kuliah di program studi lain.<br/>
            • Menentukan dan menawarkan mata kuliah yang dapat diambil
            mahasiswa dari luar prodi.<br/>
            • Mengatur kuota peserta yang mengambil mata kuliah yang ditawarkan
            dalam bentuk pembelajaran dalam Program Studi lain pada Perguruan
            Tinggi yang sama.<br/>
            • Mengatur jumah SKS yang dapat diambil dari prodi lain.<br/>
            (2) Mahasiswa<br/>
            • Mendapatkan persetujuan Dosen Pembimbing Akademik (DPA).<br/>
            • Mengikuti program kegiatan luar prodi sesuai dengan ketentuan
            pedoman akademik yang ada.<br/><br/>
            b) Kegiatan pembelajaran dalam Program Studi lain pada Perguruan Tinggi
            yang sama dapat dilakukan secara tatap muka atau dalam jaringan (daring).</p>

        <p><b>2) Pertukaran Pelajar dalam Program Studi yang sama pada Perguruan Tinggi yang
            berbeda</b><br/>
            Bentuk pembelajaran yang dapat diambil mahasiswa untuk memperkaya
            pengalaman dan konteks keilmuan yang didapat di perguruan tinggi lain
            yang mempunyai kekhasan atau wahana penunjang pembelajaran untuk
            mengoptimalkan CPL.<br/>
            a) Mekanisme<br/>
            (1) Program Studi<br/>
            • Menyusun atau menyesuaikan kurikulum yang memfasilitasi
            mahasiswa untuk mengambil mata kuliah di program studi yang sama
            pada perguruan tinggi lain.<br/>
            • Membuat kesepakatan dengan perguruan tinggi mitra antara lain
            proses pembelajaran, pengakuan kredit semester dan penilaian, serta
            skema pembiayaan.<br/>
            • Kerja sama dapat dilakukan dalam bentuk bilateral, konsorsium
            (asosiasi prodi), klaster (berdasarkan akreditasi), atau zonasi (berdasar
            wilayah).<br/>
            • Mengatur kuota peserta yang mengambil mata kuliah yang ditawarkan
            dalam bentuk pembelajaran dalam program studi yang sama pada
            perguruan tinggi lain.<br/>
            • Mengatur jumlah mata kuliah yang dapat diambil dari program studiyang sama pada perguruan tinggi lain.<br/>
            • Melaporkan kegiatan ke Pangkalan Data Pendidikan Tinggi.<br/>
            (2) Mahasiswa<br/>
            • Mendapatkan persetujuan Dosen Pembimbing Akademik (DPA).<br/>
            • Mengikuti program kegiatan di program studi yang sama pada
            perguruan tinggi lain sesuai dengan ketentuan pedoman akademik
            yang dimiliki perguruan tinggi.<br/>
            • Terdaftar sebagai peserta mata kuliah di program studi yang sama
            pada perguruan tinggi lain.<br/>
            b) Kegiatan pembelajaran dalam Program Studi yang sama pada Perguruan
            Tinggi yang berbeda dapat dilakukan secara tatap muka atau dalam jaringan<br/>
            (daring). Pembelajaran yang dilakukan secara daring dengan ketentuan mata
            kuliah yang ditawarkan harus mendapat pengakuan dari Kemdikbud.</p>

        <p> <b>3) Pertukaran Pelajar antar Program Studi pada Perguruan Tinggi yang berbeda</b><br/>
            Bentuk pembelajaran yang dapat diambil mahasiswa pada perguruan tinggi yang
            berbeda untuk menunjang terpenuhinya capaian pembelajaran baik yang sudah
            tertuang dalam struktur kurikulum program studi, maupun pengembangan
            kurikulum untuk memperkaya capaian pembelajaran lulusan.<br/>
            a) Mekanisme<br/>
            (1) Program Studi<br/>
            • Menyusun kurikulum yang memfasilitasi mahasiswa untuk mengambil
            mata kuliah di program studi lain pada perguruan tinggi yang berbeda.<br/>
            • Menentukan mata kuliah yang dapat diambil mahasiswa dari luar
            prodi.<br/>
            • Mengatur kuota peserta yang mengambil mata kuliah yang ditawarkan
            dalam bentuk pembelajaran dalam Program Studi lain pada Perguruan
            Tinggi yang berbeda.• Mengatur jumlah SKS dan jumlah mata kuliah yang dapat diambil dari
            prodi lain pada perguruan tinggi yang berbeda.<br/>
            • Membuat kesepakatan dengan perguruan tinggi mitra antara lain
            proses pembelajaran, pengakuan kredit semester dan penilaian, serta
            skema pembiayaan.<br/>
            • Kerja sama dapat dilakukan dalam bentuk bilateral, konsorsium
            (asosiasi prodi), klaster (berdasarkan akreditasi), atau zonasi (berdasar
            wilayah).<br/>
            • Melaporkan kegiatan ke Pangkalan Data Pendidikan Tinggi.<br/>
            (2) Mahasiswa<br/>
            • Mendapatkan persetujuan Dosen Pembimbing Akademik (DPA).<br/>
            • Mengikuti program kegiatan pembelajaran dalam program studi<br/>
            lain pada perguruan tinggi yang berbeda sesuai dengan ketentuan
            pedoman akademik yang dimiliki perguruan tinggi.<br/>
            • Terdaftar sebagai peserta mata kuliah di program studi yang dituju
            pada perguruan tinggi lain.<br/>
            b) Kegiatan pembelajaran dalam Program Studi lain pada Perguruan Tinggi
            yang berbeda dapat dilakukan secara tatap muka atau dalam jaringan
            (daring). Pembelajaran yang dilakukan secara daring dengan ketentuan mata
            kuliah yang ditawarkan harus mendapat pengakuan dari Kemdikbud</p>

        <p> Catatan:<br/>
            Pertukaran pelajar dapat dilakukan dengan perguruan tinggi di dalam maupun di luar negeri.<br/>
            <b>Tugas Perguruan Tinggi Pengirim</b><br/>
            1) Menjalin kerja sama dengan perguruan tinggi dalam negeri dan luar negeri atau
            dengan konsorsium keilmuan untuk penyelenggaraan transfer kredit yang dapat
            diikuti mahasiswa.<br/>
            2) PT dapat mengalokasikan kuota untuk mahasiswa inbound maupun mahasiswa
            yang melakukan outbound (timbal-balik/resiprokal).<br/>
            3) Bila diperlukan, menyelenggarakan seleksi pertukaran pelajar yang memenuhi
            asas keadilan bagi mahasiswa.<br/>
            4) Melakukan pemantauan penyelenggaraan pertukaran mahasiswa.<br/>
            5) Menilai dan mengevaluasi hasil pertukaran mahasiswa untuk kemudian dilakukan
            rekognisi terhadap SKS mahasiswa.<br/>
            6) Melaporkan hasil kegiatan belajar ke Direktorat Jenderal Pendidikan Tinggi
            melalui Pangkalan Data Pendidikan Tinggi.<br/>
            <b>Tugas Perguruan Tinggi Tujuan</b><br/>
            1) Menjalin kerja sama dengan perguruan tinggi dalam negeri dan luar negeri atau
            dengan konsorsium keilmuan untuk penyelenggaraan transfer kredit yang dapat
            diikuti mahasiswa.<br/>
            2) Menjamin terselenggaranya program pembelajaran mahasiswa dan aktivitas luar
            kampus mahasiswa sesuai dengan kontrak perjanjian.<br/>
            3) PT dapat mengalokasikan kuota untuk mahasiswa inbound maupun mahasiswa
            yang melakukan outbound (timbal-balik/resiprokal).<br/>
            4) Bila diperlukan, menyelenggarakan seleksi pertukaran pelajar yang memenuhi
            asas keadilan bagi mahasiswa.<br/>
            5) Menyelenggarakan pengawasan secara berkala terhadap proses pertukaran
            mahasiswa.6) Melakukan penjaminan mutu dan mengelola penyelenggaraan pertukaran
            mahasiswa.<br/>
            7) Memberikan nilai dan hasil evaluasi akhir terhadap mahasiswa untuk direkognisi
            di perguruan tinggi asalnya.<br/>
            8) Melaporkan hasil kegiatan belajar ke Direktorat Jenderal Pendidikan Tinggi
            melalui Pangkalan Data Pendidikan Tinggi.</p>

        <hr>
        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Pendaftaran -->
        {{-- <div class="card mb-4">
          <h5 class="card-header">Pendaftaran</h5>
          <div class="card-body">
            <div class="input-group">
              Untuk melakukan pendaftaran kegiatan pertukaran pelajar, silakan klik tombol di bawah ini : <br/>
              <span class="inpug-group-append">
                <a class="btn btn-primary" href="/mahasiswa/showdaftarptk">Daftar</a>
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