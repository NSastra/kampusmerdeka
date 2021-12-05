<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Homepage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ url('assets3/assets/favicon.ico') }}" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ url('assets3/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Universitas Catur Insan Cendekia</a> <span class="navbar-brand"> SIDAFKAPUSKA </span>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        {{-- <li class="nav-item"><a class="nav-link" href="/admin/showlogin">Login Admin</a></li> --}}
                        <li class="nav-item"><a class="nav-link" href="/mahasiswa/showlogin">Login</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="/kaprodi/showlogin">Login Kaprodi</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Selamat Datang</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Untuk membaca informasi mengenai kampus merdeka beserta kegiatan apa saja yang ada di dalamnya silakan langsung klik tombol di bawah ini</p>
                        <a class="btn btn-primary btn-xl" href="#mbkm">Apa Itu Kampus Merdeka?</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- MBKM-->
        <section class="page-section bg-primary" id="mbkm">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Merdeka Belajar Kampus Merdeka</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Merdeka Belajar – Kampus Merdeka merupakan salah satu kebijakan dari       Menteri Pendidikan dan Kebudayaan, Nadiem Makariem. Salah satu program dari kebijakan Merdeka Belajar
                            – Kampus Merdeka adalah Hak Belajar Tiga Semester di Luar Program Studi. Program
                            tersebut merupakan amanah dari berbagai regulasi/landasan hukum pendidikan tinggi
                            dalam rangka peningkatan mutu pembelajaran dan lulusan pendidikan tinggi.</p>
                        <a class="btn btn-light btn-xl" href="/kegiatan/mbkm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Kegiatan-->
        <section class="page-section" id="kegiatan">
            <div class="container px-4 px-lg-5">
                <h3 class="text-center mt-0">Daftar Kegiatan Kampus Merdeka</h3>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-person fs-1 text-primary"></i></div>
                            <h3 class="h5 mb-2">Magang / Praktik Kerja</h3>
                            <a href="/kegiatan/magang" class="text-muted mb-0">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h5 mb-2">Studi Independen</h3>
                            <a href="/kegiatan/studi" class="text-muted mb-0">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h5 mb-2">Proyek Kemanusiaan</h3>
                            <a href="/kegiatan/kemanusiaan" class="text-muted mb-0">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-people fs-1 text-primary"></i></div>
                            <h3 class="h5 mb-2">KKN Tematik</h3>
                            <a href="/kegiatan/kkn" class="text-muted mb-0">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-search fs-1 text-primary"></i></div>
                            <h3 class="h5 mb-2">Penelitian</h3>
                            <a href="/kegiatan/penelitian" class="text-muted mb-0">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-book fs-1 text-primary"></i></div>
                            <h3 class="h5 mb-2">Asistensi Mengajar</h3>
                            <a href="/kegiatan/mengajar" class="text-muted mb-0">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-people fs-1 text-primary"></i></div>
                            <h3 class="h5 mb-2">Pertukaran Pelajar</h3>
                            <a href="/kegiatan/pertukaran" class="text-muted mb-0">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-cash fs-1 text-primary"></i></div>
                            <h3 class="h5 mb-2">Kewirausahaan</h3>
                            <a href="/kegiatan/wirausaha" class="text-muted mb-0">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action-->
       
        <!-- Contact-->
        @yield('content')
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Moch. Nurhidayat Sastra - Regia Marcellina Matakupan</div></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ url('assets3/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
