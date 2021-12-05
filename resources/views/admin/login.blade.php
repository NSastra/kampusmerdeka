@extends('mahasiswa.loginlayout')

@section('title', 'Login Admin')

@section('content')

<section class="page-section" id="contact">
  <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 col-xl-6 text-center">
              <h2 class="mt-0">Form Login Admin</h2>
              <hr class="divider" />
              <p class="text-muted mb-5">Silakan lakukan proses login untuk bisa mengakses halaman dashboard admin</p>
          </div>
      </div>
      <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
          <div class="col-lg-6">
              <form action="/admin/login" method="post">
                @csrf
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
                      <div class="invalid-feedback" data-sb-feedback="password:required">A password number is required.</div>
                  </div>
                  <!-- Submit Button-->
                  <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Login</button></div>
              </form>
          </div>
      </div>
  </div>
</section>


@endsection