<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A Free Content Manager System">
        <meta name="author" content="Arthur Morais">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
        @section('headStyles')
        @include('layout.front.styles')
        @show
    </head>
    <body>
        @include('layout.front.preloader')

        @include('layout.front.pagebackground')

        @if(env('WEB_BORDER'))
        <!-- START: Page Border -->
        <div class="nk-page-border">
            <div class="nk-page-border-t"></div>
            <div class="nk-page-border-r"></div>
            <div class="nk-page-border-b"></div>
            <div class="nk-page-border-l"></div>
        </div>
        <!-- END: Page Border -->
        @endif

        <header class="nk-header {{ env('WEB_MENU_OPAQUE') === true ? 'nk-header-opaque' : null }}">

            @include('layout.front.translate')

            @include('layout.front.nav')

        </header>

        @include('layout.front.rightnav')



        <div class="nk-main">


            <!-- START: Header Title -->
            <!--
        Additional Classes:
            .nk-header-title-sm
            .nk-header-title-md
            .nk-header-title-lg
            .nk-header-title-xl
            .nk-header-title-full
            .nk-header-title-parallax
            .nk-header-title-parallax-opacity
            .nk-header-title-boxed
            -->
            <div class="nk-header-title nk-header-title-lg nk-header-title-parallax nk-header-title-parallax-opacity">
                <div class="bg-image">
                    <div style="background-image: url('{{ asset('assets/images/image-1.jpg') }}');"></div>
                </div>
                <div class="nk-header-table">
                    <div class="nk-header-table-cell">
                        <div class="container">

                            <div class="nk-header-text">

                                <h1 class="nk-title display-3">Enjoy this battle!</h1>

                                <div class="nk-gap-2"></div>
                                <a href="#" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                                    <span>Register</span>
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#" class="nk-btn nk-btn-lg link-effect-4">
                                    <span>Download</span>
                                </a>

                                <div class="nk-gap-4"></div>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <!-- END: Header Title -->





            <!-- START: Rev Slider -->
            <div class="mnt-80">
                <div id="rev_slider_50_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="photography-carousel48" style="padding:0px;">
                    <div id="rev_slider_50_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-185" data-transition="slideoverhorizontal" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="assets/images/gallery-3-thumb.jpg" data-rotate="0" data-saveperformance="off">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/gallery-3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-192" data-transition="slideoververtical" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="assets/images/gallery-5-thumb.jpg" data-rotate="0" data-saveperformance="off">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/gallery-5.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-186" data-transition="slideoverhorizontal" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="assets/images/gallery-4-thumb.jpg" data-rotate="0" data-saveperformance="off">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/gallery-4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-183" data-transition="slideoververtical" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="assets/images/gallery-1-thumb.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/gallery-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
            </div>
            <!-- END: Rev Slider -->

            <!-- START: Features -->
            <div class="container">
                <div class="nk-gap-6"></div>
                <div class="nk-gap-2"></div>
                <div class="row vertical-gap lg-gap">
                    <div class="col-md-4">
                        <div class="nk-ibox">
                            <div class="nk-ibox-icon nk-ibox-icon-circle">
                                <span class="ion-person-add"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <h2 class="nk-ibox-title">Register Now</h2>
                                Register your account right now and be the first player on the top!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="nk-ibox">
                            <div class="nk-ibox-icon nk-ibox-icon-circle">
                                <span class="ion-ios-cloud-download"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <h2 class="nk-ibox-title">Download Patch</h2>
                                You will really need this to play in our server. Believe, it's true!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="nk-ibox">
                            <div class="nk-ibox-icon nk-ibox-icon-circle">
                                <span class="ion-ios-game-controller-b"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <h2 class="nk-ibox-title">Play Beta</h2>
                                Dont worry about play in our Beta Server. All your aquisitions will be safe when the official server begin!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-gap-2"></div>
                <div class="nk-gap-6"></div>
            </div>
            <!-- END: Features -->

            <!-- START: About -->
            <div class="nk-box bg-dark-1">
                <div class="container text-xs-center">
                    <div class="nk-gap-6"></div>
                    <div class="nk-gap-2"></div>
                    <h2 class="nk-title h1">Lineage Brasil Club</h2>
                    <div class="nk-gap-3"></div>

                    <p class="lead">Our main differential is the purpose behind the server. The will and dream of being able to recall in practice the best moments that this incredible game called Lineage can already provide us. It is about delivering to Brazilian players and members of #Club, the best gameplay ever experienced by them on a server besides living everything else with a lower latency they have experienced.
                        <br><br>So this small legion of Lineage fans are waiting for us:</p>

                    <div class="nk-gap-2"></div>
                    <div class="row equal-height no-gap multi-columns-row">
                        <div class="col-md-4">
                            <div class="nk-box-2 nk-box-line">
                                <!-- START: Counter -->
                                <div class="nk-counter-3">
                                    <div class="nk-count">2387</div>
                                    <h3 class="nk-counter-title h4">Registered Players</h3>
                                    <div class="nk-gap-1"></div>
                                </div>
                                <!-- END: Counter -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="nk-box-2 nk-box-line">
                                <!-- START: Counter -->
                                <div class="nk-counter-3">
                                    <div class="nk-count">48</div>
                                    <h3 class="nk-counter-title h4">Clans Estimated</h3>
                                    <div class="nk-gap-1"></div>
                                </div>
                                <!-- END: Counter -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="nk-box-2 nk-box-line">
                                <!-- START: Counter -->
                                <div class="nk-counter-3">
                                    <div class="nk-count">141</div>
                                    <h3 class="nk-counter-title h4">Party Estimated</h3>
                                    <div class="nk-gap-1"></div>
                                </div>
                                <!-- END: Counter -->
                            </div>
                        </div>
                    </div>
                    <div class="nk-gap-2"></div>
                    <div class="nk-gap-6"></div>
                </div>
            </div>
            <!-- END: About -->

            <!-- START: Video -->
            <div class="container">
                <div class="nk-gap-6"></div>
                <div class="nk-gap-2"></div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=Wb2qjfpOeMo" data-video-thumb="{{ asset('assets/images/video-6-thumb.jpg') }}"></div>
                    </div>
                </div>
                <div class="nk-gap-2"></div>
                <div class="nk-gap-6"></div>
            </div>
            <!-- END: Video -->

            <!-- START: Coming Soon -->
            <div class="nk-box bg-dark-1 text-xs-center">
                <div class="nk-gap-6"></div>
                <div class="nk-gap-2"></div>
                <div class="bg-image op-3" style="background-image: url('assets/images/image-3.jpg');"></div>
                <div class="container">
                    <h2 class="display-4">Coming soon...</h2>
                    <div class="nk-gap"></div>
                    <div>We're wainting for you in this Journey.<br>You don't get to be great without a victory...</div>
                    <div class="nk-gap-4"></div>

                    <div class="nk-countdown" data-end="2018-02-24 14:00" data-timezone="America/Sao_Paulo"></div>
                </div>
                <div class="nk-gap-2"></div>
                <div class="nk-gap-6"></div>
            </div>
            <!-- END: Coming Soon -->

            @include('layout.front.testimonials')

            @include('layout.front.subscribe')

            <!-- START: Footer -->
            <!--
        Additional Classes:
            .nk-footer-parallax
            .nk-footer-parallax-opacity
            -->
            <footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity bg-black">
                <img class="nk-footer-top-corner" src="assets/images/footer-corner.png" alt="">

                <div class="container">
                    <div class="nk-gap-2"></div>
                    <div class="nk-footer-logos">
                        <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank">
                            <img class="nk-img" src="assets/images/footer-logo-godlike.png" alt="" width="120">
                        </a>
                        <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank">
                            <img class="nk-img" src="assets/images/footer-logo-yp3.png" alt="" width="120">
                        </a>
                        <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank">
                            <img class="nk-img" src="assets/images/footer-logo-nk-team.png" alt="" width="150">
                        </a>
                        <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank">
                            <img class="nk-img" src="assets/images/footer-logo-pegi-18.png" alt="" width="46">
                        </a>
                        <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank">
                            <img class="nk-img" src="assets/images/footer-logo-18-restricted.png" alt="" width="160">
                        </a>
                    </div>
                    <div class="nk-gap"></div>

                    <p>© Lineage Brasil Club All Rights Reserved.</p>

                    <div class="nk-footer-links">
                        <a href="#" class="link-effect">Terms of Service</a>
                        <span>|</span> <a href="#" class="link-effect">Privacy Policy</a>
                    </div>

                    <div class="nk-gap-4"></div>
                </div>
            </footer>
            <!-- END: Footer -->

        </div>



        <!--
        START: Share Buttons
            .nk-share-buttons-left
        -->
        <div class="nk-share-buttons nk-share-buttons-left">
            <ul>
                <li>
                    <span class="nk-share-icon" title="Share page on Facebook" data-share="facebook">
                        <span class="icon fa fa-facebook"></span>
                    </span>
                    <span class="nk-share-name">Facebook</span>
                </li>
            <!--
            <li>
                <span class="nk-share-icon" title="Share page on Twitter" data-share="twitter">
                    <span class="icon fa fa-twitter"></span>
                </span>
                <span class="nk-share-name">Twitter</span>
            </li>
            <li>
                <span class="nk-share-icon" title="Share page on Google+" data-share="google-plus">
                    <span class="icon fa fa-google-plus"></span>
                </span>
                <span class="nk-share-name">Google Plus</span>
            </li>
                
            <li>
                <span class="nk-share-icon" title="Share page on Pinterest" data-share="pinterest">
                    <span class="icon fa fa-pinterest"></span>
                </span>
                <span class="nk-share-name">Pinterest</span>
            </li>
            <li>
                <span class="nk-share-icon nk-btn nk-btn-lg nk-btn-icon" title="Share page on LinkedIn" data-share="linkedin">
                    <span class="icon fa fa-linkedin"></span>
                </span>
                <span class="nk-share-name">LinkedIn</span>
            </li>
            <li>
                <span class="nk-share-icon nk-btn nk-btn-lg nk-btn-icon" title="Share page on VK" data-share="vk">
                    <span class="icon fa fa-vk"></span>
                </span>
                <span class="nk-share-name">Vkontakte</span>
            </li>
                -->
            </ul>
        </div>

        @include('layout.front.sidebuttons')

        @include('layout.front.myaccount')

        @section('footerScripts')
        @include('layout.front.scripts')
        @show

    </body>
</html>
