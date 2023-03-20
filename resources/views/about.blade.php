<x-layouts.header-footer>
    <x-slot:footer>
        Maktab haqida
    </x-slot:footer>

    <x-layouts.pages>
        Maktab haqida
    </x-layouts.pages>


    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3"
                        style="background-position: center;">
                        <i class="fa fa-5x fa-award tex t-primary mb-4"></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">1624</h1>
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
                        120 <br>
                        O'quvchilar:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        1624
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

    {{-- @extends('Admin.admin') --}}
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
                                <h1 class="text-secondary mb-2" data-toggle="counter-up">1624</h1>
                                <h6 class="font-weight-semi-bold mb-sm-4">Umumiy</h6>
                            </div>
                            <div class="col-sm-4">
                                <h1 class="text-secondary mb-2" data-toggle="counter-up">520</h1>
                                <h6 class="font-weight-semi-bold mb-sm-4">Qizlar</h6>
                            </div>
                            <div class="col-sm-4">
                                <h1 class="text-secondary mb-2" data-toggle="counter-up">1104</h1>
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
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/oqituvchi ingliz tili.jpg"
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
                                <h5 class="font-weight-bold">Sevara Xolmatova</h5>
                                <p class="text-white m-0">Ingliz tili</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/oqituvchi kimyo.jpg" style="height: 350px;"
                                        alt="">
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
                                <h5 class="font-weight-bold">Nigora Alijonova</h5>
                                <p class="text-white m-0">Kimyo </p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/oqituvchi matem.webp"
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
                                <h5 class="font-weight-bold">Feruza Yusupova</h5>
                                <p class="text-white m-0">Matematika</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/oqituvchi ona-tili.jpg"
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
                                <h5 class="font-weight-bold">Xilola Normatova</h5>
                                <p class="text-white m-0">Ona tili</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/oqituvchi professer.jpg"
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
                                <h5 class="font-weight-bold">John Omar</h5>
                                <p class="text-white m-0">Professor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

</x-layouts.header-footer>
