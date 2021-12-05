@extends('kegiatan.appdaftar')

@section('title', 'Pendaftaran Kegiatan Kewirausahaan')

@section('content')

<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Anda akan melakukan pendaftaran untuk kegiatan berikut ini :</h2>
                <hr class="divider" />
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form action="/kegiatan/dfkwu" method="post">
                  @csrf
                    {{-- <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nim" type="text" placeholder="name@example.com" data-sb-validations="required,nim" name="nim" />
                        <label for="nim">NIM</label>
                        <div class="invalid-feedback" data-sb-feedback="nim:required">An NIM is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nama_mhs" type="text" placeholder="name@example.com" data-sb-validations="required,nama_mhs" name="nama_mhs" />
                        <label for="nama_mhs">Nama Mahasiswa</label>
                        <div class="invalid-feedback" data-sb-feedback="nama_mhs:required">An Nama Mahasiswa is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="semester" type="text" placeholder="name@example.com" data-sb-validations="required,semester" name="semester" />
                        <label for="semester">Semester</label>
                        <div class="invalid-feedback" data-sb-feedback="semester:required">An Semester is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="kelas" type="text" placeholder="name@example.com" data-sb-validations="required,kelas" name="kelas" />
                        <label for="kelas">Kelas</label>
                        <div class="invalid-feedback" data-sb-feedback="kelas:required">An Kelas is required.</div>
                    </div> --}}

                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="kegiatan" type="text" placeholder="name@example.com" data-sb-validations="required,kegiatan" name="kegiatan" value="Kewirausahaan" />
                        <label for="kegiatan">Jenis Kegiatan</label>
                        <div class="invalid-feedback" data-sb-feedback="kegiatan:required">An Jenis Kegiatan is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nama_mitra" type="text" placeholder="name@example.com" data-sb-validations="required,nama_mitra" name="nama_mitra" value="{{ old('nama_mitra') ? old('nama_mitra') : $Mitrakwu['nama_mitra'] }}" />
                        <label for="nama_mitra">Nama Mitra</label>
                        <div class="invalid-feedback" data-sb-feedback="nama_mitra:required">An Nama Mitra is required.</div>
                    </div>

                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6 text-center">
                            <p class="mt-0">Klik lanjutkan untuk konfirmasi</p>
                        </div>
                    </div>

                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Lanjutkan</button></div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
        </div>
    </div>
</section>



@endsection