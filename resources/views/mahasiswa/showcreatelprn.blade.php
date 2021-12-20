@extends('app.createlayout')

@section('title', 'Upload Laporan')

@section('content')

<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Upload File Laporan</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Silakan Upload Laporan Kegiatan Pada Kampus Merdeka</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form action="/mahasiswa/createlprn" method="post" enctype="multipart/form-data">
                  @csrf

                    <!-- File CV address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="file" data-sb-validations="required,file" name="file" />
                        <label for="file">File</label>
                        <div class="invalid-feedback" data-sb-feedback="file:required">File Belum Dipilih</div>
                    </div>
                    <!-- File Transkip Nilai address input-->
                    {{-- <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="file" data-sb-validations="required,nilai" name="nilai" />
                        <label for="nilai">File Transkip Nilai</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">File Belum Dipilih</div>
                    </div> --}}
                    <!-- Name address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="text" data-sb-validations="required,nama_mhs" name="nama_mhs" />
                        <label for="nama_mhs">Nama</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Nama Harus Diisi</div>
                    </div>
                    <!-- NIM address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="text" data-sb-validations="required,nim" name="nim" />
                        <label for="nim">NIM</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">NIM Harus Diisi</div>
                    </div>
                    <!-- Kelas address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="text" data-sb-validations="required,kelas" name="kelas" />
                        <label for="kelas">Kelas</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Kelas Harus Diisi</div>
                    </div>
                    <!-- Semester address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="text" data-sb-validations="required,semester" name="semester" />
                        <label for="semester">Semester</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Semester Harus Diisi</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection