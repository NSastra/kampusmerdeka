@extends('app.adminlayout')

@section('title', 'Edit Data User')

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
  
          <form action="/admin/edituser/{{ $User['id'] }}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb-3">
              <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{ old('name') ? old('name') : $User->name }}">
              </div>
            </div>

              {{-- @error('name')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ old('email') ? old('email') : $User->email }}">
                </div>
              </div>

              {{-- @error('email')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nim" aria-describedby="emailHelp" value="{{ old('nim') ? old('nim') : $User['nim'] }}">
                </div>
              </div>

              @error('nim')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="kelas" aria-describedby="emailHelp" value="{{ old('kelas') ? old('kelas') : $User['kelas'] }}">
                </div>
              </div>

              {{-- @error('kelas')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputEmail1" name="semester" aria-describedby="emailHelp" value="{{ old('semester') ? old('semester') : $User['semester'] }}">
                </div>
              </div>

              {{-- @error('semester')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp">
                </div>
              </div>

              {{-- @error('password')
              <div class="alert alert-danger"> {{ $message }}
              </div>
              @enderror --}}

              <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="exampleInputEmail1" name="password_confirmation" aria-describedby="emailHelp">
                </div>
              </div>

              {{-- @error('password_confirmation')
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
