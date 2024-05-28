<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{$_ENV['ASSETS_CLIENT']}}img/favicon.ico">
    <title>@yield('title') - Tin Tức</title>

    <!-- CSS here -->
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/ticker-style.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/flaticon.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/slicknav.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/animate.min.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/magnific-popup.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/themify-icons.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/slick.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/nice-select.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_CLIENT']}}css/style.css">
</head>
<body>
@include('layouts.loader')
@include('layouts.header')
@yield('content')
@include('layouts.footer')
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>


<script src="{{$_ENV['ASSETS_CLIENT']}}js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{$_ENV['ASSETS_CLIENT']}}js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/popper.min.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="{{$_ENV['ASSETS_CLIENT']}}js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{$_ENV['ASSETS_CLIENT']}}js/owl.carousel.min.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/slick.min.js"></script>
<!-- Date Picker -->
<script src="{{$_ENV['ASSETS_CLIENT']}}js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{$_ENV['ASSETS_CLIENT']}}js/wow.min.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/animated.headline.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{$_ENV['ASSETS_CLIENT']}}js/jquery.scrollUp.min.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/jquery.nice-select.min.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="{{$_ENV['ASSETS_CLIENT']}}js/contact.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/jquery.form.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/jquery.validate.min.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/mail-script.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{$_ENV['ASSETS_CLIENT']}}js/plugins.js"></script>
<script src="{{$_ENV['ASSETS_CLIENT']}}js/main.js"></script>

</body>
</html>
