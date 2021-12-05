@extends('kaprodi.layout')

@section('title', 'Data Pendaftaran Kewirausahaan')

@section('content')

<h1 class="h3 mb-2 text-gray-800" align="center">Daftar Mahasiswa Peserta Kegiatan Kewirausahaan</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <div class="dropdown mb-4">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cetak Data
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/kaprodi/printkwu2122" target="__blank">Tahun Ajaran 2021/2022</a>
                    <a class="dropdown-item" href="/kaprodi/printkwu2223" target="__blank">Tahun Ajaran 2022/2023</a>
                  </div>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal Pendaftaran</th>
                      <th>Kode Pendaftaran</th>
                      <th>NIM</th>
                      <th>Nama Mahasiswa</th>
                      <th>Semester</th>
                      <th>Kelas</th>
                      <th>Nama Mitra</th>
                      <th>Status</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tanggal Pendaftaran</th>
                      <th>Kode Pendaftaran</th>
                      <th>NIM</th>
                      <th>Nama Mahasiswa</th>
                      <th>Semester</th>
                      <th>Kelas</th>
                      <th>Nama Mitra</th>
                      <th>Status</th>
                      <th> </th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($Kewirausahaan as $kwu)
                    <tr>
                      {{-- <td> <img src="{{ asset('img/' . $kwu->gambar) }}" width="250" height="250"> </td> --}}
                      <td> {{ $kwu['created_at'] }} </td>
                      <td> {{ $kwu['id'] }} </td>
                      <td> {{ $kwu['nim'] }} </td>
                      <td> {{ $kwu['nama_mhs'] }} </td>
                      <td> {{ $kwu['semester'] }} </td>
                      <td> {{ $kwu['kelas'] }} </td>
                      <td> {{ $kwu['nama_mitra'] }} </td>
                      <td> {{ $kwu['status'] }} </td>
                      <td> <a href="/kaprodi/kwu/{{ $kwu['id'] }}">Validasi
                      </td>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

@endsection