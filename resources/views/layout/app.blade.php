<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Electrogenesis - {{$pageTitle??'Home.'}}</title>

    <meta name="description" content="We carter for businesses with ICT & Telecommunication needs, clean Power Solutions, Renewable Smart Energy, Lighting, Healthcare and Education">
    <meta name="keywords" content="ICT, Telecommunication, Business, Clean Power Solutions, Renewable Energy, Smart Energy, Lighting, Healthcare, Education.">
    <meta name="author" content="Your Name">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Electrogenesis">
    <meta property="og:description" content="We carter for businesses with ICT & Telecommunication needs, clean Power Solutions, Renewable Smart Energy, Lighting, Healthcare and Education">
    <meta property="og:image" content="{{asset('/')}}assets/images/og_image.png"> <!-- URL to your image -->
    <meta property="og:url" content="https://www.electrogenesis.org">
    <meta property="og:type" content="website">

    <!-- Second Image for other platforms (Dimensions: 600x315 pixels) -->
    <meta property="og:image" content="{{asset('/')}}assets/images/og_image600315.png">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">

    <!-- Fallback Image for general sharing (Dimensions: 300x300 pixels) -->
    <meta property="og:image" content="{{asset('/')}}assets/images/og_image300300.png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">

<!-- Stylesheets -->
<link href="{{asset('/')}}assets/css/bootstrap.css" rel="stylesheet">
<link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="{{asset('/')}}assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="{{asset('/')}}assets/css/color.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('/')}}assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{asset('/')}}assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <header class="main-header header-style-six">

        <div class="header-upper">
            <div class="auto-container full-width pl_xxl_220">
                <div class="inner-container d-flex align-items-center justify-content-between">
                    <div class="logo-box">
                        <div class="logo"><a href="index"><img src="{{asset('/')}}assets/images/logo-light.png" alt=""></a></div>
                    </div>
                    <div class="right-column d-flex align-items-center">
                        <div class="nav-outer">
                            <div class="mobile-nav-toggler"><img src="{{asset('/')}}assets/images/icons/menu.svg" alt=""></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class=""><a href="/">Home</a>

                                        </li>
                                        <li><a href="/about-us">About</a></li>
                                        <li class=""><a href="/services">Services</a>

                                        </li>
                                        <li class=""><a href="/projects">Projects</a>

                                        </li>

                                        <!-- <li class=""><a href="#">Blog</a>

                                        </li> -->
                                        <li><a href="/contact-us">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <button type="button" class="theme-btn search-toggler ml_30"><i class="flaticon-magnifiying-glass"></i></button>
                        <div class="contact-info-box2 d-xl-flex align-items-center d-none ml_40 pl_30 pr_30 pt_20 pb_25">
                            <img class="mr_20 mt_5" src="{{asset('/')}}assets/images/icons/icon-phone4.png" alt="">
                            <p class="c_light mb_0 fs_20 lh_20"> <a class="fs_20 fw_sbold" href="tel:+ 234 9 870 94 33">+ 234 9 870 94 33</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header dark-bg">
            <div class="header-upper">
                <div class="auto-container full-width pl_xxl_220">
                    <div class="inner-container d-flex align-items-center justify-content-between">
                        <div class="logo-box">
                            <div class="logo"><a href="index"><img src="{{asset('/')}}assets/images/logo-light.png" alt=""></a></div>
                        </div>
                        <div class="right-column d-flex align-items-center">
                            <div class="nav-outer">
                                <div class="mobile-nav-toggler"><img src="{{asset('/')}}assets/images/icons/menu.svg" alt=""></div>
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                            <button type="button" class="theme-btn search-toggler ml_30"><i class="flaticon-magnifiying-glass"></i></button>
                            <div class="contact-info-box2 d-xl-flex align-items-center d-none ml_40 pl_30 pr_30 pt_20 pb_25">
                                <img class="mr_20 mt_5" src="{{asset('/')}}assets/images/icons/icon-phone4.png" alt="">
                                <p class="c_light mb_0 fs_20 lh_20"> <a class="fs_20 fw_sbold" href="tel:+ 234 9 870 94 33">+ 234 9 870 94 33</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="fal fa-times"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index"><img src="{{asset('/')}}assets/images/logo-light.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div>

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="hidden-sidebar-close"><span class="fal fa-times"></span></div>
            <div class="logo"><a href="#"><img src="{{asset('/')}}assets/images/logo.png" alt=""></a></div>
            <div class="content">
                <div class="about-widget-two sidebar-widget">
                    <h3>Finding The Best  <br>
                        Construction Services </h3>
                    <div class="text">We denounce with righteous indignation and dislike men who we are to beguiled demoralized by the charms of pleasures that moment, so we blinded desires, that they indignations.</div>
                </div>
                <!-- Contact Widget -->
                <div class="sidebar-contact-info mb_40">
                    <h4 class="fs_22 fw_medium mb_20">Conatct Us</h4>
                    <ul>
                        <li>
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{asset('/')}}assets/images/icons/icon-7__mapmarker.png" alt="">
                                </div>
                                <div class="text">
                                    <p>54B, Tailstoi Town 5238 MT,<br> La city, IA 522364</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{asset('/')}}assets/images/icons/icon-8__envelop.png" alt="">
                                </div>
                                <div class="text">
                                    <p><a href="mailto:info@example.com">contact@buildnox.com</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{asset('/')}}assets/images/icons/icon-9__phone.png" alt="">
                                </div>
                                <div class="text">
                                    <p><a href="tel:+8801682648101">+1800 456 7890</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{asset('/')}}assets/images/icons/icon-10__clock.png" alt="">
                                </div>
                                <div class="text">
                                    <p>Working Hrs : 9.30am to 6.30pm</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Newsletter Widget -->
                <div class="newsletter-widget">
                    <h4 class="fs_22 fw_medium mb_20">Newsletter Subscription</h4>
                    <form action="#">
                        <input type="email" placeholder="Enter Email Address">
                        <button class="btn-1 pt_18 pb_15 pl_30 pr_30 ff_sec fw_bold tt_u fs_14 ls_1">Subscribe Us <i class="flaticon-right-arrow-1"></i><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fal fa-times"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="https://www.designarc.biz/demos/buildnox/index">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="banner-1-section banner-section bg_dark5 overflow-hidden">
        <h1 class="banner-1-side-text text_stroke">Green Energy</h1>

        <div class="swiper-container banner-slider-2">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide">
                    <div class="bnox_76 p_absolute l_0 l_xxl_220 t_110 r_0 b_0 bg_cover" style="background-position: center center; background-image: url(assets/images/main-slider/banner-6.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box p_inherit pt_330 pb_200">
                            <div class="inner">
                                <h1 class="c_light mb_30 fw_black fs_70">Telecom Excellence, <br> Unmatched Connectivity </h1>
                                <p class="mb_40 fs_22 c_light">Empower your business with cutting-edge Telephone Systems, <br> PABX, Call Centers & Recorders, and unparalleled LAN/WAN networking.<br> Elevate your communication game.</p>
                                <div class="link-box tt_u pr_font fs_14"><a href="/contact-us" class="btn-1 pt_18 pb_15 pl_30 pr_30 b_radius_5 ff_sec fw_bold tt_u fs_14 ls_1">Book Appointment <i class="flaticon-fast-forward"></i> <span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide">
                    <div class="bnox_76 p_absolute l_0 l_xxl_220 t_110 r_0 b_0 bg_cover" style="background-position: center center; background-image: url(assets/images/main-slider/banner-9.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box p_inherit pt_330 pb_200">
                            <div class="inner">
                                <h1 class="c_light mb_30 fw_black fs_70" >Solar Smart <br> Living Solutions </h1>
                                <p class="mb_40 fs_22 c_light">
                                    Experience the future with solar-powered systems <br> and state-of-the-art smart home devices. <br> Embrace sustainable living with innovation at your fingertips.
                                </p>
                                <div class="link-box tt_u pr_font fs_14"><a href="/contact-us" class="btn-1 pt_18 pb_15 pl_30 pr_30 b_radius_5 ff_sec fw_bold tt_u fs_14 ls_1">Book Appointment <i class="flaticon-fast-forward"></i> <span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide">
                    <div class="bnox_76 p_absolute l_0 l_xxl_220 t_110 r_0 b_0 bg_cover" style="background-position: center center; background-image: url(assets/images/main-slider/banner-10.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box p_inherit pt_330 pb_200">
                            <div class="inner">
                                <h1 class="c_light mb_30 fw_black fs_70">Solar Engineering <br> Consultancy & Training</h1>
                                <p class="mb_40 fs_22 c_light">
                                    Empowering progress through expert engineering services. <br> Illuminate your path with tailored solar training and consultancy.
                                </p>
                                <div class="link-box tt_u pr_font fs_14"><a href="/contact-us" class="btn-1 pt_18 pb_15 pl_30 pr_30 b_radius_5 ff_sec fw_bold tt_u fs_14 ls_1">Book Appointment <i class="flaticon-fast-forward"></i> <span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-nav">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="flaticon-left-arrow-line-symbol"></i></span></div>
            <div class="banner-slider-control banner-slider-button-next"><span><i class="flaticon-right-arrow-angle"></i></span> </div>
        </div>
    </section>

    <!-- About -->
    <section class="pt_160 pb_90 bg_dark5">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="ml_xxl__155 mr_xxl__18">
                        <div class="row row-20 align-items-end">
                            <div class="col-6">
                                <div class="image mb_30"><img src="{{asset('/')}}assets/images/resource/image-17.jpg" alt=""></div>
                            </div>
                            <div class="col-6">
                                <div class="image mb_30"><img src="{{asset('/')}}assets/images/resource/image-18.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="p_relative ml_xxl_70">
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Welcome to Electrogenesis</h6>
                        <h2 class="fs_45 fw_black mb_30 c_light">Who we are </h2>
                        <h4 class="fs_20 mb_20 c_light">Our Mission</h4>
                        <p class="mb_30 fs_18 c_light">
                            To be an organization that functions with sound business anatomy in the fear of GOD, and stand firm like the oak tree at all times
                        </p>
                        <h4 class="fs_20 mb_20 c_light">Our Vision</h4>
                        <p class="mb_30 fs_18 c_light">

                            To advocate love and peace in business deals through our technology offerings <br>
                            To generate wealth in our country through job creation & good employment


                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-1 c_light fs_20 fw_medium mb_30">
                                    <li><i class="flaticon-comment"></i>100% Satisfaction</li>
                                    <li><i class="flaticon-comment"></i>Flexible and Cost-Effective</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-1 c_light fs_20 fw_medium mb_30">
                                    <li><i class="flaticon-comment"></i>Annual Pass Programs</li>
                                    <li><i class="flaticon-comment"></i>Trained Emploies</li>
                                </ul>
                            </div>
                        </div>
                        <div class="author-box d-flex align-items-center ">
                            <div class="image mb_20 mr_25 d-none"><img class="b_radius_50" src="{{asset('/')}}assets/images/resource/author-6.jpg" alt=""></div>
                            <div class="mb_25 mr_40">
                                <p class="c_light mb_0 fs_20 lh_30"><span class="fs_18 fw_medium">Call Us</span> <br> <a class="fs_20 fw_sbold" href="tel:+ 234 9 870 94 33">+ 234 9 870 94 33</a></p>
                            </div>
                            <div class="signature mb_20 mt_15"><img src="{{asset('/')}}assets/images/resource/signature5.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="pb_90 pt_100">
        <div class="auto-container">
            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>What we do</h6>
            <h2 class="fw_black fs_45 mb_20">Services We Provide</h2>
            <p class="mb_50 fs_18">
                With the expertise of a team of experienced professionals, Electrogenesis provides your business ICT & Telecommunication needs, clean Power Solutions, Renewable Smart Energy, Lighting, Healthcare and Education.
            </p>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon">
                            {{-- <i class="flaticon-construction"></i> --}}
                        </div>
                        <h4 class="service-1-title fs_25">Energy<br>
                            <span class="fw_normal">Solar Systems</span></h4>
                        <div class="service-1-image">
                            <img src="assets/images/resource/service-1.jpg" alt="">
                            <div class="service-1-read-more"><a href="service-details.html" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">Read More <i class="ml_7 fs_17 v_middle flaticon-fast-forward"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon">
                            {{-- <i class="flaticon-sketch"></i> --}}
                        </div>
                        <h4 class="service-1-title fs_25">ICT <br>
                            <span class="fw_normal">Telecoms.</span></h4>
                        <div class="service-1-image">
                            <img src="assets/images/resource/image-26.jpg" alt="">
                            <div class="service-1-read-more"><a href="service-details.html" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">Read More <i class="ml_7 fs_17 v_middle flaticon-fast-forward"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon">
                            {{-- <i class="flaticon-renovation"></i> --}}
                        </div>
                        <h4 class="service-1-title fs_25">Engineering <br>
                            <span class="fw_normal">Services</span></h4>
                        <div class="service-1-image">
                            <img src="assets/images/resource/image-27.jpg" alt="">
                            <div class="service-1-read-more"><a href="service-details.html" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">Read More <i class="ml_7 fs_17 v_middle flaticon-fast-forward"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon">
                            {{-- <i class="flaticon-roof"></i> --}}
                        </div>
                        <h4 class="service-1-title fs_25">Education <br>
                            <span class="fw_normal">Consultancy</span></h4>
                        <div class="service-1-image">
                            <img src="assets/images/resource/image-28.jpg" alt="">
                            <div class="service-1-read-more"><a href="service-details.html" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">Read More <i class="ml_7 fs_17 v_middle flaticon-fast-forward"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- project -->
    <section class="pt_120 pb_120 bg_dark">
        <div class="auto-container">
            <div class="text-center">
                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>OUr recent work <span class="w_30 h_2 theme-bg ml_10 d_iblock v_middle"></span></h6>
                <h2 class="c_light fs_45 fw_black mb_60">Our Featured Projects</h2>
            </div>
        </div>
        <div class="auto-container mw_xxl_1510">
            <div class="swiper-container four-item-carousel">
                <div class="swiper-wrapper">
                    <!-- Slide Item -->
                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-5.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-5.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">Solar Project</p>
                                    <h4 class="project-1-title">Street Lighting, Building Electrical Wiring& Fitting, Building Earthing& Lightening Protection

                                        </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide Item -->
                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-6.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-6.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">ICT Infrastructure
                                        </p>
                                    <h4 class="project-1-title">
                                        IPPBX range of Hybrid and IP – Alcatel Lucent, Panasonic,  Ericsson, NEC Philips,
                                        LAN / WAN – Cisco, Juniper, Alcatel,
                                        Audio /Video Conferencing – Polycom,
                                        Headsets – Plantronics,
                                        Mobile DECT phones – Alcatel Lucent,
                                        Call Centers & Recorders,
                                        Billing systems

                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide Item -->
                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-7.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-7.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">BTS Base Stations</p>
                                    <h4 class="project-1-title">BTS Site Build,
                                        BTS Maintenance
                                        </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide Item -->
                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-8.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-8.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">Security & Surveillance</p>
                                    <h4 class="project-1-title">
                                        CCTV,
                                        Access Control,
                                        Metal Detectors,
                                        Electronic Gadgets
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-9.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-9.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">
                                        Video Matrix Billboards
                                        </p>
                                    <h4 class="project-1-title">
                                        Stadium Sports Scoreboards,
                                        Advertising Billboards,
                                        Indoor LED displays,
                                        Neon Signage

                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-10.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-10.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">
                                        Poles & Masts Tools
                                        </p>
                                    <h4 class="project-1-title">
                                        Street Light Galvanized Steel Poles,
                                        Floodlight Poles,
                                        Communication Masts,
                                        Metal Constructions,
                                        Designs

                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-11.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-11.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">
                                        Medical Supplies
                                        </p>
                                    <h4 class="project-1-title">
                                        Medical Equipment,
                                        Healthcare Advocacy,
                                        Medical gases,
                                        Medical Resources – manpower, journals, events


                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-12.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-12.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">
                                        Smart Energy Solutions
                                        </p>
                                    <h4 class="project-1-title">
                                        Energy Storage Systems,
                                        Building Management Systems,
                                        Public Light Management Solutions,
                                        Stable Energy Supply,
                                        Electric Vehicle (EV) Charging Infrastructure,
                                        Smart Houses,
                                        Smart Buildings,
                                        Solutions for Utility Companies



                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-13.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-13.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">
                                        Educational Technology  Supplies
                                        </p>
                                    <h4 class="project-1-title">
                                        Interactive White Boards,
                                        School Management Systems,
                                        Teaching Aids,
                                        Educational Community Resources – manpower, journals, excursions




                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-1-block">
                            <div class="project-1-image">
                                <img src="{{asset('/')}}assets/images/gallery/gallery-14.jpg" alt="">
                                <div class="project-1-overlay">
                                    <a href="{{asset('/')}}assets/images/gallery/gallery-14.jpg" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    <a href="project-details"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="project-1-content">
                                    <p class="project-1-cat">
                                      Electrogenesis Academy
                                        </p>
                                    <h4 class="project-1-title">
                                        Creative Writing,
                                        Training Courses and Skills Development




                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav-style-2 testimonial-1-nav project-1-nav justify-content-center">
                    <div class="slider-control slider-button-prev4 hvr-zoom-1 hvr-zoom-1-primary"><span><i class="far fa-angle-left"></i></span></div>
                    <div class="slider-control slider-button-next4 hvr-zoom-1 hvr-zoom-1-primary"><span><i class="far fa-angle-right"></i></span> </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg_gray2 pt_1 pb_1">
        <h1 class="project-1-bottom-title text_stroke mt_100" data-parallax='{"x": -50}'>Technology & Smart Solutions</h1>
    </div>

    <!-- about -->
    <section class="pb_70 bg_gray2">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="image mb_90"><img src="{{asset('/')}}assets/images/resource/roller.png" alt=""></div>
                    <div class="h_1 mb_50 bg_gray3"></div>
                    <h5 class="fs_18">To Provide Exceptional Construction and <a href="services" class="c_primary">Renovation Services <i class="flaticon-right-arrow-2 fs_20 d_iblock c_light_dark ml_10 p_relative t_3"></i></a></h5>
                </div>
                <div class="col-lg-6">
                    <div class="ml_xxl__60">
                        <ul class="accordion-box alt">
                            <li class="accordion block active-block">
                                <div class="acc-btn active c_dark fs_28 ff_sec"><div class="icon-outer fs_14 fw_bold c_light_dark">01.</div>Consultancy</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <p>As consultants, we provide tailored insights, strategic guidance, and innovative solutions, empowering businesses to navigate and excel in the dynamic solar energy landscape.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn c_dark fs_28 ff_sec"><div class="icon-outer fs_14 fw_bold c_light_dark">02.</div>Support</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>
                                            Electrogenesis provides comprehensive maintenance and support to office ICT infrastructure through a contract for a specific period.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn c_dark fs_28 ff_sec"><div class="icon-outer fs_14 fw_bold c_light_dark">03.</div>Careers</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>
                                            Electrogenesis is an equal opportunities employer on merit. Vacancies are announced on this site when there are openings.
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feature -->
    <section class="pb_90 pt_90 d-none">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Leading in building & civil construction</h6>
                    <h2 class="fw_black fs_45 mb_40">Committed to Delivering <br>
                        High Quality Projects</h2>
                    <p class="mb_35">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards.</p>
                    <div class="pe-lg-5">
                        <div class="skill-1-progressbar-item mb_30">
                            <p class="skill-1-progressbar-title fs_18 fw_medium mb_5 c_dark">Construction</p>
                            <div class="progressbar-1-outer h_11 b_radius_5 p_relative">
                                <div class="progressbar-1-inner progress-line p_absolute l_0 t_0 b_0 theme-bg b_radius_5" data-width="96">
                                    <div class="progressbar-1-percentage fs_16 fw_sbold mb_10"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="96">0</span>%</div></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-1-progressbar-item mb_30">
                            <p class="skill-1-progressbar-title fs_18 fw_medium mb_5 c_dark">Renovation</p>
                            <div class="progressbar-1-outer h_11 b_radius_5 p_relative">
                                <div class="progressbar-1-inner progress-line p_absolute l_0 t_0 b_0 theme-bg b_radius_5" data-width="82">
                                    <div class="progressbar-1-percentage fs_16 fw_sbold mb_10"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="82">0</span>%</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-block-1 p_relative pb_30">
                        <img src="{{asset('/')}}assets/images/resource/image-19.jpg" alt="">
                        <div class="p_40 pr_35 pt_45 bg_primary text-block-3">
                            <h4 class="c_light fs_28 fw_bold mb_10">Construction <br>
                                Company</h4>
                            <p class="c_light mb_15">Bring to the table win-win survival strategies to ensure proactive domination. </p>
                            <a href="#" class="ff_sec fw_bold tt_u fs_14 ls_1">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="pt_120 pb_90 bg_dark6">
        <div class="p_absolute t_0 r_0 b_0 l_0" style="background-image: url(assets/images/resource/map.png);"></div>
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-4">
					<h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Testimonials</h6>
                    <h2 class="c_light fs_45 fw_black mb_40">What our clients say.</h2>
				</div>
				<div class="col-lg-8">
                    <div class="swiper-container two-item-carousel">
                        <div class="swiper-wrapper">
                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="testimonials-1-block">
                                    <div class="testimonials-1-top-content">
                                        <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                        <div class="testimonials-1-desc">Electrogenesis transformed my business. Expert advice, personalized solutions, and remarkable results. Highly recommended!</div>
                                    </div>
                                    <div class="testimonials-1-author">
                                        <div class="testimonials-1-author-image"><img src="{{asset('/')}}assets/images/resource/author-3.jpg" alt=""></div>
                                        <div class="testimonials-1-author-title">Victor</div>
                                        <div class="testimonials-1-designation">Customer</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="testimonials-1-block">
                                    <div class="testimonials-1-top-content">
                                        <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                        <div class="testimonials-1-desc">Your trainings were invaluable. Clear, practical, and boosted our team's solar expertise. A game-changer.</div>
                                    </div>
                                    <div class="testimonials-1-author">
                                        <div class="testimonials-1-author-image"><img src="{{asset('/')}}assets/images/resource/author-4.jpg" alt=""></div>
                                        <div class="testimonials-1-author-title">Segun</div>
                                        <div class="testimonials-1-designation">Customer</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-1-block">
                                    <div class="testimonials-1-top-content">
                                        <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                        <div class="testimonials-1-desc">They are experts in smart home devices transformed our living spaces. Efficient, innovative, and a pleasure to work with.</div>
                                    </div>
                                    <div class="testimonials-1-author">
                                        <div class="testimonials-1-author-image"><img src="{{asset('/')}}assets/images/resource/author-5.jpg" alt=""></div>
                                        <div class="testimonials-1-author-title">Nandom</div>
                                        <div class="testimonials-1-designation">Customer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>

    <!-- brand logo -->
    <div class="pb_55 bg_dark6">
        <div class="brand-logo-sec-border alt"></div>
        <div class="text-center"><h5 class="ff_sec fw_bold tt_u fs_14 ls_1 c_primary text-center mb_80 bg_dark6 pl_30 pr_30 p_relative d_iblock">We worked with royal clients</h5></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="{{asset('/')}}assets/images/clients-logo/brand-logo-1.png" alt=""></div>
                </div>
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="{{asset('/')}}assets/images/clients-logo/brand-logo-2.png" alt=""></div>
                </div>
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="{{asset('/')}}assets/images/clients-logo/brand-logo-3.png" alt=""></div>
                </div>
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="{{asset('/')}}assets/images/clients-logo/brand-logo-4.png" alt=""></div>
                </div>
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="{{asset('/')}}assets/images/clients-logo/brand-logo-5.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog -->
    <section class="pt_120 pb_90 d-none">
        <div class="auto-container">
            <div class="d-flex flex-wrap justify-content-lg-between align-items-end">
                <div>
                    <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>From the blog</h6>
                    <h2 class="fs_45 fw_black mb_40">New & Articles</h2>
                </div>
                <p class="mb_40">

                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-1-block wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                        <div class="blog-1-image hvr-img-zoom-1"><img src="{{asset('/')}}assets/images/resource/blog-1.jpg" alt=""></div>
                        <div class="blog-1-lower-content p_relative">
                            <div class="blog-1-date fs_20 fw_medium w_80 h_80 theme-bg p_absolute r_25 t_0 text-center text-light pt_15 b_radius_50 lh_25"><span class="fs_25 fw_bold">25</span><br> Feb</div>
                            <p class="blog-1-post-meta fs_17 fw_medium">Admin <span class="ml_5 mr_5">/</span>  Comments 2</p>
                            <h4 class="blog-1-title mb_30 fs_22 lh_35"><a href="blog-details">Normal that has evolved from <br> generation on ...</a></h4>
                            <div class="blog-1-read-more alt"><a class="ff_sec fw_bold tt_u fs_14 ls_1 c_light2 pl_30 pr_30 p_relative z_1" href="blog-details">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-1-block wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                        <div class="blog-1-image hvr-img-zoom-1"><img src="{{asset('/')}}assets/images/resource/blog-2.jpg" alt=""></div>
                        <div class="blog-1-lower-content p_relative">
                            <div class="blog-1-date fs_20 fw_medium w_80 h_80 theme-bg p_absolute r_25 t_0 text-center text-light pt_15 b_radius_50 lh_25"><span class="fs_25 fw_bold">25</span><br> Feb</div>
                            <p class="blog-1-post-meta fs_17 fw_medium">Admin <span class="ml_5 mr_5">/</span> Comments 2</p>
                            <h4 class="blog-1-title mb_30 fs_22 lh_35"><a href="blog-details">How to hire a Contractor Home Renovation</a></h4>
                            <div class="blog-1-read-more alt"><a class="ff_sec fw_bold tt_u fs_14 ls_1 c_light2 pl_30 pr_30 p_relative z_1" href="blog-details">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                    <div class="blog-1-block">
                        <div class="blog-1-image hvr-img-zoom-1"><img src="{{asset('/')}}assets/images/resource/blog-3.jpg" alt=""></div>
                        <div class="blog-1-lower-content p_relative">
                            <div class="blog-1-date fs_20 fw_medium w_80 h_80 theme-bg p_absolute r_25 t_0 text-center text-light pt_15 b_radius_50 lh_25"><span class="fs_25 fw_bold">25</span><br> Feb</div>
                            <p class="blog-1-post-meta fs_17 fw_medium">Admin <span class="ml_5 mr_5">/</span> Comments 2</p>
                            <h4 class="blog-1-title mb_30 fs_22 lh_35"><a href="blog-details">Know the secreat of <br> buildnox work</a></h4>
                            <div class="blog-1-read-more alt"><a class="ff_sec fw_bold tt_u fs_14 ls_1 c_light2 pl_30 pr_30 p_relative z_1" href="blog-details">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- map -->
    <section class="map-1-section">
        <div class="p_absolute t_0 r_0 b_0 l_0">
            <iframe
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Plot%2014,%20Femowei%20Crescent%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Kubwa%202/1,%20FCT%20Abuja%20900%20001+(Electrogenesis)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            width="600" height="550" frameborder="0" style="border:0; width: 100%; height: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="auto-container">
            <div class="contact-info-1-box alt">
                <h4 class="fs_20 c_light mb_10">Office Address</h4>
                <span class="w_20 h_2 bg_light mr_10 d_iblock mb_20"></span>
                <p class="c_light mb_25">Plot 14, Femowei Crescent
                    Kubwa 2/1, FCT <br>
                    Abuja 900 001</p>
                <p class="c_light">Phone : <a href="tel:+ 234 9 870 94 33">+ 234 9 870 94 33</a> </p>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="footer-top bg_dark8">
            <div class="auto-container">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box2 d-flex align-items-start pt_20 pb_15">
                            <img class="mr_20 mt_10" src="{{asset('/')}}assets/images/icons/icon-map.png" alt="">
                            <p class="c_light mb_0 lh_30">Plot 14, Femowei Crescent
                                Kubwa 2/1, FCT <br>
                                Abuja 900 001
                                </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box2 d-flex align-items-start ps-md-5 pt_20 pb_15">
                            <img class="mr_20 mt_10" src="{{asset('/')}}assets/images/icons/icon-mail.png" alt="">
                            <p class="c_light mb_0 lh_30">Email us : <br> <a class="fs_20" href="mailto:support@electrogenesis.org">support@electrogenesis.org</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box2 d-flex align-items-start ps-lg-5 pt_20 pb_15">
                            <img class="mr_20 mt_10" src="{{asset('/')}}assets/images/icons/icon-phone.png" alt="">
                            <p class="c_light mb_0 fs_20 lh_30">Call us on : <br> <a class="fs_22 fw_medium" href="tel:+ 234 9 870 94 33">+ 234 9 870 94 33 </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-border"></div>
        <div class="footer-1-middle pt_60 bg_dark8">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="about-widget mb_40">
                            <div class="logo mb_30"><img src="{{asset('/')}}assets/images/logo-light.png" alt=""></div>
                            <p class="c_light2 fs_17 fw_medium">Empowering Tomorrow, Today. Innovate with confidence through our expert solar engineering consultancy and specialized training
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="link-widget-1 mb_40">
                            <h4 class="fs_22 fw_medium mb_20 c_light fs_17">Useful Links</h4>
                            <ul class="link-widget-1-list c_light2 fw_medium">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li><a href="javascript:void(0);">About Us</a></li>

                                <li><a href="javascript:void(0);">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="link-widget-1 mb_40">
                            <h4 class="fs_22 fw_medium mb_20 c_light fs_17">Our Services</h4>
                            <ul class="link-widget-1-list c_light2 fw_medium">
                                <li><a href="javascript:void(0);">Power</a></li>
                                <li><a href="javascript:void(0);">ICT & Telecommunications</a></li>
                                <li><a href="javascript:void(0);">Smart Energy Solutions</a></li>
                                <li><a href="javascript:void(0);">Electrogenesis Academy</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="newsletter-widget-1 mb_40">
                            <h4 class="fs_22 fw_medium mb_20 c_light">Newsletter</h4>
                            <p class="mb_20 c_light2 fw_medium">Get latest updates and offers.</p>
                            <div class="footer-newsletter mb_25">
                                <form>
                                    <input type="email" placeholder="Enter your email address">
                                    <button class="btn-1"><i class="fas fa-paper-plane"></i> <span></span></button>
                                </form>
                            </div>
                            <ul class="footer-social-media">
                                <li><a class="hvr-zoom-1 hvr-zoom-1-primary" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="hvr-zoom-1 hvr-zoom-1-primary" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="hvr-zoom-1 hvr-zoom-1-primary" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="hvr-zoom-1 hvr-zoom-1-primary" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auto-container">
                <div class="footer-border"></div>
                <div class="d-flex justify-content-lg-between pt_20 pb_6">
                    <p class="c_light2 fs_17 mb_20 fw_medium">© Copyright  <a href="javascript:void(0);">Electrogenesis</a> 2023 . All right reserved. </p>
                    <p class="c_light2 fs_17 mb_20 fw_medium">Created By vicSystems Technologies Ltd.</p>
                </div>
            </div>
        </div>
    </footer>

</div>

<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text">Go To Top</div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->

<script src="{{asset('/')}}assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.nice-select.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.fancybox.js"></script>
<script src="{{asset('/')}}assets/js/isotope.js"></script>
<script src="{{asset('/')}}assets/js/appear.js"></script>
<script src="{{asset('/')}}assets/js/wow.js"></script>
<script src="{{asset('/')}}assets/js/TweenMax.min.js"></script>
<script src="{{asset('/')}}assets/js/swiper.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('/')}}assets/js/parallax-scroll.js"></script>
<script src="{{asset('/')}}assets/js/jquery-ui-1.9.2.custom.min.js"></script>

<script src="{{asset('/')}}assets/js/odometer.min.js"></script>
<script src="{{asset('/')}}assets/js/script.js"></script>


</body>

<!-- Mirrored from www.designarc.biz/demos/buildnox/index-6 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 18:00:38 GMT -->
</html>













