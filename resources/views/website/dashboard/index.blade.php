@extends('website.inc.layout-web')
@section('title', 'Beranda')
@section('css_link')
    <!-- LAYER SLIDER -->
    <link href="/website/assets/plugins/slider.layerslider/css/layerslider.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION SLIDER -->
    <link href="/website/assets/plugins/slider.revolution.v5/css/pack.css" rel="stylesheet" type="text/css" />
    <link href="/website/assets/plugins/slider.revolution.v5/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet"
        type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet"
        type="text/css" media="all" />
    <link href="http://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet" property="stylesheet" type="text/css"
        media="all">
@endsection

@section('content-web')
    @include('website.inc.slide_03')
    <!-- /LAYER SLIDER -->
    <div class="container mt-50">
        <div class="text-center">
            <h1>Welcome! Website <span>SMKN 1 KADIPATEN</span>.</h1>
            <h2 class="col-sm-10 offset-sm-1 mb-0 fw-400">
                Salah satu Sekolah Menengah Kejuruan di Kabupaten
                Majalengka yang Berbasis Ramah Anak dan
                Inklusif
            </h2>
        </div>
    </div>

    <div class="container mt-50 mb-100">
        <div class="heading-title heading-dotted text-center">
            <h3>Sambutan <span>Kepala Sekolah</span></h3>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                    <div class="front">
                        <div class="box1 box-default">
                            <div class="box-icon-title">
                                <img class="img-fluid" src="/img/kepsek2.png" alt="" />
                                <h2>H. Damudin S.Pd., M.Pd.</h2>
                                <small>Kepala Sekolah</small>
                            </div>
                        </div>
                    </div>

                    <div class="back">
                        <div class="box2 box-default">
                            <h4 class="m-0">H. Damudin S.Pd., M.Pd.</h4>
                            <small>Kepala Sekolah</small>

                            <hr />

                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                venenatis dapibus posuere</p>

                            <hr />

                            <a href="#" class="social-icon social-icon-sm social-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon social-icon-sm social-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon social-icon-sm social-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, quaerat, sequi, architecto
                    consequuntur
                    quae placeat expedita facilis reprehenderit facere accusamus asperiores nam odit neque excepturi
                    aut a
                    dolor quisquam reiciendis dignissimos at molestiae tenetur fugit fuga. Vitae, numquam, assumenda
                    cupiditate sint quam asperiores quae aut nemo ipsa ut mollitia rem necessitatibus officiis
                    eveniet cum
                    deleniti dolorum nostrum odio laudantium inventore autem dolore amet enim magni vel? Vero
                    voluptas
                    maxime dolore.</p>
                <p>
                    Quam, quaerat, sequi, architecto consequuntur quae placeat expedita facilis reprehenderit facere
                    accusamus asperiores nam odit neque excepturi aut a dolor quisquam reiciendis dignissimos at
                    molestiae
                    tenetur fugit fuga. Vitae, numquam, assumenda cupiditate sint quam asperiores quae aut nemo ipsa
                    ut
                    mollitia rem necessitatibus officiis eveniet cum deleniti dolorum nostrum odio laudantium
                    inventore
                    autem dolore amet enim magni vel? Quam, quaerat, sequi, architecto consequuntur quae placeat
                    expedita
                    facilis reprehenderit facere accusamus asperiores nam odit neque excepturi assumenda cupiditate
                    sint
                    quam asperiores quae aut nemo ipsa ut mollitia rem necessitatibus.
                </p>
            </div>
        </div>
    </div>
    <!-- CALLOUT -->
    <section class="callout-dark heading-title heading-arrow-bottom">
        <div class="container">
            <div class="text-center">
                <h3 class="fs-30">Smarty Multipurpose Responsive Template</h3>
                <p>We can't solve problems by using the same kind of thinking we used when we created them.</p>
            </div>
        </div>
    </section>
    <!-- /CALLOUT -->

    <!-- Do Not Miss -->
    <section id="donotmiss">
        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <div class="box-static box-border-top">
                        <div class="box-title">
                            <h4>Do Not Miss</h4>
                        </div>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis
                            dapibus.</p>
                        <p><small>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                venenatis.</small></p>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1" style="background-color:#a0ce4e;">
                                <div class="box-icon-title">
                                    <i class="et-profile-male"></i>
                                    <h2>Bible Study</h2>
                                </div>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                    venenatis dapibus posuere</p>
                            </div>
                        </div>

                        <div class="back">
                            <div class="box2" style="background-color:#a0ce4e;">
                                <h4>Bible Study</h4>
                                <hr />
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                    venenatis dapibus posuere</p>
                                <a href="#" class="btn btn-block btn-translucid">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1" style="background-color:#cb9536;">
                                <div class="box-icon-title">
                                    <i class="et-puzzle"></i>
                                    <h2>Outserch Ministry</h2>
                                </div>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                    venenatis dapibus posuere</p>
                            </div>
                        </div>

                        <div class="back">
                            <div class="box2" style="background-color:#cb9536;">
                                <h4>Outserch Ministry</h4>
                                <hr />
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                    venenatis dapibus posuere</p>
                                <a href="#" class="btn btn-block btn-translucid">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1" style="background-color:#73b9dc;">
                                <div class="box-icon-title">
                                    <i class="et-flag"></i>
                                    <h2>Teens Camp</h2>
                                </div>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                    venenatis dapibus posuere</p>
                            </div>
                        </div>

                        <div class="back">
                            <div class="box2" style="background-color:#73b9dc;">
                                <h4>Teens Camp</h4>
                                <hr />
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                    venenatis dapibus posuere</p>
                                <a href="#" class="btn btn-block btn-translucid">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- /Do Not Miss -->

    <!-- Services -->
    <section class="services">
        <div class="container">
            <!--
             LTR INFO: box-icon-left or box-icon-right - are the same on LTR
             -->
            <div class="row">

                <div class="col-sm-4">

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-graduation-cap"></i>
                            <h2>Education Organization</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis
                            dapibus posuere velit aliquet.</p>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-paper-plane"></i>
                            <h2>Training Center</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis
                            dapibus posuere velit aliquet.</p>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-ticket"></i>
                            <h2>Event Tickets</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis
                            dapibus posuere velit aliquet.</p>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <h2>Online Shop</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis
                            dapibus posuere velit aliquet.</p>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-cubes"></i>
                            <h2>No Limitation</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis
                            dapibus posuere velit aliquet.</p>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-star"></i>
                            <h2>Great Support</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis
                            dapibus posuere velit aliquet.</p>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- /Services -->

    <div class="container mt-100">
        <article class="row">
            <div class="col-md-6">
                <!-- OWL SLIDER -->
                <div class="owl-carousel buttons-autohide controlls-over m-0"
                    data-plugin-options='{"items": 1, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"backSlide", "progressBar":"true"}'>
                    <div><img class="img-fluid" src="/website/demo_files/images/mockups/800x553/18-min.jpg"
                            alt="">
                    </div>
                    <div><img class="img-fluid" src="/website/demo_files/images/mockups/800x553/17-min.jpg"
                            alt="">
                    </div>
                    <div><img class="img-fluid" src="/website/demo_files/images/mockups/800x553/3-min.jpg"
                            alt="">
                    </div>
                    <div><img class="img-fluid" src="/website/demo_files/images/mockups/800x553/2-min.jpg"
                            alt="">
                    </div>
                </div>
                <!-- /OWL SLIDER -->
            </div>
            <div class="col-md-6">
                <h3>Smarty : Four Areas of Expertise</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam.</p>

                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem.</p>

                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                    velit.
                </p>

                <p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

            </div>
        </article>
    </div>

    <div class="container mt-50">
        <div class="heading-title heading-dotted text-center">
            <h3>Yu cari tahu.. <span>Konsentrasi Keahlian</span></h3>
        </div>

    </div>

    <div class="container mt-50">
        <div class="heading-title heading-dotted text-center">
            <h3>H3 Heading <span>Center Dotted</span></h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="heading-title heading-border-bottom heading-color">
                    <h3>Passion</h3>
                </div>
                <div class="owl-carousel buttons-autohide controlls-over"
                    data-plugin-options='{"singleItem": true, "autoPlay": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
                    <div>
                        <img class="img-fluid" src="/website/demo_files/images/1200x800/16-min.jpg" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="/website/demo_files/images/1200x800/17-min.jpg" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="/website/demo_files/images/1200x800/18-min.jpg" alt="">
                    </div>
                </div>
                <p>Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel
                    fastidii
                    propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</p>
                <a href="#">
                    Read
                    <!-- /word rotator -->
                    <span class="word-rotator" data-delay="2000">
                        <span class="items">
                            <span>more</span>
                            <span>now</span>
                        </span>
                    </span><!-- /word rotator -->
                    <i class="glyphicon glyphicon-menu-right fs-12"></i>
                </a>

            </div>
            <div class="col-md-4">
                <div class="heading-title heading-border-bottom heading-color">
                    <h3>Precision</h3>
                </div>
                <div class="owl-carousel buttons-autohide controlls-over"
                    data-plugin-options='{"singleItem": true, "autoPlay": true, "navigation": true, "pagination": true, "transitionStyle":"backSlide"}'>
                    <div>
                        <img class="img-fluid" src="/website/demo_files/images/1200x800/8-min.jpg" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="/website/demo_files/images/1200x800/9-min.jpg" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="/website/demo_files/images/1200x800/10-min.jpg" alt="">
                    </div>
                </div>
                <p>Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel
                    fastidii
                    propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</p>
                <a href="#">
                    Read
                    <!-- /word rotator -->
                    <span class="word-rotator" data-delay="2000">
                        <span class="items">
                            <span>more</span>
                            <span>now</span>
                        </span>
                    </span><!-- /word rotator -->
                    <i class="glyphicon glyphicon-menu-right fs-12"></i>
                </a>
            </div>
            <div class="col-md-4">
                <div class="heading-title heading-border-bottom heading-color">
                    <h3>Simplicity</h3>
                </div>
                <div class="owl-carousel buttons-autohide controlls-over"
                    data-plugin-options='{"singleItem": true, "autoPlay": true, "navigation": true, "pagination": true, "transitionStyle":"goDown"}'>
                    <div>
                        <img class="img-fluid" src="/website/demo_files/images/1200x800/11-min.jpg" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="/website/demo_files/images/1200x800/12-min.jpg" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="/website/demo_files/images/1200x800/13-min.jpg" alt="">
                    </div>
                </div>
                <p>Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel
                    fastidii
                    propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</p>

                <a href="#">
                    Read
                    <!-- /word rotator -->
                    <span class="word-rotator" data-delay="2000">
                        <span class="items">
                            <span>more</span>
                            <span>now</span>
                        </span>
                    </span><!-- /word rotator -->
                    <i class="glyphicon glyphicon-menu-right fs-12"></i>
                </a>

            </div>

        </div>

    </div>

    <div class="container mt-100">
        <div class="heading-title heading-dotted text-center">
            <h3>Sekolah kita <span>di Channel</span></h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- YOUTUBE VIDEO -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/toqQDEONYK0?si=0DzKx71fmdLquWtz" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/KUsoT_EPkhg?si=DHDiE9mNrW49d01j" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- CALLOUT -->
        <div class="alert alert-transparent bordered-bottom m-0">
            <div class="container">

                <div class="row">

                    <div class="col-md-9 col-sm-12"><!-- left text -->
                        <h3>Silakan cek <span><strong>Channel Youtube</strong></span> SMKN 1 Kadipaten</h3>
                        <p class="font-lato fw-300 fs-20 mb-0">
                            Jangan lupa subscribe, like and comment
                        </p>
                    </div><!-- /left text -->


                    <div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
                        <a href="https://www.youtube.com/@smknegeri1kadipaten-majalengka" rel="nofollow" target="_blank"
                            class="btn btn-primary btn-lg">Lihat Video Lainnya</a>
                    </div><!-- /right btn -->

                </div>

            </div>
        </div>
        <!-- /CALLOUT -->
    </div>

    <div class="container mt-50">
        <div class="row">
            <div class="col-md-6">
                <div class="heading-title heading-dotted">
                    <h3>Testimonial <span>pengunjung</span></h3>
                </div>
                <div class="owl-carousel text-center owl-mini-testimonial m-0"
                    data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"backSlide"}'>

                    <div class="testimonial">
                        <figure>
                            <img class="rounded" src="/website/demo_files/images/people/300x300/11-min.jpg"
                                alt="" />
                        </figure>
                        <div class="testimonial-content p-0">
                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam
                                cum
                                libero.</p>
                            <cite>
                                Joana Doe
                                <span>Company Ltd.</span>
                            </cite>
                        </div>
                    </div>

                    <div class="testimonial">
                        <figure>
                            <img class="rounded" src="/website/demo_files/images/people/300x300/12-min.jpg"
                                alt="" />
                        </figure>
                        <div class="testimonial-content p-0">
                            <p>Quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
                            <cite>
                                Melissa Doe
                                <span>Company Ltd.</span>
                            </cite>
                        </div>
                    </div>
                    <div class="testimonial">
                        <figure>
                            <img class="rounded" src="/website/demo_files/images/people/300x300/9-min.jpg"
                                alt="" />
                        </figure>
                        <div class="testimonial-content p-0">
                            <p>Quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
                            <cite>
                                Melissa Doe
                                <span>Company Ltd.</span>
                            </cite>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <!-- H3 -->
                <div class="heading-title heading-dotted text-right">
                    <h3>Blockquote <span>Orang Terkenal</span></h3>
                </div>
                <div class="owl-carousel text-center owl-mini-testimonial m-0"
                    data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": true, "transitionStyle":"fadeUp"}'>
                    <blockquote class="quote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                            sodales
                            sed, dignissim pretium nunc.</p>
                        <cite>Albert Einstein</cite>
                    </blockquote>
                    <blockquote class="quote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                            sodales
                            sed,
                            dignissim pretium nunc.</p>
                        <cite>Roberto Carlos</cite>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="divider divider-dotted"><!-- divider --></div>
    </div>
    <!-- VISUAL CHART -->
    <section class="bb-0">

        <!--
                         Available Classes/Colors
                          .cart-visual-warning
                          .cart-visual-info
                          .cart-visual-success
                          .cart-visual-danger
                          .cart-visual-default
                        -->
        <div class="clearfix mt-60 cart-visual cart-visual-warning">

            <svg id="cart-visual-svg-1" height="0" width="100%" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 1096 131.25" style="height: 140px;" xml:space="preserve">
                <path
                    d="M782,49.418c-58.667-24.667-118.602-46-249.334-46s-159.43,36.157-209.333,62.207C259.04,99.186,0,131.25,0,131.25h1096C1096,131.25,840.667,74.085,782,49.418z">
                </path>
            </svg>

            <svg id="cart-visual-svg-2" height="0" width="100%" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 1133.338 144.499" style="height: 195px;" xml:space="preserve">
                <path
                    d="M948.868,144.499H0V72.249c26.67-9.407,66.707-19.582,119.535-19.582c133.999,0,227.999,39.333,332.665,39.333c80,0,142.667-36.666,174.667-52.666S716.201,0,804.201,0s144.667,20,144.667,20c44.173,10.997,122.713,47.543,184.47,78.215v46.284H948.868z">
                </path>
            </svg>

            <div class="container">

                <div class="row">

                    <div class="col-6 col-md-3 mt--30 pb-180">
                        <div class="cart-visual-pin">
                            <div class="cart-visual-pin-ball">&nbsp;</div>
                        </div>
                        <div class="pl-20 pr-20">
                            <h2><i class="countTo" data-speed="1600">6000</i>+</h2>
                            <p class="fw--300">Happy Returning Customers</p>
                            <a href="#" class="marker-more">More +</a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-80">
                        <div class="cart-visual-pin">
                            <div class="cart-visual-pin-ball">&nbsp;</div>
                        </div>
                        <div class="pl-20 pr-20">
                            <h2><i class="countTo" data-speed="1300">100</i>%</h2>
                            <p class="fw--300">Money back gurantee</p>
                            <a href="#" class="marker-more">More +</a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-60">
                        <div class="cart-visual-pin">
                            <div class="cart-visual-pin-ball">&nbsp;</div>
                        </div>
                        <div class="pl-20 pr-20">
                            <h2><i class="countTo" data-speed="900">235</i>%</h2>
                            <p class="fw--300">Average customer growth</p>
                            <a href="#" class="marker-more">More +</a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-0">
                        <div class="cart-visual-pin">
                            <div class="cart-visual-pin-ball">&nbsp;</div>
                        </div>
                        <div class="pl-20 pr-20">
                            <h2><i class="countTo" data-speed="2000">250000</i></h2>
                            <p class="fw--300">Work hours saved last 12 months</p>
                            <a href="#" class="marker-more">More +</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- /VISUAL CHART -->
    <!-- BUTTON CALLOUT -->
    <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
        <span class="font-lato fs-30">
            Did Smarty convinced you?
            <strong>Purchase now &raquo;</strong>
        </span>
    </a>
    <!-- /BUTTON CALLOUT -->
@endsection
@section('plugin')

    <!-- LAYER SLIDER -->
    <script src="/website/assets/plugins/slider.layerslider/js/layerslider_pack.js"></script>
    <script src="/website/assets/js/view/demo.layerslider_slider.js"></script>

    <!-- REVOLUTION SLIDER -->
    <script src="/website/assets/plugins/slider.revolution.v5/js/jquery.themepunch.tools.min.js"></script>
    <script src="/website/assets/plugins/slider.revolution.v5/js/jquery.themepunch.revolution.min.js"></script>
    <script type='text/javascript'
        src='/website/assets/plugins/slider.revolution.v5/revolution-addons/slicey/js/revolution.addon.slicey.min.js?ver=1.0.0'>
    </script>

    <script>
        jQuery(document).ready(function() {
            if (jQuery("#rev_slider_28_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_28_1");
            } else {
                revapi28 = jQuery("#rev_slider_28_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: plugin_path + "slider.revolution.v5/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 5500,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "hermes",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "60px",
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

            if (revapi28) revapi28.revSliderSlicey();
        });
    </script>
@endsection
