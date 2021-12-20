@extends('app.loginlayout')

@section('title', 'Ganti Password')

@section('content')

<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Ganti Password</h2>
                <hr class="divider" />
                <p class="text-muted mb-5"></p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">

                <div class="panel-body">
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    @if($errors)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach
                    @endif

                <form action="/mahasiswa/changepassword" method="post" enctype="multipart/form-data">
                  {{-- @csrf --}}
                  {{  csrf_field() }}

                    <!-- Current Password input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="current_password" type="password" data-sb-validations="required,current-password" name="current_password" />
                        <label for="current-password">Masukkan Password Lama</label>
                        <div class="invalid-feedback" data-sb-feedback="current_password:required">Password Lama Harus Diisi</div>
                    </div>
                    <!-- New Password input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password" data-sb-validations="required,password" name="password" />
                        <label for="password">Masukkan Password Baru</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">Password Baru Harus Diisi</div>
                    </div>
                    <!-- Confirm New Password input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password_confirmation" type="password" data-sb-validations="required,password_confirmation" name="password_confirmation" />
                        <label for="password_confirmation">Konfirmasi Password Baru</label>
                        <div class="invalid-feedback" data-sb-feedback="password_confirmation:required">Konfirmasi Password Baru</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection