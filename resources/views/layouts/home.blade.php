<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('title')">
    <meta name="keywords" content="@yield('title')">
    <meta name="author" content="@yield('title')">

    <title> @yield('title') </title>
    <link href="{{ asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/price-range.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/main.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('assets')}}/js/html5shiv.js"></script>
    <script src="{{ asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{ asset('assets')}}/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets')}}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets')}}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets')}}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets')}}/images/ico/apple-touch-icon-57-precomposed.png">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    @yield('css')
    @yield('headerjs')



</head><!--/head-->
<body>
@include('home._header')

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">

        </div>
    </div>
</section><!--slider-->
<section>
    <div class="container">
        <div class="row">


                @section('content')

                @show
            </div>
        </div>
    </div>
</section>



@include('home._footer')
@yield('footerjs')
</body>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="{{ asset('assets')}}/js/jquery.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{ asset('assets')}}/js/price-range.js"></script>
<script src="{{ asset('assets')}}/js/jquery.prettyPhoto.js"></script>
<script src="{{ asset('assets')}}/js/main.js"></script>
</html>
