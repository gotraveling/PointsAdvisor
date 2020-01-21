<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap HTML template and UI kit by Medium Rare">
    <!-- Begin loading animation -->
    <link href="assets/css/loaders/loader-pulse.css" rel="stylesheet" type="text/css" media="all" />
    <!-- End loading animation -->
    <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
<!--<div class="alert alert-dismissible d-none d-md-block bg-primary-3 text-white py-4 py-md-3 px-0 mb-0 rounded-0 border-0">
        <div class="container">
            <div class="row no-gutters align-items-md-center justify-content-center">
                <div class="col-lg-11 col-md d-flex flex-column flex-md-row align-items-md-center justify-content-lg-center">
                    <div class="mb-3 mb-md-0"><strong>Intro Sale</strong> $10 per license for Jumpstart's launch. Act fast, ends soon.</div>
                    <a class="btn btn-sm btn-success ml-md-3" target="_blank" href=#>Redeem Offer</a>
                </div>
                <div class="col-auto position-absolute right">
                    <button type="button" class="close p-0 position-relative" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <img src="assets/img/icons/interface/icon-x.svg" alt="Close" class="icon icon-sm bg-white" data-inject-svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div> -->

    <div id="front">
        <appmenu></appmenu>
        <blogarticle></blogarticle>
        <subscribebar></subscribebar>
        <appfooter></appfooter>
    </div>
    
    <script src="{{ asset('js/front.js') }}"></script>

    <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img src="assets/img/icons/interface/icon-arrow-up.svg" alt="Icon" class="icon bg-white" data-inject-svg>
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="assets/js/clipboard.min.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="assets/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>
    <!-- Removes page load animation when window is finished loading -->
    <script type="text/javascript">
      window.addEventListener("load",function(){document.querySelector('body').classList.add('loaded');});
    </script>

  </body>

</html>