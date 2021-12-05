@extends('kaprodi.layout')

@section('title', 'Data Pendaftaran KKN Tematik')

@section('content')

<h1 class="h3 mb-2 text-gray-800" align="center">Daftar Mahasiswa Peserta Kegiatan KKN Tematik</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <div class="dropdown mb-4">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cetak Data
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/kaprodi/printkkn2122" target="__blank">Tahun Ajaran 2021/2022</a>
                    <a class="dropdown-item" href="/kaprodi/printkkn2223" target="__blank">Tahun Ajaran 2022/2023</a>
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
                    @foreach($Kkn as $kkn)
                    <tr>
                      {{-- <td> <img src="{{ asset('img/' . $kkn->gambar) }}" width="250" height="250"> </td> --}}
                      <td> {{ $kkn['created_at'] }} </td>
                      <td> {{ $kkn['id'] }} </td>
                      <td> {{ $kkn['nim'] }} </td>
                      <td> {{ $kkn['nama_mhs'] }} </td>
                      <td> {{ $kkn['semester'] }} </td>
                      <td> {{ $kkn['kelas'] }} </td>
                      <td> {{ $kkn['nama_mitra'] }} </td>
                      <td> {{ $kkn['status'] }} </td>
                      <td> <a href="/kaprodi/kkn/{{ $kkn['id'] }}">Validasi
                      </td>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@endsection