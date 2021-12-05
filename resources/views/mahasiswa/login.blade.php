@extends('mahasiswa.loginlayout')

@section('title', 'Login Mahasiswa')

@section('content')

<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Form Login Mahasiswa</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Silakan lakukan proses login untuk bisa mengakses halaman utama sistem informasi pendaftaran kegiatan kampus merdeka</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form action="/mahasiswa/login" method="post">
                    {{-- <form action="/auth/login" method="post"> --}}
                  @csrf

                    <!-- Level -->
                        {{-- <select class="form-select form-control mb-3" name="level">
                            <option selected> Login Sebagai : </option>
                            <option value="admin"> Admin </option>
                            <option value="kaprodi"> Kaprodi </option>
                            <option value="mahasiswa"> Mahasiswa </option>
                        </select> --}}
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" data-sb-validations="required,email" name="email" />
                        <label for="email">Email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password"  data-sb-validations="required" name="password" />
                        <label for="password">Password</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">A password number is required.</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Login</button></div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>Belum Punya Akun? Daftar <a href="/mahasiswa/showregister/"> Di Sini </a></div>
            </div>
        </div>
    </div>
</section>



@endsection