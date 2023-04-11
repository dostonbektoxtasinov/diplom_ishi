<x-layouts.header-footer>
    <x-slot:title>
        Bosh sahifa
    </x-slot:title>
    <!-- Carousel Start -->
    {{-- @section('Maqol')
        @foreach ($posts as $post) --}}
            <div class="container-fluid p-0">
                <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        {{-- <div class="carousel-item active">
                            <img class="img-flui" src="img/25 - maktab-1 corusel.jpg" alt="Image">
                            <div class="carousel-caption d-flex align-items-center justify-content-center">
                                <div class="p-5" style="width: 100%; max-width: 900px;">
                                    <h5 class="text-primary text-uppercase mb-md-3">25 - maktab</h5>
                                    <h1 class="display-3 text-white mb-md-4" style="border-bottom: 5px #FFC600 dashed;">
                                        {{ $post->maqollar }}
                                    </h1>
                                </div>
                            </div>
                        </div> --}}
                        <div class="carousel-item active">
                            <img class="img-flui" src="img/25 - maktab-1 corusel.jpg" alt="Image">
                            <div class="carousel-caption d-flex align-items-center justify-content-center">
                                <div class="p-5" style="width: 100%; max-width: 900px;">
                                    <h5 class="text-primary text-uppercase mb-md-3">25 - maktab</h5>
                                    <h1 class="display-3 text-white mb-md-4" style="border-bottom: 5px #FFC600 dashed;">
                                        Yoshlikda olingan bilim-toshga o'yilgan naqishdir.
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-flui" src="img/25 - maktab-2 corusel.jpg" alt="Image">
                            <div class="carousel-caption d-flex align-items-center justify-content-center">
                                <div class="p-5" style="width: 100%; max-width: 900px;">
                                    <h5 class="text-primary text-uppercase mb-md-3">25 - maktab</h5>
                                    <h1 class="display-3 text-white mb-md-4" style="border-bottom: 5px #FFC600 dashed;">
                                        Ta'limsiz odam-ruhsiz tanadir.</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-flui" src="img/25 - maktab-3 corusel.jpg" alt="Image">
                            <div class="carousel-caption d-flex align-items-center justify-content-center">
                                <div class="p-5" style="width: 100%; max-width: 900px;">
                                    <h5 class="text-primary text-uppercase mb-md-3">25 - maktab</h5>
                                    <h1 class="display-3 text-white mb-md-4" style="border-bottom: 5px #FFC600 dashed;">
                                        Yaxshi
                                        misol-yaxshi so'zdan yaxshiroqdir</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- @endforeach
    @endsection --}}

    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid pb-5 contact-info">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div
                    class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Bizning bino</h5>
                        <p class="m-0">123-uy Ko'cha, Boburshox, Andijon</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div
                    class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Bizning email</h5>
                        <p class="m-0">maktab25@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div
                    class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Telefon raqam</h5>
                        <p class="m-0">+998 99 909 92 66</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <x-layouts.about.about>

    </x-layouts.about.about>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid bg-service py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Formalar</h6>
                    <h1 class="mb-4 section-title text-white">Maktab formasi</h1>
                    <p class="text-white">
                        Bu yerda siz maktab formalari bilan tanishasiz. Bu yerda <br>
                        Xodimlar va O'quvchilar formalari mavjud hamda formalarimiz
                        ixtiyoriy tanlanadi va kiyiladi.
                    </p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">Batafsil</a>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div
                            class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">

                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">Qizlar va Bolalar</h5>
                            <img src="img/maktab formasi aralash.jpg" alt="">
                        </div>
                        <div
                            class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">

                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">Qizlar va Bolalar</h5>
                            <img src="img/maktab formasi o'qiyuvchilar.jpg" style="height: 170px;" alt="">
                        </div>
                        <div
                            class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">

                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">Qizlar</h5>
                            <img src="img/maktab formasi qizlar.webp" style="height: 170px;" alt="">
                        </div>
                        <div
                            class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">

                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">Bolalar</h5>
                            <img src="img/maktab formasi bolalar.jpg" style="height: 170px;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <x-layouts.about.about-school>

    </x-layouts.about.about-school>
    <!-- Features End -->


    <!-- Portfolio Start -->
    <div class="container-fluid bg-portfolio py-5">
        <div class="container py-5">
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" style=" height: 245px;" src="img/dars-hona-1.jpg"
                                alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Boshlang'ich sinflar</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/dars-hona-1.jpg"
                                    data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/dars-hona-2.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Katta sinflar</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/dars-hona-2.jpg"
                                    data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/dars-hona-3.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Katta sinflar</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/dars-hona-3.jpg"
                                    data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/dars-hona-4.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Kompyuter yonalishi</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/dars-hona-4.jpg"
                                    data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" style="height: 245px;" src="img/dars-hona-5.jpg"
                                alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Katta sinflar</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/dars-hona-5.jpg"
                                    data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/dars-hona-6.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">IT yo'nalishi</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/dars-hona-6.jpg"
                                    data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Portfolio End -->


    <!-- Team Start -->
    <x-layouts.about.about-team>

    </x-layouts.about.about-team>
    <!-- Team End -->

</x-layouts.header-footer>
