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
            <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">About Us</h1>
            <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">
                <li><a href="index.html">Home</a></li>
                <li class="ml_10 mr_10">/</li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>

<!-- About -->
<section class="pt_160 pb_90">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <div class="p_relative">
                    <div class="image p_relative d_iblock" data-parallax='{"y": -20}'>
                        <img src="assets/images/resource/roller.png" alt="">
                    </div>
                    <div class="image p_relative b_40 text-end" data-parallax='{"y": 20}'>
                        {{-- <img src="assets/images/resource/image-3.jpg" alt=""> --}}
                    </div>
                    <div class="experience-year fs_18 fw_bold ff_sec theme-bg p_absolute l_60 b_110 text-center text-light pt_30 b_radius_50 lh_20" data-parallax='{"x": 20}'><span class="fs_60 fw_black mb_25 d_iblock">20</span><br> Years <br> Experience</div>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="p_relative">
                    <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>About Company</h6>
                    <h2 class="fs_45 fw_black mb_40">Why Choose Us </h2>

                    <p class="mb_50 fs_18">
                        Electrogenesis Ltd is a limited liability company registered in Nigeria RC 812 707 and it operates in the SME segment within Nigeria and global market. With the expertise of a team of experienced professionals, Electrogenesis provides your business ICT & Telecommunication needs, clean Power Solutions, Renewable Smart Energy, Lighting, Healthcare and Education.

                        As one of the niche leaders in the local Telecommunications Industry, Electrogenesis continues to provide reliable and cost-effective ICT & Telecommunications solutions to meet customers’ needs and assist them in achieving their competitive edge.

                        Using the best products and technology in Telecommunications, Electrogenesis ensures that the most cost effective and updated solution is delivered to the customers.

                        Electrogenesis organization understands people - business relationship and thus engages in healthcare and humanitarian aids that enhance people’s lives and peace of mind.

                        Electrogenesis Ltd was created to serve people and businesses globally. We encourage you to contact us now for the under listed products & services. We give you the best cost effective products & service quality.

                    </p>
                    <div class="author-box d-flex align-items-center">
                        <div class="image mb_20 mr_25">
                        </div>
                        <div class="mr_40">
                            <p class="mb-0 fs_20 fw_sbold c_dark">Charles Ekeh</p>
                            <p class="mb_20 fs_18 c_dark">Founder</p>
                        </div>
                        <div class="divider w_1 h_80 mr_35 bg_light_dark p_relative b_5"></div>
                        <div class="signature mb_20"><img src="assets/images/resource/signature2.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- whychoose us -->
<section class="pt_120 bg_gray d-none">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                <div class="">
                    <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>OUr Key points</h6>
                    <h2 class="fw_black fs_45 mb_20">Why Choose Us</h2>
                    <p class="mb_40 fs_18">Bring to the table win-win survival strategies to ensure proactive domination. <br> At the end of the day, going forward, a new normal that has evolved from <br> generation X is on the runway heading towards a streamlined cloud solution. </p>
                    <ul class="list-1 alt fs_20 fw_medium c_dark2 mb_30">
                        <li><i class="flaticon-check-mark"></i>Experienced Construction Professional</li>
                        <li><i class="flaticon-check-mark"></i>Committted to Helping Our Clients</li>
                        <li><i class="flaticon-check-mark"></i>Building Maintenance & Renovation</li>
                        <li><i class="flaticon-check-mark"></i>Innovative Eco Power Technologies</li>
                    </ul>
                    <div class="mw_480">
                        <div class="skill-1-progressbar-item mb_11">
                            <p class="skill-1-progressbar-title fs_20 fw_sbold mb_5 c_dark">Construction</p>
                            <div class="progressbar-1-outer h_11 b_radius_5 p_relative">
                                <div class="progressbar-1-inner progress-line p_absolute l_0 t_0 b_0 theme-bg b_radius_5" data-width="96">
                                    <div class="progressbar-1-percentage fs_20 fw_sbold mb_10 c_dark"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="96">0</span>%</div></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-1-progressbar-item mb_70">
                            <p class="skill-1-progressbar-title fs_20 fw_sbold mb_5 c_dark">Renovation</p>
                            <div class="progressbar-1-outer h_11 b_radius_5 p_relative">
                                <div class="progressbar-1-inner progress-line p_absolute l_0 t_0 b_0 theme-bg b_radius_5" data-width="82">
                                    <div class="progressbar-1-percentage fs_20 fw_sbold mb_10 c_dark"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="82">0</span>%</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                <div class="feature-image-1">
                    <img src="assets/images/resource/image-25.jpg" alt="">
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

