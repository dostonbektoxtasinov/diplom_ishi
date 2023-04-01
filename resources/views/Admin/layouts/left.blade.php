<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/004/553/651/small/template-logo-25-years-anniversary-illustration-free-vector.jpg"
            alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">25 -MAKTAB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin-img/img/PhotoRoom-20220623_170756.png" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Dostonbek To'xtasinov</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->
                <li class="nav-item"> {{-- <-- class ichida edi menu-open --}}
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-users nav-icon"></i>
                        <p>
                            Bosh sahifa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/BoshMaqol" class="nav-link">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>
                                    Bosh qism maqol
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/Forma" class="nav-link">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>
                                    Maktab formasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/oquvchilar" class="nav-link">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>O'quvchilar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/Xonalar" class="nav-link">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>O'quv xona</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/oqituvchi" class="nav-link">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>O'qituvchi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/biz_haqimizda" class="nav-link">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>Biz haqimizda</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"> {{-- <-- class ichida edi menu-open --}}
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-users nav-icon"></i>
                        <p>
                            O'quvchilar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/yigitlar" class="nav-link">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>Yigitlar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/qizlar" class="nav-link">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>Qizlar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Maktab haqida
                        </p>
                    </a>
                </li>
              
                <li class="nav-header">EXAMPLES</li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
