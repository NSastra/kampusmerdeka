@extends('app.adminlayout')

@section('title', 'Edit Surat Persetujuan')

@section('content')
<!-- DataTales Example -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
          </div>

          <!-- Content Row -->
          <div class="row">
          </div>
          <!-- /.container-fluid -->
  
          <form action="/admin/editsurat/{{ $Surat['id'] }}" method="post">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" id="exampleInputEmail1" name="file" aria-describedby="emailHelp" value="{{ old('file') ? old('file') : $Surat['file'] }}">
                </div>
            </div>

            <div class="row mb-3">
              <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_mhs" aria-describedby="emailHelp" value="{{ old('nama_mhs') ? old('nama_mhs') : $Surat->nama_mhs }}">
              </div>
            </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">NIM Mahasiswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nim" aria-describedby="emailHelp" value="{{ old('nim') ? old('nim') : $Surat->nim }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="kelas" aria-describedby="emailHelp" value="{{ old('kelas') ? old('kelas') : $Surat['kelas'] }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="semester" aria-describedby="emailHelp" value="{{ old('semester') ? old('semester') : $Surat['semester'] }}">
                </div>
              </div>

              @if(session('errors'))
              <div class="alert alert-danger alert-dismissable fade show" role="alert">
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

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
    </div>
  </div>
</div>
@endsection
