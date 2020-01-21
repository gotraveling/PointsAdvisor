<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>POINTS ADVISOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap HTML template and UI kit by Medium Rare">
    <!-- Begin loading animation -->
    <link href="assets/css/loaders/loader-pulse.css" rel="stylesheet" type="text/css" media="all" />
    <!-- End loading animation -->
    <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
   
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  </head>

  <body>

    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <div id="front">
    <notification></notification>
    <appmenu account="{{json_encode($data)}}"></appmenu>
    <banner></banner>
    <gettingstarted></gettingstarted>

    <section class="p-0 bg-light">
      <div class="container">
        <div class="row align-items-center justify-content-around">
          <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
            <div class="text-center text-lg-left">
              <h2 class="h1">Save tons on design and development</h2>
              <p class="lead">Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div id="faq-accordion">
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-1" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Fully Responsive</h6>
                    <img src="assets/img/icons/interface/icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg>
                  </div>
                </a>
                <div class="collapse" id="accordion-1" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                    Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque Arya.
                  </div>
                </div>
              </div>
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-2" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Multiple Layouts</h6>
                    <img src="assets/img/icons/interface/icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg>
                  </div>
                </a>
                <div class="collapse" id="accordion-2" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                    Non pulvinar neque laoreet suspendisse interdum Catelyn libero id. Olenna imp leo in vitae turpis massa. Sapien habitant Tyrion.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-lg-5" data-aos="fade-in">
            <img src="assets/img/square-5.jpg" alt="Image" class="img-fluid rounded shadow">
            <img src="assets/img/square-4.jpg" alt="Image" class="position-absolute p-0 col-4 col-xl-5 border border-white border-thick rounded-circle top right shadow-lg mt-5 mr-n5 mr-lg-n3 mr-xl-n5 d-none d-md-block" data-jarallax-element="-20 0">
          </div>

        </div>
      </div>
      <div class="divider divider-bottom bg-white"></div>
    </section>
    <section>
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">They <mark data-aos="highlight-text" data-aos-delay="300">Jumpstarted</mark> it</h3>
            <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
            <div class="card h-100 hover-box-shadow">
              <div class="d-block bg-gradient rounded-top position-relative">
                <img class="card-img-top hover-fade-out" src="assets/img/case-studies/thumb-2.jpg" alt="Image accompanying Circle testimonial">
                <div class="badge badge-light">
                  <img src="assets/img/logos/brand/asgardia.svg" alt="Asgardia company logo" class="icon icon-sm m-lg-1">
                </div>
              </div>
              <div class="card-body">
                <h3>Asgardia</h3>
                <p>
                  Samwell nisl purus in mollis. Varys eget velit aliquet sagittis consectetur purus ut.
                </p>
                <a href="#" class="stretched-link">Read Story</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
            <div class="card h-100 hover-box-shadow">
              <div class="d-block bg-gradient rounded-top position-relative">
                <img class="card-img-top hover-fade-out" src="assets/img/case-studies/thumb-9.jpg" alt="Image accompanying Kanba testimonial">
                <div class="badge badge-light">
                  <img src="assets/img/logos/brand/kanba.svg" alt="Kanba company logo" class="icon icon-sm m-lg-1">
                </div>
              </div>
              <div class="card-body">
                <h3>Kanba</h3>
                <p>
                  Vel fringilla est ullamcorper eget. Eunuch pulvinar sapien et Loras ullamcorper Melisandre.
                </p>
                <a href="#" class="stretched-link">Read Story</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
            <div class="card h-100 hover-box-shadow">
              <div class="d-block bg-gradient rounded-top position-relative">
                <img class="card-img-top hover-fade-out" src="assets/img/case-studies/thumb-5.jpg" alt="Image accompanying Treva testimonial">
                <div class="badge badge-light">
                  <img src="assets/img/logos/brand/treva.svg" alt="Treva company logo" class="icon icon-sm m-lg-1">
                </div>
              </div>
              <div class="card-body">
                <h3>Treva</h3>
                <p>
                  Consectetur libero imp faucibus nisl tincidunt. Sansa tellus mauris a diam maecenas sed.
                </p>
                <a href="#" class="stretched-link">Read Story</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-primary-3 pt-0 text-white">
      <div class="divider divider-top transform-flip-x bg-white"></div>
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">Features Galore</h3>
            <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-9 col-lg-10">
            <div class="row justify-content-center">
              <div class="col-md-6 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="10">
                <div class="card card-body bg-white min-vh-md-30 hover-box-shadow">
                  <div class="flex-fill">
                    <h4 class="h3">Fully Responsive</h4>
                    <p>Volantis vitae unuch sed velit sodales. Sandor imperdiet proin fermentum leo vel Hodor.</p>
                  </div>
                  <a href="#" class="stretched-link">Learn More</a>
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="20">
                <div class="card card-body bg-white min-vh-md-30 hover-box-shadow">
                  <div class="flex-fill">
                    <h4 class="h3">Multiple Layouts</h4>
                    <p>Samwell nisl purus in mollis. Varys eget velit aliquet sagittis consectetur purus ut.</p>
                  </div>
                  <a href="#" class="stretched-link">Learn More</a>
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="30">
                <div class="card card-body bg-white min-vh-md-30 hover-box-shadow">
                  <div class="flex-fill">
                    <h4 class="h3">Modular Components</h4>
                    <p>Vel fringilla est ullamcorper eget. Eunuch pulvinar sapien et Loras ullamcorper Melisandre.</p>
                  </div>
                  <a href="#" class="stretched-link">Learn More</a>
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="40">
                <div class="card card-body bg-white min-vh-md-30 hover-box-shadow">
                  <div class="flex-fill">
                    <h4 class="h3">Suits Your Style</h4>
                    <p>Consectetur libero imp faucibus nisl tincidunt. Sansa tellus mauris a diam maecenas sed.</p>
                  </div>
                  <a href="#" class="stretched-link">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-primary text-white">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">Customers are lovin’ it</h3>
            <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col d-flex flex-wrap justify-content-center">
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-3 pr-md-4 py-2 shadow-sm bg-white">
                <img src="assets/img/avatars/male-3.jpg" alt="Brandon Pliskin avatar image" class="avatar avatar-sm flex-shrink-0 mr-3">
                <div class="text-dark mb-0">&ldquo;Porting in to
                  <mark>Jumpstart is a breeze.</mark>&rdquo;</div>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-3 pr-md-4 py-2 shadow-sm bg-white">
                <img src="assets/img/avatars/female-4.jpg" alt="Ashley Mance avatar image" class="avatar avatar-sm flex-shrink-0 mr-3">
                <div class="text-dark mb-0">&ldquo;Jumpstart is a dream come true.&rdquo;</div>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-3 pr-md-4 py-2 shadow-sm bg-white">
                <img src="assets/img/avatars/male-4.jpg" alt="Mike Vandels avatar image" class="avatar avatar-sm flex-shrink-0 mr-3">
                <div class="text-dark mb-0">&ldquo;This company always turns out quality.&rdquo;</div>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-3 pr-md-4 py-2 shadow-sm bg-white">
                <img src="assets/img/avatars/male-5.jpg" alt="Deiter Bohn avatar image" class="avatar avatar-sm flex-shrink-0 mr-3">
                <div class="text-dark mb-0">&ldquo;Jumpstart is, well...
                  <mark>It's pretty great.</mark>&rdquo;</div>
              </div>
            </div>
            <div class="m-2">
              <div class="media rounded align-items-center pl-3 pr-3 pr-md-4 py-2 shadow-sm bg-white">
                <img src="assets/img/avatars/female-5.jpg" alt="Shelley Canning avatar image" class="avatar avatar-sm flex-shrink-0 mr-3">
                <div class="text-dark mb-0">&ldquo;Put your money into this company now.&rdquo;</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pb-0">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">Jumpstart your launch</h3>
            <div class="lead">Save hours on design and development and launch faster.</div>
          </div>
        </div>
        <div class="row justify-content-center text-center mt-md-n4">
          <div class="col-auto">
            <a href="#" class="btn btn-primary btn-lg">Buy Jumpstart</a>
          </div>
        </div>
      </div>
      <div class="divider divider-bottom bg-primary-3 mt-5"></div>
    </section>

   

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

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    
  </body>

</html>
