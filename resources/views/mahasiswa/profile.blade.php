@extends('mahasiswa.profilapp')

@section('title', 'Profile')

@section('content')

<table>
    <tr>
        <td> <h3>Nama Mahasiswa </td>
        <td> </td>
        <td> <h3>: </td>
        <td> </td>
        <td> <h3>{{ Auth::user()->name }} </td>
    </tr>
    <tr>
      <td> <h3>NIM </td>
      <td> </td>
      <td> <h3>: </td>
      <td> </td>
      <td> <h3>{{ Auth::user()->nim }} </td>
  </tr>
  <tr>
      <td> <h3> Kelas </h3> </td>
      <td> </td>
      <td> <h3>: </td>
      <td> </td>
      <td> <h3>{{ Auth::user()->kelas }} </td>
  </tr>
  <tr>
      <td> <h3>Semester </td>
      <td> </td>
      <td> <h3>: </td>
      <td> </td>
      <td> <h3>{{ Auth::user()->semester }} </td>
  </tr>
</table>

<h3> Status Pendaftaran : </h3>
<h4> 1. Magang </h4>
@foreach($Magang as $mg)
    {{-- @foreach($mg->users as $status)
<h3> {{ $status['status'] }} </h3>
    @endforeach --}}
    <h4> {{ $mg->nama_mitra }} , {{ $mg->status }} </h4>
@endforeach
<br/>

<h4> 2. Studi Independen </h4>
@foreach($Studi as $std)
    {{-- @foreach($std->users as $status)
<h3> {{ $status['status'] }} </h3>
    @endforeach --}}
    <h4> {{ $std->nama_mitra }} , {{ $std->status }} </h4>
@endforeach
<br/>

<h4> 3. Proyek Kemanusiaan </h4>
@foreach($Kemanusiaan as $kms)
    {{-- @foreach($kms->users as $status)
<h3> {{ $status['status'] }} </h3>
    @endforeach --}}
    <h4> {{ $kms->nama_mitra }} , {{ $kms->status }} </h4>
@endforeach
<br/>

<h4> 4. KKN </h4>
@foreach($Kkn as $kkn)
    {{-- @foreach($kkn->users as $status)
<h3> {{ $status['status'] }} </h3>
    @endforeach --}}
    <h4> {{ $kkn->nama_mitra }} , {{ $kkn->status }} </h4>
@endforeach
<br/>

<h4> 5. Penelitian </h4>
@foreach($Penelitian as $plt)
    {{-- @foreach($plt->users as $status)
<h3> {{ $status['status'] }} </h3>
    @endforeach --}}
    <h4> {{ $plt->nama_mitra }} , {{ $plt->status }} </h4>
@endforeach
<br/>

<h4> 6. Asistensi Mengajar </h4>
@foreach($Mengajar as $mengajar)
    {{-- @foreach($mengajar->users as $status)
<h3> {{ $status['status'] }} </h3>
    @endforeach --}}
    <h4> {{ $mengajar->nama_mitra }} , {{ $mengajar->status }} </h4>
@endforeach
<br/>

<h4> 7. Pertukaran Pelajar </h4>
@foreach($Pertukaran as $ptk)
    {{-- @foreach($ptk->users as $status)
<h3> {{ $status['status'] }} </h3>
    @endforeach --}}
    <h4> {{ $ptk->nama_mitra }} , {{ $ptk->status }} </h4>
@endforeach
<br/>

<h4> 8. Kewirausahaan </h4>
@foreach($Kewirausahaan as $kwu)
    {{-- @foreach($kwu->users as $status)
<h3> {{ $status['status'] }} </h3>
    @endforeach --}}
    <h4> {{ $kwu->nama_mitra }} , {{ $kwu->status }} </h4>
@endforeach
    

@endsection