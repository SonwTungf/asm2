<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin')</title>
    <!--  Fontawesome  -->
    <script src="https://kit.fontawesome.com/12ffb45aae.js" crossorigin="anonymous"></script>
    <!--  Remix Icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/fontawesome/css/all.min.css">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/chocolat/dist/css/chocolat.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}modules/dropzonejs/dropzone.css">
    <!--   Template CSS -->
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}css/style.css">
    <link rel="stylesheet" href="{{$_ENV['ASSETS_ADMIN']}}css/components.css">
</head>
<body>

<div class="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('layouts.navHeader')
        @include('layouts.navLeft')
        <div class="main-content">
            @yield('main')
        </div>
        @include('layouts.footer')
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/jquery.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/popper.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/tooltip.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/bootstrap/js/bootstrap.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/moment.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}js/stisla.js"></script>

<!-- JS Libraies -->
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/jquery.sparkline.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/chart.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/summernote/summernote-bs4.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/jquery-selectric/jquery.selectric.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/codemirror/lib/codemirror.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/codemirror/mode/javascript/javascript.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}modules/dropzonejs/min/dropzone.min.js"></script>

@yield('javascript')

<!-- Template JS File -->
<script src="{{$_ENV['ASSETS_ADMIN']}}js/scripts.js"></script>
<script src="{{$_ENV['ASSETS_ADMIN']}}js/custom.js"></script>
</body>
</html>