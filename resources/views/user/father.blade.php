<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>FITA TEST</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/public/asset_home') }}/img/fita.png" rel="icon">
    <link href="{{ asset('/public/asset_home') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/public/asset_home') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/public/asset_home') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/public/asset_home') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('/public/asset_home') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/public/asset_home') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/public/asset_home') }}/css/main.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VYKZSPPCRW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VYKZSPPCRW');
    </script>
    <!-- =======================================================
    * Template Name: QuickStart
    * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
    * Updated: May 04 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
{{-- header --}}
@include('user.layouts.headerlanding')


{{-- main menu --}}
@yield('main-content')


{{--footer  --}}
<footer id="footer" class="footer position-relative">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">FITA TEST</span>
                </a>

                <div class="social-links d-flex mt-4">
                    <a href="https://x.com/FitaTest2024" target="_blank"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/fitatest" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/fitatest" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Địa chỉ</h4>
                <ul>
                    <li><p>Học viện Nông nghiệp Việt Nam, Trâu Quỳ, Gia Lâm </p></li>
                    <li><p>Hà Nội, Việt Nam</p></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Phone</h4>
                <ul>
                    <li><span>+84 384 869 xxx</span></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Email</h4>
                <ul>
                    <li><span>fitatest@gmail.com</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">FITA TEST</strong><span>All Rights Reserved</span></p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://www.facebook.com/fitatest" target="_blank" >FITA TEST</a>
        </div>
    </div>

</footer>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<script src="{{ asset('/public/asset_home') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/public/asset_home') }}/vendor/php-email-form/validate.js"></script>
<script src="{{ asset('/public/asset_home') }}/vendor/aos/aos.js"></script>
<script src="{{ asset('/public/asset_home') }}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('/public/asset_home') }}/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="{{ asset('/public/asset_home') }}/js/main.js"></script>
</body>

</html>
