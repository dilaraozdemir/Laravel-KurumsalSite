<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('assets')}}/admin/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{ asset('assets')}}/admin/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Open+Sans:300,400,600,700"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../assets/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/css/azzara.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/css/demo.css">
    @yield('css')
    @yield('javascript')
</head>
<body>
    <div class="wrapper">
        @include('admin._header')
        @include('admin._sidebar')
        @section('content')
        @show

    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('assets')}}/admin/js/core/jquery.3.2.1.min.js"></script>
<script src="{{ asset('assets')}}/admin/js/core/popper.min.js"></script>
<script src="{{ asset('assets')}}/admin/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="{{ asset('assets')}}/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="{{ asset('assets')}}/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('assets')}}/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="{{ asset('assets')}}/admin/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="{{ asset('assets')}}/admin/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('assets')}}/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="{{ asset('assets')}}/admin/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="{{ asset('assets')}}/admin/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('assets')}}/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="{{ asset('assets')}}/admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="{{ asset('assets')}}/admin/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('assets')}}/admin/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="{{ asset('assets')}}/admin/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="{{ asset('assets')}}/admin/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="{{ asset('assets')}}/admin/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets')}}/admin/js/setting-demo.js"></script>
<script src="{{ asset('assets')}}/admin/js/demo.js"></script>

</html>
