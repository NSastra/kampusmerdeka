@extends('mahasiswa.loginlayout')

@section('title', 'Buat Akun Baru')

@section('content')

        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Form Registrasi Akun Mahasiswa</h2>
                        <hr class="divider" />
                        <p> @if(session('errors'))
                            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                                Prosese Gagal, Silakan Ulang Kembali :
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"> x </span>
                                </button>
                    
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form action="/mahasiswa/register" method="post">
                          @csrf
                          <!-- NIM address input-->
                          <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="text" placeholder="name@example.com" data-sb-validations="required,nim" name="nim" />
                            <label for="nim">NIM</label>
                            <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="nim:nim">NIM is not valid.</div>
                            </div>
                            <!-- Nama address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="text" placeholder="name@example.com" data-sb-validations="required,name" name="name" />
                                <label for="name">Nama Lengkap</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama is required.</div>
                            </div>
                            <!-- Kelas address input-->
                            <div class="form-floating mb-3">
                              <input class="form-control" id="email" type="text" placeholder="name@example.com" data-sb-validations="required,kelas" name="kelas" />
                              <label for="kelas">Kelas</label>
                              <div class="invalid-feedback" data-sb-feedback="kelas:required">Kelas is required.</div>
                            </div>
                            <!-- Kelas address input-->
                            <div class="form-floating mb-3">
                              <input class="form-control" id="email" type="text" placeholder="name@example.com" data-sb-validations="required,semester" name="semester" />
                              <label for="semester">Semester</label>
                              <div class="invalid-feedback" data-sb-feedback="semester:required">Semester is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" name="email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" placeholder="(123) 456-7890" data-sb-validations="required" name="password" />
                                <label for="password">Password</label>
                                <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                              <input class="form-control" id="password" type="password" placeholder="(123) 456-7890" data-sb-validations="required" name="password_confirmation" />
                              <label for="password_confirmation">Konfirmasi Password</label>
                              <div class="invalid-feedback" data-sb-feedback="password_confirmation:required">A password confirmation is required.</div>
                          </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>Sudah Punya Akun? <a href="/mahasiswa/showlogin/">Login </a></div>
                    </div>
                </div>
            </div>
        </section>
        
@endsection