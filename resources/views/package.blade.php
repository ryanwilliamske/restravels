<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aspera Tours - Package</title>
    <link rel="icon" href="{{ asset('img/Fevicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flat-icon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a href="index.html"><h1>Aspera Tours</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        {{--                        <li class="nav-item"><a class="nav-link" href="">biaz a</a></li>--}}
                        {{--                        <li class="nav-item"><a class="nav-link" href="">biaz b</a></li>--}}
                        <li class="nav-item active"><a class="nav-link" href="package.html">Packages</a>


                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>

                    <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                        {{--                        <a class="button" href="#">Get Started</a>--}}
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->



<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
        <div class="hero-banner-sm-content">
            <h1>Packages</h1>
            <p>Best value for money packages tailor made by Aspera tours to its clients</p>
        </div>
    </div>
</section>
<!--================Hero Banner SM Area End =================-->




<!--================Tour section Start =================-->
<section class="section-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tour-card">
                    {{--                    <link rel="icon" href="{{ asset('img/Fevicon.png') }}" type="image/png">--}}
                    <a href="/Packages/nairobi">
                        <img class="card-img rounded-0" src="{{ asset('img/home/tour1.png') }}" alt="">
                    </a>
                    <div class="tour-card-overlay">
                        <div class="media">
                            <div class="media-body">
                                <h4>Nairobi offer</h4>
                                <small>5 days offer</small>
                                <p>We properly guide our tourist</p>
                            </div>
                            <div class="media-price">
                                <h4 class="text-primary">KES 6500/day</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="tour-content">
                            <h2>We offer worldwide tour plan</h2>
                            <p>You are assured of a courteous and friendly service</p>
                        </div>
                    </div>
                </div>

                <div class="tour-card">
                    <a href="/Packages/mombasa">
                        <img class="card-img rounded-0" src="{{ asset('img/home/tour2.png') }}" alt="">
                    </a>
                    <div class="tour-card-overlay">
                        <div class="media">
                            <div class="media-body">
                                <h4>Mombasa offer</h4>
                                <small>5 days offer</small>
                                <p>We properly guide our tourist</p>
                            </div>
                            <div class="media-price">
                                <h4 class="text-primary">KES 6500/day</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-7">
                <div class="tour-card">
                    <a href="/Packages/nakuru">
                        <img class="card-img rounded-0" src="{{ asset('img/home/tour3.png') }}" alt="">
                    </a>
                    <div class="tour-card-overlay">
                        <div class="media">
                            <div class="media-body">
                                <h4>Nakuru offer</h4>
                                <small>5 days offer</small>
                                <p>We properly guide our tourist</p>
                            </div>
                            <div class="media-price">
                                <h4 class="text-primary">KES 6500/day</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="tour-card">
                    <a href="/Packages/kisumu">
                        <img class="card-img rounded-0" src="{{ asset('img/home/tour4.png') }}" alt="">
                    </a>
                    <div class="tour-card-overlay">
                        <div class="media">
                            <div class="media-body">
                                <h4>Kisumu offer</h4>
                                <small>5 days offer</small>
                                <p>We properly guide our tourist</p>
                            </div>
                            <div class="media-price">
                                <h4 class="text-primary">KES 6500/day</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Tour section End =================-->










<!-- ================ start footer Area ================= -->
{{--<footer class="footer-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-3  col-md-6 col-sm-6">--}}
{{--                <div class="single-footer-widget">--}}
{{--                    <h6>About Agency</h6>--}}
{{--                    <p>--}}
{{--                        The world has become so fast paced that people don’t want to stand by reading a page of information to be  they would much rather look at a presentation and understand--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                <div class="single-footer-widget">--}}
{{--                    <h6>Navigation Links</h6>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Home</a></li>--}}
{{--                                <li><a href="#">Feature</a></li>--}}
{{--                                <li><a href="#">Services</a></li>--}}
{{--                                <li><a href="#">Portfolio</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3  col-md-6 col-sm-6">--}}
{{--                <div class="single-footer-widget">--}}
{{--                    <h6>Newsletter</h6>--}}
{{--                    <p>--}}
{{--                        For business professionals caught between high OEM price and mediocre print and graphic output.--}}
{{--                    </p>--}}
{{--                    <div id="mc_embed_signup">--}}
{{--                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">--}}
{{--                            <div class="input-group d-flex flex-row">--}}
{{--                                <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">--}}
{{--                                <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>--}}
{{--                            </div>--}}
{{--                            <div class="mt-10 info"></div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3  col-md-6 col-sm-6">--}}
{{--                <div class="single-footer-widget mail-chimp">--}}
{{--                    <h6 class="mb-20">InstaFeed</h6>--}}
{{--                    <ul class="instafeed d-flex flex-wrap">--}}
{{--                        <li><img src="img/instagram/i1.jpg" alt=""></li>--}}
{{--                        <li><img src="img/instagram/i2.jpg" alt=""></li>--}}
{{--                        <li><img src="img/instagram/i3.jpg" alt=""></li>--}}
{{--                        <li><img src="img/instagram/i4.jpg" alt=""></li>--}}
{{--                        <li><img src="img/instagram/i5.jpg" alt=""></li>--}}
{{--                        <li><img src="img/instagram/i6.jpg" alt=""></li>--}}
{{--                        <li><img src="img/instagram/i7.jpg" alt=""></li>--}}
{{--                        <li><img src="img/instagram/i8.jpg" alt=""></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="footer-bottom">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">--}}
{{--                    <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                    <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                    <a href="#"><i class="fab fa-dribbble"></i></a>--}}
{{--                    <a href="#"><i class="fab fa-behance"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
{{--<!-- ================ End footer Area ================= -->--}}




<script src="{{ asset('vendors/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendors/Magnific-Popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendors/nice-select/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/skrollr.min.js') }}"></script>
<!-- <script src="{{ asset('js/countdown.js') }}"></script> -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
