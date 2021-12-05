<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-gg0yR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 10pt;
        }
    </style>
    <h2 align="center"> Laporan Pendaftaran Kegiatan Kampus Merdeka <br/> Prodi Sistem Informasi <br/> Universitas Catur Insan Cendekia <br/> Tahun Ajaran 2022/2023</h2>
    {{-- <img src="{{ url('img/cic.png') }}"> --}}
    <p> Berikut ini adalah rekapitulasi jumlah pendaftaran kegiatan kampus merdeka di semua jenis kegiatan yang dilakukan oleh para mahasiswa/i Program Studi Sistem Informasi di Univeristas Catur Insan Cendekia : <br/> </p>
    <table class="table table-borderd" border="0">
        <tr>
            <td> Studi Independen </td>
            <td> : </td>
            <td> @php echo count($Studi) @endphp </td>
        </tr>
        <tr>
            <td> Penelitian </td>
            <td> : </td>
            <td> @php echo count($Penelitian) @endphp </td>
        </tr>
        <tr>
            <td> KKN Tematik </td>
            <td> : </td>
            <td> @php echo count($Kkn) @endphp </td>
        </tr>
        <tr>
            <td> Kewirausahaan </td>
            <td> : </td>
            <td> @php echo count($Kewirausahaan) @endphp </td>
        </tr>
        <tr>
            <td> Pertukaran Pelajar </td>
            <td> : </td>
            <td> @php echo count($Pertukaran) @endphp </td>
        </tr>
        <tr>
            <td> Asistensi Mengajar </td>
            <td> : </td>
            <td> @php echo count($Mengajar) @endphp </td>
        </tr>
        <tr>
            <td> Proyek Kemanusiaan </td>
            <td> : </td>
            <td> @php echo count($Kemanusiaan) @endphp </td>
        </tr>
        <tr>
            <td> Magang </td>
            <td> : </td>
            <td> @php echo count($Magang) @endphp </td>
        </tr>
        <tr>
            @php $total = count($Magang)+count($Kkn)+count($Studi)+count($Mengajar)+count($Pertukaran)+count($Penelitian)+count($Kewirausahaan)+count($Kemanusiaan); @endphp
            <td> <b> Total </b> </td>
            <td> <b> : </b> </td>
            <td> <b> @php echo $total; @endphp </b> </td>
        </tr>
    </table>
    <br/>
    Dan berikut ini adalah rincian data pendaftaran dari masing-masing jenis kegiatan kampus merdeka : <br/><br/>
    
    1. Studi Independen <br/><br/>

    <table class="table table-borderd" border="1">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Pendaftaran </th>
                <th> Kode Pendaftaran </th>
                <th> NIM </th>
                <th> Nama Mahasiswa </th>
                <th> Semester </th>
                <th> Kelas </th>
                <th> Nama Mitra </th>
                <th> Status </th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($Studi as $std)
            <tr>
                <td align="center"> {{ $i++ }} </td>
                <td align="center"> {{ $std['created_at'] }} </td>
                <td align="center"> {{ $std['id'] }} </td>
                <td align="center"> {{ $std['nim'] }} </td>
                <td align="center"> {{ $std['nama_mhs'] }} </td>
                <td align="center"> {{ $std['semester'] }} </td>
                <td align="center"> {{ $std['kelas'] }} </td>
                <td align="center"> {{ $std['nama_mitra'] }} </td>
                <td align="center"> {{ $std['status'] }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>

    2. Penelitian <br/><br/>

    <table class="table table-borderd" border="1">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Pendaftaran </th>
                <th> Kode Pendaftaran </th>
                <th> NIM </th>
                <th> Nama Mahasiswa </th>
                <th> Semester </th>
                <th> Kelas </th>
                <th> Nama Mitra </th>
                <th> Status </th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($Penelitian as $plt)
            <tr>
                <td align="center"> {{ $i++ }} </td>
                <td align="center"> {{ $plt['created_at'] }} </td>
                <td align="center"> {{ $plt['id'] }} </td>
                <td align="center"> {{ $plt['nim'] }} </td>
                <td align="center"> {{ $plt['nama_mhs'] }} </td>
                <td align="center"> {{ $plt['semester'] }} </td>
                <td align="center"> {{ $plt['kelas'] }} </td>
                <td align="center"> {{ $plt['nama_mitra'] }} </td>
                <td align="center"> {{ $plt['status'] }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>

    3. KKN Tematik <br/><br/>

    <table class="table table-borderd" border="1">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Pendaftaran </th>
                <th> Kode Pendaftaran </th>
                <th> NIM </th>
                <th> Nama Mahasiswa </th>
                <th> Semester </th>
                <th> Kelas </th>
                <th> Nama Mitra </th>
                <th> Studi </th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($Kkn as $kkn)
            <tr>
                <td align="center"> {{ $i++ }} </td>
                <td align="center"> {{ $kkn['created_at'] }} </td>
                <td align="center"> {{ $kkn['id'] }} </td>
                <td align="center"> {{ $kkn['nim'] }} </td>
                <td align="center"> {{ $kkn['nama_mhs'] }} </td>
                <td align="center"> {{ $kkn['semester'] }} </td>
                <td align="center"> {{ $kkn['kelas'] }} </td>
                <td align="center"> {{ $kkn['nama_mitra'] }} </td>
                <td align="center"> {{ $kkn['status'] }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>

    4. Kewirausahaan <br/><br/>

    <table class="table table-borderd" border="1">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Pendaftaran </th>
                <th> Kode Pendaftaran </th>
                <th> NIM </th>
                <th> Nama Mahasiswa </th>
                <th> Semester </th>
                <th> Kelas </th>
                <th> Nama Mitra </th>
                <th> Studi </th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($Kewirausahaan as $kwu)
            <tr>
                <td align="center"> {{ $i++ }} </td>
                <td align="center"> {{ $kwu['created_at'] }} </td>
                <td align="center"> {{ $kwu['id'] }} </td>
                <td align="center"> {{ $kwu['nim'] }} </td>
                <td align="center"> {{ $kwu['nama_mhs'] }} </td>
                <td align="center"> {{ $kwu['semester'] }} </td>
                <td align="center"> {{ $kwu['kelas'] }} </td>
                <td align="center"> {{ $kwu['nama_mitra'] }} </td>
                <td align="center"> {{ $kwu['status'] }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>

    5. Pertukaran Pelajar <br/><br/>

    <table class="table table-borderd" border="1">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Pendaftaran </th>
                <th> Kode Pendaftaran </th>
                <th> NIM </th>
                <th> Nama Mahasiswa </th>
                <th> Semester </th>
                <th> Kelas </th>
                <th> Nama Mitra </th>
                <th> Studi </th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($Pertukaran as $plt)
            <tr>
                <td align="center"> {{ $i++ }} </td>
                <td align="center"> {{ $plt['created_at'] }} </td>
                <td align="center"> {{ $plt['id'] }} </td>
                <td align="center"> {{ $plt['nim'] }} </td>
                <td align="center"> {{ $plt['nama_mhs'] }} </td>
                <td align="center"> {{ $plt['semester'] }} </td>
                <td align="center"> {{ $plt['kelas'] }} </td>
                <td align="center"> {{ $plt['nama_mitra'] }} </td>
                <td align="center"> {{ $plt['status'] }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>

    6. Asistensi Mengajar <br/><br/>

    <table class="table table-borderd" border="1">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Pendaftaran </th>
                <th> Kode Pendaftaran </th>
                <th> NIM </th>
                <th> Nama Mahasiswa </th>
                <th> Semester </th>
                <th> Kelas </th>
                <th> Nama Mitra </th>
                <th> Studi </th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($Mengajar as $ajar)
            <tr>
                <td align="center"> {{ $i++ }} </td>
                <td align="center"> {{ $ajar['created_at'] }} </td>
                <td align="center"> {{ $ajar['id'] }} </td>
                <td align="center"> {{ $ajar['nim'] }} </td>
                <td align="center"> {{ $ajar['nama_mhs'] }} </td>
                <td align="center"> {{ $ajar['semester'] }} </td>
                <td align="center"> {{ $ajar['kelas'] }} </td>
                <td align="center"> {{ $ajar['nama_mitra'] }} </td>
                <td align="center"> {{ $ajar['status'] }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>

    7. Proyek Kemanusiaan <br/><br/>

    <table class="table table-borderd" border="1">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Pendaftaran </th>
                <th> Kode Pendaftaran </th>
                <th> NIM </th>
                <th> Nama Mahasiswa </th>
                <th> Semester </th>
                <th> Kelas </th>
                <th> Nama Mitra </th>
                <th> Studi </th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($Kemanusiaan as $kms)
            <tr>
                <td align="center"> {{ $i++ }} </td>
                <td align="center"> {{ $kms['created_at'] }} </td>
                <td align="center"> {{ $kms['id'] }} </td>
                <td align="center"> {{ $kms['nim'] }} </td>
                <td align="center"> {{ $kms['nama_mhs'] }} </td>
                <td align="center"> {{ $kms['semester'] }} </td>
                <td align="center"> {{ $kms['kelas'] }} </td>
                <td align="center"> {{ $kms['nama_mitra'] }} </td>
                <td align="center"> {{ $kms['status'] }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>

    8. Magang / Praktik Kerja <br/><br/>

    <table class="table table-borderd" border="1">
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal Pendaftaran </th>
                <th> Kode Pendaftaran </th>
                <th> NIM </th>
                <th> Nama Mahasiswa </th>
                <th> Semester </th>
                <th> Kelas </th>
                <th> Nama Mitra </th>
                <th> Studi </th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($Magang as $mgn)
            <tr>
                <td align="center"> {{ $i++ }} </td>
                <td align="center"> {{ $mgn['created_at'] }} </td>
                <td align="center"> {{ $mgn['id'] }} </td>
                <td align="center"> {{ $mgn['nim'] }} </td>
                <td align="center"> {{ $mgn['nama_mhs'] }} </td>
                <td align="center"> {{ $mgn['semester'] }} </td>
                <td align="center"> {{ $mgn['kelas'] }} </td>
                <td align="center"> {{ $mgn['nama_mitra'] }} </td>
                <td align="center"> {{ $mgn['status'] }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
    Demikian laporan pendaftaran kegiatan kampus merdeka prodi Sistem Informasi ini agar dapat diketahui bersama.<br/>
    <p align="right"> Cirebon, @php echo date('d/m/Y'); @endphp </p>
    <p align="right"> Mengetahui, </p>
    <br/><br/><br/>
    <p align="right"> ____________________ </p>
    <p align="right"> Lena Magdalena, MMSI </p>
    


    
</body>
</html>