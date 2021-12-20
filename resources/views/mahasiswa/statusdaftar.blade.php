<!doctype html>
<html lang="en">
  <head>
  	<title>Status Pendaftaran</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ url('assets2/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Magang</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>ID</th>
						      <th>Tanggal Daftar</th>
						      <th>Nama Mitra</th>
						      <th>Status</th>
						    </tr>
						  </thead>
                          @foreach($Magang as $mg)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $mg['id'] }}</th>
						      <td>{{ $mg['created_at'] }}</td>
						      <td>{{ $mg['nama_mitra'] }}</td>
						      <td>{{ $mg['status'] }}</td>
						    </tr>
						  </tbody>
                          @endforeach
						</table>
					</div>
				</div>
			</div>

            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Studi Independen</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>ID</th>
						      <th>Tanggal Daftar</th>
						      <th>Nama Mitra</th>
						      <th>Status</th>
						    </tr>
						  </thead>
                          @foreach($Studi as $std)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $std['id'] }}</th>
						      <td>{{ $std['created_at'] }}</td>
						      <td>{{ $std['nama_mitra'] }}</td>
						      <td>{{ $std['status'] }}</td>
						    </tr>
						  </tbody>
                          @endforeach
						</table>
					</div>
				</div>
			</div>

            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Proyek Kemanusiaan</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>ID</th>
						      <th>Tanggal Daftar</th>
						      <th>Nama Mitra</th>
						      <th>Status</th>
						    </tr>
						  </thead>
                          @foreach($Kemanusiaan as $kms)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $kms['id'] }}</th>
						      <td>{{ $kms['created_at'] }}</td>
						      <td>{{ $kms['nama_mitra'] }}</td>
						      <td>{{ $kms['status'] }}</td>
						    </tr>
						  </tbody>
                          @endforeach
						</table>
					</div>
				</div>
			</div>

            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">KKN Tematik</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>ID</th>
						      <th>Tanggal Daftar</th>
						      <th>Nama Mitra</th>
						      <th>Status</th>
						    </tr>
						  </thead>
                          @foreach($Kkn as $kkn)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $kkn['id'] }}</th>
						      <td>{{ $kkn['created_at'] }}</td>
						      <td>{{ $kkn['nama_mitra'] }}</td>
						      <td>{{ $kkn['status'] }}</td>
						    </tr>
						  </tbody>
                          @endforeach
						</table>
					</div>
				</div>
			</div>

            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Penelitian</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>ID</th>
						      <th>Tanggal Daftar</th>
						      <th>Nama Mitra</th>
						      <th>Status</th>
						    </tr>
						  </thead>
                          @foreach($Penelitian as $plt)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $plt['id'] }}</th>
						      <td>{{ $plt['created_at'] }}</td>
						      <td>{{ $plt['nama_mitra'] }}</td>
						      <td>{{ $plt['status'] }}</td>
						    </tr>
						  </tbody>
                          @endforeach
						</table>
					</div>
				</div>
			</div>

            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Asistensi Mengajar</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>ID</th>
						      <th>Tanggal Daftar</th>
						      <th>Nama Mitra</th>
						      <th>Status</th>
						    </tr>
						  </thead>
                          @foreach($Mengajar as $ajar)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $ajar['id'] }}</th>
						      <td>{{ $ajar['created_at'] }}</td>
						      <td>{{ $ajar['nama_mitra'] }}</td>
						      <td>{{ $ajar['status'] }}</td>
						    </tr>
						  </tbody>
                          @endforeach
						</table>
					</div>
				</div>
			</div>

            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Pertukaran Pelajar</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>ID</th>
						      <th>Tanggal Daftar</th>
						      <th>Nama Mitra</th>
						      <th>Status</th>
						    </tr>
						  </thead>
                          @foreach($Pertukaran as $ptk)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $ptk['id'] }}</th>
						      <td>{{ $ptk['created_at'] }}</td>
						      <td>{{ $ptk['nama_mitra'] }}</td>
						      <td>{{ $ptk['status'] }}</td>
						    </tr>
						  </tbody>
                          @endforeach
						</table>
					</div>
				</div>
			</div>

            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Kewirausahaan</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>ID</th>
						      <th>Tanggal Daftar</th>
						      <th>Nama Mitra</th>
						      <th>Status</th>
						    </tr>
						  </thead>
                          @foreach($Kewirausahaan as $kwu)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $kwu['id'] }}</th>
						      <td>{{ $kwu['created_at'] }}</td>
						      <td>{{ $kwu['nama_mitra'] }}</td>
						      <td>{{ $kwu['status'] }}</td>
						    </tr>
						  </tbody>
                          @endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ url('assets2/js/jquery.min.js') }}"></script>
  <script src="{{ url('assets2/js/popper.js') }}"></script>
  <script src="{{ url('assets2/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets2/js/main.js') }}"></script>

	</body>
</html>

