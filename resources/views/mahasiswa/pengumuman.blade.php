@extends('mahasiswa.indexlayout')

@section('title', 'Pengumuman')

@section('content')

<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <table border="1" align="center">
            <tr>
                <th> Tanggal </th>
                <th> Nama Mahasiswa </th>
                <th> Jenis Kegiatan </th>
                <th> Keterangan </th>
            </tr>
            
            @foreach($Validasi as $vl)
            <tr>
                <tbody>
                    <td> {{ $vl['created_at'] }} </td>
                    <td> {{ $vl['nama_mhs'] }} </td>
                    <td> {{ $vl['kegiatan'] }} </td>
                    <td> {{ $vl['status'] }} </td>
                </tbody>
            </tr>
            @endforeach
        </table>
    </div>
</header>

<section class="page-section bg-dark text-white">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <table border="1" align="center">
        <tr>
            <th> Tanggal </th>
            <th> Nama Mahasiswa </th>
            <th> Jenis Kegiatan </th>
            <th> Keterangan </th>
        </tr>
        
        @foreach($Validasi as $vl)
        <tr>
            <tbody>
                <td> {{ $vl['created_at'] }} </td>
                <td> {{ $vl['nama_mhs'] }} </td>
                <td> {{ $vl['kegiatan'] }} </td>
                <td> {{ $vl['status'] }} </td>
            </tbody>
        </tr>
        @endforeach
    </table>
</section>

    </div>

@endsection