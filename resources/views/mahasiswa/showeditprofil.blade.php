@extends('app.createlayout')

@section('title', 'Update Profil')

@section('content')

<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Update Profil</h2>
                <hr class="divider" />
                <p class="text-muted mb-5"></p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form action="/mahasiswa/editprofil" method="post" enctype="multipart/form-data">
                  @csrf

                    <!-- NIM -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nim" type="text" data-sb-validations="required,nim" name="nim" value=" {{ Auth::user()->nim }}" />
                        <label for="nim">NIM</label>
                        <div class="invalid-feedback" data-sb-feedback="nim:required">NIM Harus Diisi</div>
                    </div>
                    <!-- Name Mahasiswa -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" data-sb-validations="required,name" name="name" value=" {{ Auth::user()->name }}"/>
                        <label for="name">Nama</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Nama Harus Diisi</div>
                    </div>
                    <!-- Kelas input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="kelas" type="text" data-sb-validations="required,kelas" name="kelas" value="{{ Auth::user()->kelas }}"/>
                        <label for="kelas">Kelas</label>
                        <div class="invalid-feedback" data-sb-feedback="kelas:required">Kelas Harus Diisi</div>
                    </div>
                    <!-- Semester -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="semester" type="text" data-sb-validations="required,semester" name="semester" value=" {{ Auth::user()->semester }}"/>
                        <label for="semester">Semester</label>
                        <div class="invalid-feedback" data-sb-feedback="semester:required">Semester Harus Diisi</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection