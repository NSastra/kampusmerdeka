@extends('app.profilelayout')

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

<div>
    {{-- <img src=" {{ url('asset/pic/user.png') }}" height="500" weight="500"> --}}
    <form action="/mahasiswa/uploadfoto" method="post">
        @csrf
        <input type="file" name="foto">
        <br/> <br/>
        <button type="submit" value="submit"> Upload Foto </button>
    </form>
</div>

@endsection