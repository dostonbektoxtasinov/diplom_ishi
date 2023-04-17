<x-layouts.header-footer>
    <x-slot:title>
        Maktab haqida
    </x-slot:title>

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
                                        <img class="img-fluid w-100" src="{{ asset('storage/' . $oqituvchilar->rasm) }}"
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
