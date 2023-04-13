<x-layouts.header-footer>
    <x-slot:title>
        Xodimlar
    </x-slot:title>


    <x-layouts.pages>
        Xodimlar
    </x-layouts.pages>


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
                                        <img class="img-fluid w-100" src="{{ asset('storage/'.$oqituvchilar->rasm) }}"
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