<!-- funfacts -->
<section class="pb_90 pt_90 bg_gray5">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>statistcs</h6>
                <h2 class="fw_black fs_45 mb_20">Know More About <br> Our Success</h2>
                <p class="mb_45">Bring to the table win-win survival strategies to ensure <br> proactive domination.</p>
            </div>
            <div class="col-lg-7">
                <div class="ps-lg-5">
                    <div class="row row-20">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div class="fun-fact-1-block bg_light border-0">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-folder-management c_dark2 fs_65 w_65 mr_15"></i>
                                    <div>
                                        <div class="fs_50 fw_bold c_primary">
                                            <span class="funfact-1-number odometer" data-count="2879">00</span>
                                        </div>
                                        <p class="fw_bold mb_0">Total Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div class="fun-fact-1-block bg_light border-0">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-trowel c_dark2 fs_65 w_65 mr_15"></i>
                                    <div>
                                        <div class="fs_50 fw_bold c_primary">
                                            <span class="funfact-1-number odometer" data-count="788">00</span>
                                        </div>
                                        <p class="fw_bold mb_0">House Builds</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div class="fun-fact-1-block bg_light border-0">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-worker c_dark2 fs_65 w_65 mr_15"></i>
                                    <div>
                                        <div class="fs_50 fw_bold c_primary">
                                            <span class="funfact-1-number odometer" data-count="270">00</span>
                                        </div>
                                        <p class="fw_bold mb_0">Qualified Worker</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div class="fun-fact-1-block bg_light border-0">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-guarantee c_dark2 fs_65 w_65 mr_15"></i>
                                    <div>
                                        <div class="fs_50 fw_bold c_primary">
                                            <span class="funfact-1-number odometer" data-count="57">00</span>
                                        </div>
                                        <p class="fw_bold mb_0">Get Awards</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- team -->
<section class="pt_120 pb_90 bg_gray6">
    <div class="auto-container">
        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Our Professionals</h6>
        <h2 class="fw_black fs_45 mb_50">Our Dedicated Team</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-1-block wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="team-1-image">
                        <div class="team-1-image-wrap"><img src="assets/images/resource/team-1.jpg" alt=""></div>
                        <div class="team-1-share-icon-area">
                            <ul class="team-1-social-icon">
                                <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="team-1-share-icon"><i class="flaticon-share"></i></div>
                        </div>
                    </div>
                    <div class="team-1-author-info">
                        <h4 class="fs_21 c_light">Robert Joe</h4>
                        <p class="fs_13 ff_sec c_light mb_0 tt_u">Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-1-block wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="team-1-image">
                        <div class="team-1-image-wrap"><img src="assets/images/resource/team-2.jpg" alt=""></div>
                        <div class="team-1-share-icon-area">
                            <ul class="team-1-social-icon">
                                <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="team-1-share-icon"><i class="flaticon-share"></i></div>
                        </div>
                    </div>
                    <div class="team-1-author-info">
                        <h4 class="fs_21 c_light">Michale Joe</h4>
                        <p class="fs_13 ff_sec c_light mb_0 tt_u">Civil engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-1-block wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="team-1-image">
                        <div class="team-1-image-wrap"><img src="assets/images/resource/team-3.jpg" alt=""></div>
                        <div class="team-1-share-icon-area">
                            <ul class="team-1-social-icon">
                                <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="team-1-share-icon"><i class="flaticon-share"></i></div>
                        </div>
                    </div>
                    <div class="team-1-author-info">
                        <h4 class="fs_21 c_light">Daniale Joe</h4>
                        <p class="fs_13 ff_sec c_light mb_0 tt_u">Assistence</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-1-block wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="team-1-image">
                        <div class="team-1-image-wrap"><img src="assets/images/resource/team-4.jpg" alt=""></div>
                        <div class="team-1-share-icon-area">
                            <ul class="team-1-social-icon">
                                <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="team-1-share-icon"><i class="flaticon-share"></i></div>
                        </div>
                    </div>
                    <div class="team-1-author-info">
                        <h4 class="fs_21 c_light">Albert Flores</h4>
                        <p class="fs_13 ff_sec c_light mb_0 tt_u">Junior engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
