<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendaftaran Penelitian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-gg0yR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <h2 align="center"> Laporan Pendaftaran Kegiatan Penelitian <br/> Prodi Sistem Informasi <br/> Universitas Catur Insan Cendekia <br/> Tahun Ajaran 2022/2023</h2>
    {{-- <img src="{{ url('img/cic.png') }}"> --}}
    <p> Berikut ini terlampir data pendaftaran kegiatan Penelitian yang dilakukan oleh para mahasiswa/i Program Studi Sistem Informasi di Univeristas Catur Insan Cendekia : <br/> </p>
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
            {{-- @if (!empty($Penelitian)){ --}}
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
        {{-- } else {
            <tr>
            <td colspan="9" align="center"> Belum Ada Data </td> 
            </tr>
        }
        @endif --}}
        </tbody>
    </table>
    <br/>

    Berdasarkan data tersebut, dapat diketahui bahwa sampai tanggal @php echo date('d/m/Y'); @endphp jumlah mahasiswa program studi sistem informasi yang mendaftar pada kegiatan penelitian adalah sebanyak
    @php echo count($Penelitian) @endphp mahasiswa.
    
</body>
</html>