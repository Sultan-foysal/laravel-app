<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from html.hixstudio.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 11:41:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shofy - Multipurpose eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/styles.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/flaticon_shofy.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/spacing.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/main.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<!-- pre loader area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <!-- loading content here -->
            <div class="tp-preloader-content">
                <div class="tp-preloader-logo">
                    <div class="tp-preloader-circle">
                        <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                            <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                        </svg>
                    </div>
                    <img src="{{asset('/')}}website/assets/img/logo/preloader/preloader-icon.svg" alt="">
                </div>
                <h3 class="tp-preloader-title">Shofy</h3>
                <p class="tp-preloader-subtitle">Loading</p>
            </div>
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
</div>
<!-- back to top end -->

@include('website.include.header')


@yield('body')


@include('website.include.footer')



<!-- JS here -->
<script src="{{asset('/')}}website/assets/js/vendor/jquery.js"></script>
<script src="{{asset('/')}}website/assets/js/vendor/waypoints.js"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap-bundle.js"></script>
<script src="{{asset('/')}}website/assets/js/meanmenu.js"></script>
<script src="{{asset('/')}}website/assets/js/swiper-bundle.js"></script>
<script src="{{asset('/')}}website/assets/js/slick.js"></script>
<script src="{{asset('/')}}website/assets/js/range-slider.js"></script>
<script src="{{asset('/')}}website/assets/js/magnific-popup.js"></script>
<script src="{{asset('/')}}website/assets/js/nice-select.js"></script>
<script src="{{asset('/')}}website/assets/js/purecounter.js"></script>
<script src="{{asset('/')}}website/assets/js/countdown.js"></script>
<script src="{{asset('/')}}website/assets/js/wow.js"></script>
<script src="{{asset('/')}}website/assets/js/isotope-pkgd.js"></script>
<script src="{{asset('/')}}website/assets/js/imagesloaded-pkgd.js"></script>
<script src="{{asset('/')}}website/assets/js/ajax-form.js"></script>
<script src="{{asset('/')}}website/assets/js/main.js"></script>
</body>

<!-- Mirrored from html.hixstudio.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 11:42:17 GMT -->
</html>
