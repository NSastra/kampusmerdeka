@extends('admin.layout')

@section('title', 'Edit Mitra Penelitian')

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
  
          <form action="/admin/editmitraplt/{{ $Mitraplt['id'] }}" method="post">
            @csrf
            @method('PUT')

            <div class="row mb-3">
              <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama Mitra</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_mitra" aria-describedby="emailHelp" value="{{ old('nama_mitra') ? old('nama_mitra') : $Mitraplt->nama_mitra }}">
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
