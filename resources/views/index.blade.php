<x-layouts.header-footer>
    <x-slot:title>
        Bosh sahifa
    </x-slot:title>
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            @foreach ($posts as $post)
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
            @endforeach
            <div class="carousel-inner">
                @foreach ($posts as $post)
                    <div class="carousel-item active">
                        <img class="img-flui" src="{{ asset('storage/' . $post->rasm) }}" alt="Image">
                        <div class="carousel-caption d-flex align-items-center justify-content-center">
                            <div class="p-5" style="width: 100%; max-width: 900px;">
                                <h5 class="text-primary text-uppercase mb-md-3">25 - maktab</h5>
                                <h1 class="display-3 text-white mb-md-4" style="border-bottom: 5px #FFC600 dashed;">
                                    {{ $post->maqollar }}
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid pb-5 contact-info">
        <div class="row">
            @foreach ($bizlar as $biz)
                <div class="col-lg-4 p-0">
                    <div
                        class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                        <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                        <div class="">
                            <h5 class="mb-2">Bizning bino</h5>
                            <p class="m-0">{{ $biz->lokatsiya }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div
                        class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                        <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                        <div class="">
                            <h5 class="mb-2">Bizning email</h5>
                            <p class="m-0">{{ $biz->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div
                        class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                        <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                        <div class="">
                            <h5 class="mb-2">Telefon raqam</h5>
                            <p class="m-0">{{ $biz->nomer }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Contact Info End -->



    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3"
                        style="background-position: center;">
                        <i class="fa fa-5x fa-award tex t-primary mb-4"></i>

                        {{-- <h1 class="display-2 text-white mb-2" data-toggle="counter-up">1624</h1> --}}
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">{{ $oquvchi }}</h1>

                        <h2 class="text-white m-0 text-center">
                            Maktab o'quvchilari <br>
                            soni
                        </h2>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Welcome to 25 - school</h6>
                    <h1 class="mb-4 section-title">25 - Maktab</h1>
                    <h4 class="text-muted font-weight-normal mb-3">Maktab haqida qisqacha malumot</h4>
                    <p>
                        Nomi:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Andijon shahar 25-o`rta ta'lim maktabi <br>
                        Ta'lim <br> muassasasining turi: &nbsp;&nbsp;
                        Umumiy ta'lim muassasasi <br>
                        Xodimlar:
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $oqituvchi }} <br>
                        O'quvchilar:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $oquvchi }}
                    </p>
                    <div class="d-flex align-items-center pt-4">
                        <a href="" class="btn btn-primary mr-5">Batafsil</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        @foreach ($formas as $forma)
                            <div
                                class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                                <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                    25
                                </div>
                                <h5 class="font-weight-bold mb-4 px-4">{{ $forma->ism }}</h5>
                                <img src="{{ asset('storage/' . $forma->rasm) }}" style="width: 150px"
                                    alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- About school Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-3">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Makatabimizda</h6>
                    <h1 class="mb-4 section-title">25 - Maktab</h1>
                    <p class="mb-4">
                        Bizning maktab bir qancha chet mamlakatlari oqishlari bilan shartnomasi bo'lib
                        boshqa maktablar oldida shu bilan farq qiladi. O'quvchilar maktabni bitirgach chet
                        mamlakatlarida oqishni
                        imtixonsiz davom ettiradi. <br> Shu boisdan bizda...
                    </p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">{{ $oquvchi }}</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Umumiy</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">{{  $ayol }}</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Qizlar</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">{{ $erkak }}</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Yigitlar</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/25 - maktab-1 corusel.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About school End -->


    <!-- Portfolio Start -->
    <div class="container-fluid bg-portfolio py-5">
        <div class="container py-5">
            <div class="row m-0 portfolio-container">
                @foreach ($xonalar as $xona)
                    <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                        <div class="position-relative overflow-hidden">
                            <div class="portfolio-img">
                                <img class="img-fluid w-100" style=" height: 245px;"
                                    src="{{ asset('storage/' . $xona->rasm) }}" alt="">
                            </div>
                            <div class="portfolio-text bg-primary">
                                <h4 class="font-weight-bold mb-4">{{ $xona->hona_nomi }}</h4>
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
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- Portfolio End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Xodimlar</h6>
                    <h1 class="section-title mb-3">25 - Maktab</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">
                        Bizda o'qituvchilar nafaqat O'zbek o'qituvchilari balkim chet-eldan ham yetuk mutahasisslar
                        mavjud.
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel position-relative">
                        @foreach ($oqituvchilars as $oqituvchilar)
                            <div class="team d-flex flex-column text-center rounded overflow-hidden">
                                <div class="position-relative">
                                    <div class="team-img">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('storage/' . $oqituvchilar->rasm) }}"
                                            style="height: 350px;" alt="">
                                    </div>
                                    <div
                                        class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                        <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                                class="fab fa-telegram"></i></a>
                                        <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-secondary btn-social" href="#"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex flex-column bg-primary text-center py-4">
                                    <h5 class="font-weight-bold">{{ $oqituvchilar->ism }}</h5>
                                    <p class="text-white m-0">{{ $oqituvchilar->fan }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

</x-layouts.header-footer>
