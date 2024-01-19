@extends('website.inc.layout-web')
@section('title', 'Go Blog')
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

    <!-- News -->
    <section id="news">
        <div class="container">

            <div class="row">

                <!-- RIGHT -->
                <div class="col-lg-9 col-md-9 col-sm-9 order-lg-2 order-md-2 order-sm-2">

                    <h2>Blog News <span class="fs-18">/ Church news!</span></h2>

                    <!-- news item -->
                    <div class="inews-item">
                        <a class="inews-thumbnail" href="#">
                            <span class="inews-sticky font-lato">
                                <i class="fa fa-bullhorn"></i>
                                STICKY POST
                            </span>
                            <img class="img-fluid" src="/website/demo_files/images/thematics/church/church_thumb_1-min.jpg"
                                alt="image" />
                        </a>

                        <div class="inews-item-content">

                            <div class="inews-date-wrapper">
                                <span class="inews-date-day">29</span>
                                <span class="inews-date-month">June</span>
                                <span class="inews-date-year">2015</span>
                            </div>

                            <div class="inews-content-inner">

                                <h3 class="fs-20"><a href="#">Lorem Upsum Dolor</a></h3>
                                <ul class="blog-post-info list-inline b-0 mb-20 p-0">
                                    <li>
                                        <a href="page-profile.html">
                                            <i class="fa fa-user"></i>
                                            <span class="font-lato">By John Doe</span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-folder-open-o"></i>

                                        <a class="category" href="#">
                                            <span class="font-lato">Design</span>
                                        </a>
                                        <a class="category" href="#">
                                            <span class="font-lato">Photography</span>
                                        </a>
                                    </li>
                                </ul>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
                                    labore et dolore magna aliqua. Idque Caesaris facere voluntate liceret: sese habere....
                                </p>
                            </div>


                        </div>
                    </div>
                    <!-- /news item -->

                    <!-- news item -->
                    <div class="inews-item">
                        <a class="inews-thumbnail" href="#">
                            <img class="img-fluid" src="/website/demo_files/images/thematics/church/church_thumb_2-min.jpg"
                                alt="image" />
                        </a>

                        <div class="inews-item-content">

                            <div class="inews-date-wrapper">
                                <span class="inews-date-day">29</span>
                                <span class="inews-date-month">June</span>
                                <span class="inews-date-year">2015</span>
                            </div>

                            <div class="inews-content-inner">

                                <h3 class="fs-20"><a href="#">Lorem Upsum Dolor</a></h3>
                                <ul class="blog-post-info list-inline b-0 mb-20 p-0">
                                    <li>
                                        <a href="page-profile.html">
                                            <i class="fa fa-user"></i>
                                            <span class="font-lato">By John Doe</span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-folder-open-o"></i>

                                        <a class="category" href="#">
                                            <span class="font-lato">Design</span>
                                        </a>
                                        <a class="category" href="#">
                                            <span class="font-lato">Photography</span>
                                        </a>
                                    </li>
                                </ul>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
                                    labore et dolore magna aliqua. Idque Caesaris facere voluntate liceret: sese habere....
                                </p>
                            </div>


                        </div>
                    </div>
                    <!-- /news item -->

                    <!-- news item -->
                    <div class="inews-item">
                        <a class="inews-thumbnail" href="#">
                            <img class="img-fluid" src="/website/demo_files/images/thematics/church/church_thumb_3-min.jpg"
                                alt="image" />
                        </a>

                        <div class="inews-item-content">

                            <div class="inews-date-wrapper">
                                <span class="inews-date-day">29</span>
                                <span class="inews-date-month">June</span>
                                <span class="inews-date-year">2015</span>
                            </div>

                            <div class="inews-content-inner">

                                <h3 class="fs-20"><a href="#">Lorem Upsum Dolor</a></h3>
                                <ul class="blog-post-info list-inline b-0 mb-20 p-0">
                                    <li>
                                        <a href="page-profile.html">
                                            <i class="fa fa-user"></i>
                                            <span class="font-lato">By John Doe</span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-folder-open-o"></i>

                                        <a class="category" href="#">
                                            <span class="font-lato">Design</span>
                                        </a>
                                        <a class="category" href="#">
                                            <span class="font-lato">Photography</span>
                                        </a>
                                    </li>
                                </ul>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
                                    labore et dolore magna aliqua. Idque Caesaris facere voluntate liceret: sese habere....
                                </p>
                            </div>


                        </div>
                    </div>
                    <!-- /news item -->

                </div>

                <!-- LEFT -->
                <div class="col-lg-3 col-md-3 col-sm-3 order-lg-1 order-md-1 order-sm-1">

                    <h3 class="mt-8">Twitter Feed</h3>

                    {{--                     <!--
                    data-php="php/twitter/tweet.php"	- widget php path
                    data-username="stepofweb"			- twitter username
                    data-limit="3"						- maximum twwts to load

                    PLEASE NOTE!
                    php/_cache/ - folder should be writable by the webserver!
                      - it's used to cache tweets
                   --> --}}
                    <ul class="widget-twitter mb-20" data-php="php/twitter/tweet.php" data-username="stepofweb"
                        data-limit="3">
                        <li></li>
                    </ul>

                    <!-- Soundcloud Widget -->
                    <iframe style="width:100%; height:166px"
                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/52246021&amp;color=a94545&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>

                </div>

            </div>

        </div>
    </section>
    <!-- /News -->



@endsection
@section('plugin')

@endsection
