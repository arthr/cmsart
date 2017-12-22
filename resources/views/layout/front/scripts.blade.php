<!-- jQuery -->
<script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- START: Scripts -->

<!-- GSAP -->
<script src="{{ asset('assets/bower_components/gsap/src/minified/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/bower_components/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Sticky Kit -->
<script src="{{ asset('assets/bower_components/sticky-kit/dist/sticky-kit.min.js') }}"></script>

<!-- Jarallax -->
<script src="{{ asset('assets/bower_components/jarallax/dist/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/jarallax/dist/jarallax-video.min.js') }}"></script>

<!-- Flickity -->
<script src="{{ asset('assets/bower_components/flickity/dist/flickity.pkgd.min.js') }}"></script>

<!-- Isotope -->
<script src="{{ asset('assets/bower_components/isotope/dist/isotope.pkgd.min.js') }}"></script>

<!-- Photoswipe -->
<script src="{{ asset('assets/bower_components/photoswipe/dist/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>

<!-- Typed.js -->
<script src="{{ asset('assets/bower_components/typed.js/dist/typed.min.js') }}"></script>

<!-- Jquery Form -->
<script src="{{ asset('assets/bower_components/jquery-form/jquery.form.js') }}"></script>

<!-- Jquery Validation -->
<script src="{{ asset('assets/bower_components/jquery-validation/dist/jquery.validate.min.js') }}"></script>

<!-- Jquery Countdown + Moment -->
<script src="{{ asset('assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/moment-timezone/builds/moment-timezone-with-data.js') }}"></script>

<!-- Hammer.js -->
<script src="{{ asset('assets/bower_components/hammer.js/hammer.min.js') }}"></script>

<!-- nK Share -->
<script src="{{ asset('assets/plugins/nk-share/nk-share.js') }}"></script>

<!-- NanoSroller -->
<script src="{{ asset('assets/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js') }}"></script>

<!-- SoundManager2 -->
<script src="{{ asset('assets/bower_components/SoundManager2/script/soundmanager2-nodebug-jsmin.js') }}"></script>

<!-- DateTimePicker -->
<script src="{{ asset('assets/bower_components/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>

<!-- Revolution Slider -->
<script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<!-- Keymaster -->
<script src="{{ asset('assets/bower_components/keymaster/keymaster.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('assets/bower_components/summernote/dist/summernote.min.js') }}"></script>

<!-- Prism -->
<script src="{{ asset('assets/bower_components/prism/prism.js') }}"></script>

<!-- GODLIKE -->
<script src="{{ asset('assets/js/godlike.min.js') }}"></script>
<script src="{{ asset('assets/js/godlike-init.js') }}"></script>
<!-- END: Scripts -->



<script type="text/javascript">
    var tpj = jQuery;
    var revapi50;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_50_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_50_1");
        } else {
            revapi50 = tpj("#rev_slider_50_1").show().revolution({
                sliderType: "carousel",
                jsFileLocation: "{{ asset('assets/plugins/revolution/js/') }}",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    onHoverStop: "off",
                },
                carousel: {
                    maxRotation: 8,
                    vary_rotation: "off",
                    minScale: 20,
                    vary_scale: "off",
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "off",
                    vary_fade: "off",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: -90,
                    stretch: "off"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [800, 600, 400, 320],
                gridheight: [600, 400, 320, 280],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>