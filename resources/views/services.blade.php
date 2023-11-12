@extends('layout.app')

@section('content')

<section class="banner-1-section pt_240 pb_140 bg_cover overflow-hidden" style="background-image: url(assets/images/background/bg-4.jpg);">
    <div class="line-grid-wrap">
        <span class="line-grid-1"></span>
        <span class="line-grid-2"></span>
        <span class="line-grid-3"></span>
        <span class="line-grid-4"></span>
        <span class="line-grid-5"></span>
    </div>
    <div class="banner-1-image-1 p_absolute b_0 r_0"><img src="assets/images/resource/building3.png" alt=""></div>
    <div class="auto-container">
        <div class="p_relative text-center">
            <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Services</h1>
            <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">
                <li><a href="index">Home</a></li>
                <li class="ml_10 mr_10">/</li>
                <li>Services</li>
            </ul>
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
                            <div class="service-1-read-more"><a href="service-details" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">Read More <i class="ml_7 fs_17 v_middle flaticon-fast-forward"></i></a></div>
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
                            <div class="service-1-read-more"><a href="service-details" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">Read More <i class="ml_7 fs_17 v_middle flaticon-fast-forward"></i></a></div>
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
                            <div class="service-1-read-more"><a href="service-details" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">Read More <i class="ml_7 fs_17 v_middle flaticon-fast-forward"></i></a></div>
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
                            <div class="service-1-read-more"><a href="service-details" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">Read More <i class="ml_7 fs_17 v_middle flaticon-fast-forward"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- whychoose us -->
<section class="">
    <div class="parallax-bg-wrap b_0 p_absolute t_0 l_0 r_0 o_hidden">
        <div class="parallax-bg bg_cover  p_absolute t__50 l_0 r_0 b__50" data-parallax='{"y": 30}' style="background-image: url(assets/images/background/bg-1.jpg);"></div>
    </div>
    <div class="auto-container">
        <div class="row no-gutters align-items-end">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                <div class="whychooseus-right-box" style="background-image: url(assets/images/resource/image-2.jpg);">
                    <div class="">
                        <h6 class="c_primary2 ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 bg_primary3 mr_10 d_iblock v_middle"></span>Bigger, Better, Faster </h6>
                        <h2 class="c_light fs_45 fw_black mb_18">Leading Way In Renewable <br> Energy</h2>
                        <p class="mb_20 fs_16 c_light p_relative">Bring to the table win-win survival strategies to ensure
                            proactive domination.</p>
                        <a href="contact" class="c_light ff_sec fw_bold tt_u fs_14 ls_1 p_relative">request a call back <i class="ml_10 fs_20 v_middle flaticon-right-1"></i></a>
                        <div class="p_absolute r_0 t__35 p_33 bg_primary"><a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="video-btn-1 ripple" data-fancybox="video-1" data-caption=""><i class="flaticon-play-button"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
