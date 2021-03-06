@extends('app.adminlayout')

@section('title', 'Data Mitra Magang')

@section('content')

<h1 class="h3 mb-2 text-gray-800" align="center">Daftar Mitra Magang</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#createModal">
                  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th> Kode Mitra </th>
                      <th>Nama Mitra</th>
                      
                      
                      <th> </th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th> Kode Mitra </th>
                      <th>Nama Mitra</th>
                      
                      
                      <th> </th>
                      <th> </th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($Mitramagang as $mitramagang)
                    <tr>
                      {{-- <td> <img src="{{ asset('img/' . $mitramagang->gambar) }}" width="250" height="250"> </td> --}}
                      <td> {{ $mitramagang['id'] }} </td>
                      <td> {{ $mitramagang['nama_mitra'] }} </td>
                      <td> <a class="btn btn-warning" href="/admin/showeditmitramagang/{{ $mitramagang['id'] }}"> Edit Data </a> </td>
                      <td> <form action="/admin/hapusmitramagang/{{ $mitramagang['id'] }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger"> Hapus Data </button> </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>

<!-- Create Modal-->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Tambah Data</b></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">??</span>
        </button>
      </div>
      
      <form class="user" action="/admin/createmitramagang" method="post">
        @csrf
        <div class="modal-body">

        @if(session('errors'))
        <div class="alert alert-danger alert-dismissable fade show" role="alert">
            Prosese Gagal, Silakan Ulang Kembali :
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

        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-5 col-form-label">Nama Mitra</label>
          <div class="col-sm-9">
            <input type="type" class="form-control" name="nama_mitra">
          </div>
        </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-user btn-block">
          Submit
        </button>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
      </div>
        </div>
      </form>
      </div>
    </div>
  </div>
@endsection