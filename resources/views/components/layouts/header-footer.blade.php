<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Bosh sahifa' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    {{-- <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href=""
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h3 class="m-0 display-3 text-primary text-center">
                        25 <br> Maktab
                    </h3>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>maktab25@gmail.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+998 99 909 92 66</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-telegram"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <x-layouts.nav>

                    </x-layouts>
            </div>
        </div>
    </div>
    <!-- Header End -->

    {{ $slot }}


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="#" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-primary text-center">
                        25
                        <br>
                        Maktab
                    </h1>
                </a>
                <p>Biz haqimizda</p>
                {{-- <h5 class="font-weight-semi-bold text-white mb-2">Dars vaqtlarimiz:</h5>
                @foreach ($bizlar as $biz)
                    <p class="mb-1">Ertalab: &nbsp; {{ $biz->dars_ertalab }}</p>
                    <p class="mb-0">Kechki: &nbsp; {{ $biz->dars_kech }}</p>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Bizning manzil:</h4>
                @foreach ($bizlar as $biz)
                    <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $biz->lokatsiya }}</p>
                    <p><i class="fa fa-phone-alt text-primary mr-2"></i>{{ $biz->nomer }}</p>
                    <p><i class="fa fa-envelope text-primary mr-2"></i>{{ $biz->email }}</p>
                @endforeach --}}
                <p class="mb-1">Ertalab: &nbsp; 08 : 30 - 13 : 00</p>
                <p class="mb-0">Kechki: &nbsp; 13 : 00 - 18 : 00</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Bizning manzil:</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>123-uy Ko'cha, Andijon, Boburshox</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+998 99 909 92 66</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>maktab25@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-telegram"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Menyu qismi:</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="{{ route('index') }}"><i class="fa fa-angle-right mr-2"></i>
                        Bosh sahifa
                    </a>
                    <a href="{{ route('teachers') }}" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>
                        Xodimlar
                    </a>
                    <a href="{{ route('students_all') }}" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>
                        Talabalar
                    </a>
                    <a href="{{ route('about') }}" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>
                        Maktab haqida
                    </a>
                    <a href="{{ route('contact') }}" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>
                        Talaba qoshish
                    </a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Email Jonatish:</h4>
                <p>
                    Agar sizda ushbu maktabda o'qish istagi bolsa yokida qoshimcha fikr mulohazalar
                    bolsa ushbu <a href="#"><u>Email</u></a> orqali bizga aloqaga chiqishingiz mumkin.
                </p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;"
                            placeholder="Emailingiz">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Jo'natish</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Your Site Name</a>. All Rights Reserved. Designed
                    by <a href="">HTML Codex</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
