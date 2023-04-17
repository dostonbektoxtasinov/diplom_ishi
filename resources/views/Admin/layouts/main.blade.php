<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | 25 - Maktab</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href=" {{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" {{ asset('admin-plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <link rel="stylesheet" href=" {{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href=" {{ asset('admin-plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href=" {{ asset('admin-plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href=" {{ asset('admin-plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href=" {{ asset('admin-img/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href=" {{ asset('admin-plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href=" {{ asset('admin-plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href=" {{ asset('admin-plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/admin-img/img/PhotoRoom-20220623_170756.png" alt="AdminLTELogo"
                height="100" width="100" style="border-radius: 100%">
            <h4>
                <b>
                    DOSTONBEK
                    <br>
                    TO'XTASINOV
                </b>
            </h4>
        </div>



        @include('Admin.layouts.navbar')
        @include('Admin.layouts.left')

        <div class="content-wrapper">

            <section class="content">

                <div class="container-fluid">
                    @yield('content')
                </div>

                <div class="container-fluid">
                    @yield('Maqol')
                </div>

                <div class="container-fluid">
                    @yield('biz_haqimizda')
                </div>

                <div class="container-fluid">
                    @yield('Forma')
                </div>

                <div class="container-fluid">
                    @yield('oqituvchi')
                </div>

                <div class="container-fluid">
                    @yield('oquvchilar')
                </div>

                <div class="container-fluid">
                    @yield('Xonalar')
                </div>

                <div class="container-fluid">
                    @yield('yigitlar')
                </div>

                <div class="container-fluid">
                    @yield('qizlar')
                </div>

            </section>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin-plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin-plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src=" {{ asset('admin-plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src=" {{ asset('admin-plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src=" {{ asset('admin-plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src=" {{ asset('admin-plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src=" {{ asset('admin-plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src=" {{ asset('admin-plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangadmin-epicker -->
    <script src=" {{ asset('admin-plugins/moment/moment.min.js') }}"></script>
    <script src=" {{ asset('admin-plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src=" {{ asset('admin-plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src=" {{ asset('admin-plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src=" {{ asset('admin-plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src=" {{ asset('admin-img/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=" {{ asset('admin-img/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=" {{ asset('admin-img/js/pages/dashboard.js') }}"></script>
</body>

</html>
