<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ url('assets4/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ url('assets4/css/modern-business.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Universitas Catur Insan Cendekia</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/mahasiswa/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mahasiswa/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Halaman Profil Mahasiswa
      <small></small>
    </h1>

    <ol class="breadcrumb">
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
        <div class="list-group">
            <a href="/mahasiswa/showcreatedok" class="list-group-item">Lengkapi Dokumen</a>
            <a href="/mahasiswa/downloadsurat" class="list-group-item">Download Template Surat Persetujuan</a>
            <a href="/mahasiswa/showcreatesurat" class="list-group-item">Upload Surat Persetujuan</a>
            <a href="/mahasiswa/downloadlaporan" class="list-group-item">Download Template Laporan Kegiatan</a>
            <a href="/mahasiswa/showcreatelprn" class="list-group-item">Upload Laporan Kegiatan</a>
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
          @yield('content')
      </div>
    </div>
    <!-- /.row -->
    <br/><br/><br/><br/><br/>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Moch. Nurhidayat Sastra - Regia Marcellina Matakupan - 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ url('/assets4/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/assets4/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
