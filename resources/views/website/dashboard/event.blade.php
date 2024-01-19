@extends('website.inc.layout-web')
@section('title', 'Event / Kegiatan')
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
    @include('website.inc.page_title', ['bc_1' => 'My Schools'])

    <!-- Events -->
    <section id="events">
        <div class="container">

            <header class="text-center mb-60 clearfix">
                <h2 class="fw-300 mb-0">UPCOMING <strong>EVENTS</strong></h2>
            </header>

            <ul class="list-unstyled">

                <li class="clearfix border-bottom-dotted relative mb-10">
                    <a class="clearfix fs-20 block relative p-10" href="#">
                        <span class="float-right text-black fs-14">29 June 2017 / 09:00am - 12:00 pm</span>
                        FASHION GABANNA
                    </a>
                </li>

                <li class="clearfix border-bottom-dotted relative mb-10">
                    <a class="clearfix fs-20 block relative p-10" href="#">
                        <span class="float-right text-black fs-14">29 June 2017 / 09:00am - 12:00 pm</span>
                        FASHION VERSAICE
                    </a>
                </li>

                <li class="clearfix border-bottom-dotted relative mb-10">
                    <a class="clearfix fs-20 block relative p-10" href="#">
                        <span class="float-right text-black fs-14">29 June 2017 / 09:00am - 12:00 pm</span>
                        NEW VERSAICE TREND
                    </a>
                </li>

                <li class="clearfix border-bottom-dotted relative mb-10">
                    <a class="clearfix fs-20 block relative p-10" href="#">
                        <span class="float-right text-black fs-14">29 June 2017 / 09:00am - 12:00 pm</span>
                        HALLOWEEN FASHION PARTY
                    </a>
                </li>

            </ul>

        </div>
    </section>
    <!-- /Events -->

    <!-- Upcoming Events -->
    <section id="events">
        <div class="container">

            <h3>UPCOMING EVENTS /<span class="fs-16 fw-400">see you soon!</span></h3>

            <div class="row">

                <div class="col-sm-4">

                    <h4><i class="glyphicon glyphicon-option-vertical"></i> Ordered By Date</h4>

                    <div class="event-item">
                        <div class="event-date-wrapper">
                            <span class="event-date-day">02</span>
                            <span class="event-date-month">April</span>
                        </div>
                        <div class="event-content-wrapper">
                            <div class="event-content-inner-wrapper">
                                <h3 class="event-title"><a href="#">New York</a></h3>
                                <div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
                            </div>
                            <div class="event-status-wrapper">
                                <a href="#">Buy Ticket</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date-wrapper">
                            <span class="event-date-day">03</span>
                            <span class="event-date-month">April</span>
                        </div>
                        <div class="event-content-wrapper">
                            <div class="event-content-inner-wrapper">
                                <h3 class="event-title"><a href="#">New York</a></h3>
                                <div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
                            </div>
                            <div class="event-status-wrapper">
                                <a href="#">Buy Ticket</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date-wrapper">
                            <span class="event-date-day">04</span>
                            <span class="event-date-month">April</span>
                        </div>
                        <div class="event-content-wrapper">
                            <div class="event-content-inner-wrapper">
                                <h3 class="event-title"><a href="#">New York</a></h3>
                                <div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
                            </div>
                            <div class="event-status-wrapper">
                                <a href="#">Buy Ticket</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-4">

                    <h4><i class="glyphicon glyphicon-option-vertical"></i> Ordered By Title</h4>

                    <div class="event-item">
                        <div class="event-date-wrapper">
                            <span class="event-date-day">08</span>
                            <span class="event-date-month">April</span>
                        </div>
                        <div class="event-content-wrapper">
                            <div class="event-content-inner-wrapper">
                                <h3 class="event-title"><a href="#">New York</a></h3>
                                <div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
                            </div>
                            <div class="event-status-wrapper">
                                <a href="#">Buy Ticket</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date-wrapper">
                            <span class="event-date-day">09</span>
                            <span class="event-date-month">April</span>
                        </div>
                        <div class="event-content-wrapper">
                            <div class="event-content-inner-wrapper">
                                <h3 class="event-title"><a href="#">New York</a></h3>
                                <div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
                            </div>
                            <div class="event-status-wrapper">
                                <a href="#">Buy Ticket</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date-wrapper">
                            <span class="event-date-day">10</span>
                            <span class="event-date-month">April</span>
                        </div>
                        <div class="event-content-wrapper">
                            <div class="event-content-inner-wrapper">
                                <h3 class="event-title"><a href="#">New York</a></h3>
                                <div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
                            </div>
                            <div class="event-status-wrapper">
                                <a href="#">Buy Ticket</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-4">

                    <h4><i class="glyphicon glyphicon-option-vertical"></i> Order Randomly</h4>

                    <div class="event-item">
                        <div class="event-date-wrapper">
                            <span class="event-date-day">14</span>
                            <span class="event-date-month">April</span>
                        </div>
                        <div class="event-content-wrapper">
                            <div class="event-content-inner-wrapper">
                                <h3 class="event-title"><a href="#">New York</a></h3>
                                <div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
                            </div>
                            <div class="event-status-wrapper">
                                <a href="#">Buy Ticket</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date-wrapper">
                            <span class="event-date-day">15</span>
                            <span class="event-date-month">April</span>
                        </div>
                        <div class="event-content-wrapper">
                            <div class="event-content-inner-wrapper">
                                <h3 class="event-title"><a href="#">New York</a></h3>
                                <div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
                            </div>
                            <div class="event-status-wrapper">
                                <a href="#">Buy Ticket</a>
                            </div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date-wrapper">
                            <span class="event-date-day">16</span>
                            <span class="event-date-month">April</span>
                        </div>
                        <div class="event-content-wrapper">
                            <div class="event-content-inner-wrapper">
                                <h3 class="event-title"><a href="#">New York</a></h3>
                                <div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
                            </div>
                            <div class="event-status-wrapper">
                                <a href="#">Buy Ticket</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>
    <!-- /Upcoming Events -->
    <!-- News -->
    <section id="news">
        <div class="container">


            <header class="text-center mb-60 clearfix">
                <h2 class="fw-300 mb-0">Recent News</h2>
            </header>

            {{--             <!--
                    controlls-over		= navigation buttons over the image
                    buttons-autohide 	= navigation buttons visible on mouse hover only

                    data-plugin-options:
                        "singleItem": true
                        "autoPlay": true (or ms. eg: 4000)
                        "navigation": true
                        "pagination": true
                        "items": "4"

                    owl-carousel item paddings
                        .owl-padding-0
                        .owl-padding-3
                        .owl-padding-6
                        .owl-padding-10
                        .owl-padding-15
                        .owl-padding-20
                --> --}}
            <div class="owl-carousel owl-padding-10 buttons-autohide controlls-over"
                data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="/website/demo_files/images/451x300/24-min.jpg" alt="">
                    </a>

                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                        quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="/website/demo_files/images/451x300/17-min.jpg" alt="">
                    </a>

                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                        quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="/website/demo_files/images/451x300/30-min.jpg" alt="">
                    </a>

                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                        quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="/website/demo_files/images/451x300/26-min.jpg" alt="">
                    </a>

                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                        quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="/website/demo_files/images/451x300/18-min.jpg" alt="">
                    </a>
                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                        quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="/website/demo_files/images/451x300/34-min.jpg" alt="">
                    </a>
                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                        quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="/website/demo_files/images/451x300/37-min.jpg" alt="">
                    </a>
                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                        quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="/website/demo_files/images/451x300/23-min.jpg" alt="">
                    </a>
                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                        quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- /News -->


@endsection
@section('plugin')

@endsection
