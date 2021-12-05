<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Validasi Pendaftaran Kegiatan Magang</title>

  <!-- Custom fonts for this template-->
  <link href="{{ url('/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-12 col-lg-12 col-md-10">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"> <img src="{{ url('/assets/img/ucic.png') }}"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Validasi Pendaftaran Kegiatan Magang</h1>
                    <h3 class="h4 text-gray-900 mb-4">Untuk Menyelesaikan Pendaftaran, Silakan Isis Data Diri Anda Sekali dan Download Surat Persetujuan Prodi Kemudian Upload Kembali Setelah Ditandatangani </h3>
                  </div>
                  <form class="user" action="/kaprodi/magang/vl" method="post">
                    @csrf
                    
                    @if(session('errors'))
                    <div class="alert alert-danger alert-dismissable fade show" role="alert">
                        Ada Kesalahan :
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> x </span>
                        </button>

                        <ul>
                            @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <label class="col-sm-7 col-form-label font-weight-bold text-gray-800">Berkas Validasi</label>
                    <div class="form-group">
                      <input type="file" class="form-control form-control-user" id="exampleInputEmail" name="file" aria-describedby="emailHelp" value="{{ old('file') ? old('file') : $Magang['file'] }}">
                    </div>
                    <label class="col-sm-7 col-form-label font-weight-bold text-gray-800">Nama Mahasiswa</label>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nama_mhs" aria-describedby="emailHelp" value="{{ old('nama_mhs') ? old('nama_mhs') : $Magang['nama_mhs'] }}">
                      </div>

                      <label class="col-sm-7 col-form-label font-weight-bold text-gray-800">NIM Mahasiswa</label>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nim" aria-describedby="emailHelp" value="{{ old('nim') ? old('nim') : $Magang['nim'] }}">
                      </div>

                      <label class="col-sm-7 col-form-label font-weight-bold text-gray-800">Semester</label>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="semester" aria-describedby="emailHelp" value="{{ old('semester') ? old('semester') : $Magang['semester'] }}">
                      </div>

                      <label class="col-sm-7 col-form-label font-weight-bold text-gray-800">Kelas</label>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="kelas" aria-describedby="emailHelp" value="{{ old('kelas') ? old('kelas') : $Magang['kelas'] }}">
                      </div>

                      <label class="col-sm-7 col-form-label font-weight-bold text-gray-800">Jenis Kegiatan</label>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="kegiatan" aria-describedby="emailHelp" value="Magang">
                      </div>

                      <label class="col-sm-7 col-form-label font-weight-bold text-gray-800">Keterangan</label>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"  name="keterangan" aria-describedby="emailHelp" placeholder=". . . . . . . . . .">
                      </div>
                      
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Proses
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('/assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
