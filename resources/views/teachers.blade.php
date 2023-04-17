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
                {{-- <div class="col-12"> --}}
                    @foreach ($oqituvchilars as $oqituvchilar)
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="position-relative mb-4">
                                <img class="img-fluid rounded w-100" style="height: 250px;"
                                    src="{{ asset('storage/' . $oqituvchilar->rasm) }}" alt="">
                                <div class="blog-date">
                                    <h4 class="font-weight-bold mb-n1">01</h4>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <a class="text-secondary text-uppercase font-weight-medium" href="">25 -
                                    maktab</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-secondary text-uppercase font-weight-medium"
                                    href="">O'qituvchilar</a>
                            </div>
                            <h3 class="font-weight-medium mb-2">{{ $oqituvchilar->ism }}</h3>
                            <h5 class="mb-4">{{ $oqituvchilar->fan }}</h5>
                        </div>
                    @endforeach
                {{-- </div> --}}
            </div>
        </div>
    </div>
    <!-- Team End -->
</x-layouts.header-footer>
