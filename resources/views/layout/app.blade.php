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
                                        <li class=""><a href="/our-projects">Projects</a>

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


    @yield('content')

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













