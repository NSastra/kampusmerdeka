@extends('kegiatan.app')

@section('title', 'MBKM')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Merdeka Belajar - Kampus Merdeka
    </h1>

    <ol class="breadcrumb">
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ url('img/mbkm.jpg') }}" alt="">

        <hr>

        <!-- Date/Time -->
        <p>Ditulis pada 20 Agustus 2021, 07:35 WIB</p>

        <hr>

        <!-- Post Content -->
        <p class="lead"><b> Kemerdekaan Belajar </b><br/>
            <blockquote class="blockquote">
            <p class="mb-0">"Memberi kebebasan dan otonomi kepada lembaga pendidikan, dan merdeka dari birokratisasi, dosen dibebaskan dari birokrasi yang berbelit serta mahasiswa diberikan kebebasan untuk memilih bidang yang mereka sukai."</p>
            <footer class="blockquote-footer">Nadiem Anwar Makarim 
              <cite title="Source Title">(Menteri Pendidikan dan Kebudayaan)</cite>
            </footer>
          </blockquote></p>

        <p><b> Landasan Hukum </b><br/>
            Merdeka Belajar – Kampus Merdeka merupakan salah satu kebijakan dari Menteri Pendidikan
            dan Kebudayaan, Nadiem Makariem. Salah satu program dari kebijakan Merdeka Belajar
            – Kampus Merdeka adalah Hak Belajar Tiga Semester di Luar Program Studi. Program
            tersebut merupakan amanah dari berbagai regulasi/landasan hukum pendidikan tinggi
            dalam rangka peningkatan mutu pembelajaran dan lulusan pendidikan tinggi. Landasan
            hukum pelaksanaan program kebijakan Hak Belajar Tiga Semester di Luar Program Studi
            diantaranya, sebagai berikut:<br/>
            1. Undang-Undang Nomor 20 Tahun 2003, tentang Sistem Pendidikan Nasional.<br/>
            2. Undang-Undang Nomor 12 Tahun 2012, tentang Pendidikan Tinggi.<br/>
            3. Undang-Undang Nomor 6 Tahun 2014, tentang Desa.<br/>
            4. Peraturan Pemerintah Nomor 04 Tahun 2014, tentang Penyelenggaraan Pendidikan
            Tinggi dan Pengelolaan Perguruan Tinggi.<br/>
            5. Peraturan Presiden nomor 8 tahun 2012, tentang KKNI.<br/>
            6. Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 3 Tahun 2020,
            tentang Standar Nasional Pendidikan Tinggi.<br/>
            7. Peraturan Menteri Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi Nomor 11
            Tahun 2019, tentang Prioritas Penggunaan Dana Desa Tahun 2020.<br/>
            8. Peraturan Menteri Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi Nomor 16
            Tahun 2019, tentang Musyawarah Desa.<br/>
            9. Peraturan Menteri Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi Nomor 17
            Tahun 2019, tentang Pedoman Umum Pembangunan dan Pemberdayaan Masyarakat
            Desa.<br/>
            10. Peraturan Menteri Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi Nomor 18
            Tahun 2019, tentang Pedoman Umum Pendampingan Masyarakat Desa.</p>

        <p><b> Latar Belakang </b><br/>
            Dalam rangka menyiapkan mahasiswa menghadapi perubahan sosial, budaya, dunia kerja
            dan kemajuan teknologi yang pesat, kompetensi mahasiswa harus disiapkan untuk lebih
            gayut dengan kebutuhan zaman. Link and match tidak saja dengan dunia industri dan
            dunia kerja tetapi juga dengan masa depan yang berubah dengan cepat. Perguruan Tinggi
            dituntut untuk dapat merancang dan melaksanakan proses pembelajaran yang inovatif
            agar mahasiswa dapat meraih capaian pembelajaran mencakup aspek sikap, pengetahuan,
            dan keterampilan secara optimal dan selalu relevan.<br/><br/>
            Kebijakan Merdeka Belajar - Kampus Merdeka diharapkan dapat menjadi jawaban atas
            tuntutan tersebut. Kampus Merdeka merupakan wujud pembelajaran di perguruan tinggi
            yang otonom dan fleksibel sehingga tercipta kultur belajar yang inovatif, tidak mengekang,
            dan sesuai dengan kebutuhan mahasiswa.<br/><br/>
            Program utama yaitu: kemudahan pembukaan program studi baru, perubahan sistem
            akreditasi perguruan tinggi, kemudahan perguruan tinggi negeri menjadi PTN berbadan
            hukum, dan hak belajar tiga semester di luar program studi. Mahasiswa diberikan kebebasan
            mengambil SKS di luar program studi, tiga semester yang di maksud berupa 1 semester
            kesempatan mengambil mata kuliah di luar program studi dan 2 semester melaksanakan
            aktivitas pembelajaran di luar perguruan tinggi.<br/><br/>
            Berbagai bentuk kegiatan belajar di luar perguruan tinggi, di antaranya melakukan magang/
            praktik kerja di Industri atau tempat kerja lainnya, melaksanakan proyek pengabdian
            kepada masyarakat di desa, mengajar di satuan pendidikan, mengikuti pertukaran
            mahasiswa, melakukan penelitian, melakukan kegiatan kewirausahaan, membuat studi/
            proyek independen, dan mengikuti program kemanusisaan. Semua kegiatan tersebut
            harus dilaksanakan dengan bimbingan dari dosen. Kampus merdeka diharapkan dapat
            memberikan pengalaman kontekstual lapangan yang akan meningkatkan kompetensi
            mahasiswa secara utuh, siap kerja, atau menciptakan lapangan kerja baru.<br/><br/>
            Proses pembelajaran dalam Kampus Merdeka merupakan salah satu perwujudan
            pembelajaran yang berpusat pada mahasiswa (student centered learning) yang sangat
            esensial. Pembelajaran dalam Kampus Merdeka memberikan tantangan dan kesempatan
            untuk pengembangan inovasi, kreativitas, kapasitas, kepribadian, dan kebutuhan mahasiswa,
            serta mengembangkan kemandirian dalam mencari dan menemukan pengetahuan melalui
            kenyataan dan dinamika lapangan seperti persyaratan kemampuan, permasalahan riil,
            interaksi sosial, kolaborasi, manajemen diri, tuntutan kinerja, target dan pencapaiannya.
            Melalui program merdeka belajar yang dirancang dan diimplementasikan dengan baik,
            maka hard dan soft skills mahasiswa akan terbentuk dengan kuat.<br/><br/>
            Program Merdeka Belajar - Kampus Merdeka diharapkan dapat menjawab tantangan
            Perguruan Tinggi untuk menghasilkan lulusan yang sesuai perkembangan zaman, kemajuan
            IPTEK, tuntutan dunia usaha dan dunia industri, maupun dinamika masyarakat.</p>

        <p><b>Tujuan </b> <br/>
            Tujuan kebijakan Merdeka Belajar - Kampus Merdeka, program “hak belajar tiga semester di
            luar program studi” adalah untuk meningkatkan kompetensi lulusan, baik soft skills maupun
            hard skills, agar lebih siap dan relevan dengan kebutuhan zaman, menyiapkan lulusan
            sebagai pemimpin masa depan bangsa yang unggul dan berkepribadian. Program-program
            experiential learning dengan jalur yang fleksibel diharapkan akan dapat memfasilitasi
            mahasiswa mengembangkan potensinya sesuai dengan passion dan bakatnya.</p>

        <hr>
        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Daftar Kegiatan -->
        <div class="card my-4">
          <h5 class="card-header">Daftar Kegiatan MBKM</h5>
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
                    <a href="/kegiatan/studi">Studi Independen</a>
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