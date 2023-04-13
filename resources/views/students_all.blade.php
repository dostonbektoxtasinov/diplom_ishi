<x-layouts.header-footer>
    <x-slot:title>
        Umumiy Talabalar
    </x-slot:title>


    <x-layouts.pages>
        Talabalar
    </x-layouts.pages>


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">25 - Maktab</h6>
                    <h1 class="section-title mb-3">25 - Maktab o'g'il bolalar</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3 h1">
                        Yoshlikda olingan bilim-toshga o'yilgan naqishdir.
                    </h4>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100" style="height: 250px;" src="{{ asset('storage/' . $post->rasm) }}"
                                alt="">
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                        </div>
                        <h3 class="font-weight-medium mb-2">{{ $post->ism_fam }}</h3>
                        <h5 class="mb-4">{{ $post->sinfi }}</h5>
                    </div>
                @endforeach
            </div>
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg justify-content-center mb-0">
                        {{ $posts->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    </x-layouts>
