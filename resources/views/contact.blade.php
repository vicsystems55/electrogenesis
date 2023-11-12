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
            <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Contact Us</h1>
            <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">
                <li><a href="index.html">Home</a></li>
                <li class="ml_10 mr_10">/</li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>

<section class="pt_120 pb_90 bg_gray10">
    <div class="auto-container">
        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>get in touch</h6>
        <h2 class="fw_black fs_45 mb_50">We Love to Hear From You</h2>
        <div class="row">
            <div class="col-lg-7">
                <div class="">
                    <form method="post" id="contact-form" action="https://www.designarc.biz/demos/buildnox/assets/inc/sendmail.php">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name" required>
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" name="form_email" class="form-control" value="" placeholder="Your Email" required>
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject" required>
                            </div>

                            <div class="form-group col-md-12">
                                <textarea name="form_message" class="form-control" placeholder="Massage"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="btn-1 text-center pt_12 pb_9 pl_30 pr_30 b_radius_5 ff_sec fw_bold tt_u fs_14 ls_1" type="submit">Submit now <span></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="ms-lg-5">
                    <div class="ps-lg-3">
                        <h3 class="fs_35 mb_20">Our Address</h3>
                        <p class="mb_30">
                        </p>
                        <div class="d-flex align-items-start pb_30">
                            <img class="mr_20 mt_10" src="assets/images/icons/icon-map.png" alt="">
                            <p class="mb_0 lh_30"><span class="fs_20 fw_bold c_dark">Address :</span> <br> Plot 14, Femowei Crescent
                                Kubwa 2/1, FCT <br>
                                Abuja 900 001</p>
                        </div>
                        <div class="d-flex align-items-start pb_30">
                            <img class="mr_20 mt_10" src="assets/images/icons/icon-mail.png" alt="">
                            <p class="mb_0 lh_30"><span class="fs_20 fw_bold c_dark">Phone :</span> <br> <a href="tel:+ 234 9 870 94 33">+ 234 9 870 94 33</a></p>
                        </div>
                        <div class="d-flex align-items-start pb_30">
                            <img class="mr_20 mt_10" src="assets/images/icons/icon-phone.png" alt="">
                            <p class="mb_0 fs_20 lh_30"><span class="fs_20 fw_bold c_dark">Email :</span> <br> <a href="mailto:support@electrogenesis.org">support@electrogenesis.org</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="map">
    <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Plot%2014,%20Femowei%20Crescent%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Kubwa%202/1,%20FCT%20Abuja%20900%20001+(Electrogenesis)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="535" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

@endsection
