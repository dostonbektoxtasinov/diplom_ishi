<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary">Klean</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="{{ route('index') }}" class="nav-item nav-link active">Bosh sahifa</a>
            <a href="{{ route('teachers') }}" class="nav-item nav-link">Xodimlar</a>
            <a href="{{ route('students_all') }}" class="nav-item nav-link">Talabalar</a>
            <a href="{{ route('about' )}}" class="nav-item nav-link">Maktab haqida</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Talaba qoshish</a>
        </div>
        <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a>
    </div>
</nav>