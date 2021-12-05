@extends('admin.layout')

@section('title', 'Edit Data Validasi Pendaftaran')

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
  
          <form action="/admin/editvalid/{{ $Validasi['id'] }}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb-3">
              <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_mhs" aria-describedby="emailHelp" value="{{ old('nama_mhs') ? old('nama_mhs') : $Validasi->nama_mhs }}">
              </div>
            </div>

              {{-- @error('nama_mhs')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nim" aria-describedby="emailHelp" value="{{ old('nim') ? old('nim') : $Validasi['nim'] }}">
                </div>
              </div>

              @error('nim')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="kelas" aria-describedby="emailHelp" value="{{ old('kelas') ? old('kelas') : $Validasi['kelas'] }}">
                </div>
              </div>

              {{-- @error('kelas')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="semester" aria-describedby="emailHelp" value="{{ old('semester') ? old('semester') : $Validasi['semester'] }}">
                </div>
              </div>

              {{-- @error('semester')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Jenis Kegiatan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="kegiatan" aria-describedby="emailHelp" value="{{ old('kegiatan') ? old('kegiatan') : $Validasi['kegiatan'] }}">
                </div>
              </div>

              {{-- @error('kegiatan')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="status" aria-describedby="emailHelp" value="{{ old('status') ? old('status') : $Validasi['status'] }}">
                </div>
              </div>

              {{-- @error('status')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="keterangan" aria-describedby="emailHelp" value="{{ old('keterangan') ? old('keterangan') : $Validasi['keterangan'] }}">
                </div>
              </div>

              {{-- @error('keterangan')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

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
    </form>
    </div>
  </div>
</div>
@endsection
