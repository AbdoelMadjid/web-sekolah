@extends('website.inc.layout-web')
@section('title', 'Sarana Prasarana')
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


    <!-- PORTFOLIO -->
    <section id="work">
        <div class="container">

            <div class="heading-title heading-dotted text-center">
                <h2>Featured Work</h2>
            </div>

            <div class="text-center">
                <ul class="nav nav-pills mix-filter mb-60">
                    <li data-filter="all" class="filter active"><a href="#">All</a></li>
                    <li data-filter="development" class="filter"><a href="#">Development</a></li>
                    <li data-filter="photography" class="filter"><a href="#">Photography</a></li>
                    <li data-filter="design" class="filter"><a href="#">Design</a></li>
                </ul>
            </div>

        </div>
        <div class="container">
            <div id="portfolio" class="portfolio-nogutter">

                <div class="row mix-grid">

                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                        <div class="item-box">
                            <figure>
                                <span class="item-hover">
                                    <span class="overlay dark-5"></span>
                                    <span class="inner">

                                        <!-- lightbox -->
                                        <a class="ico-rounded lightbox"
                                            href="/website/demo_files/images/thematics/construction/w1-min.jpg"
                                            data-plugin-options='{"type":"image"}'>
                                            <span class="fa fa-plus fs-20"></span>
                                        </a>

                                        <!-- details -->
                                        <a class="ico-rounded lightbox" href="ajax/portfolio-detail-modal-6.html"
                                            data-plugin-options='{"type":"ajax", "closeOnBgClick":false}'>
                                            <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                        </a>

                                    </span>
                                </span>

                                <img class="img-fluid" src="/website/demo_files/images/thematics/construction/w1-min.jpg"
                                    width="600" height="399" alt="">
                            </figure>

                            <div class="item-box-desc">
                                <h3>Architect Project</h3>
                                <ul class="list-inline categories m-0">
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Design</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- /item -->


                    <div class="col-md-3 col-sm-3 mix development"><!-- item -->

                        <div class="item-box">
                            <figure>
                                <span class="item-hover">
                                    <span class="overlay dark-5"></span>
                                    <span class="inner">

                                        <!-- lightbox -->
                                        <a class="ico-rounded lightbox"
                                            href="/website/demo_files/images/thematics/construction/w2-min.jpg"
                                            data-plugin-options='{"type":"image"}'>
                                            <span class="fa fa-plus fs-20"></span>
                                        </a>

                                        <!-- details -->
                                        <a class="ico-rounded lightbox" href="ajax/portfolio-detail-modal-6.html"
                                            data-plugin-options='{"type":"ajax", "closeOnBgClick":false}'>
                                            <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                        </a>

                                    </span>
                                </span>

                                <img class="img-fluid" src="/website/demo_files/images/thematics/construction/w2-min.jpg"
                                    width="600" height="399" alt="">
                            </figure>

                            <div class="item-box-desc">
                                <h3>Speaker Design</h3>
                                <ul class="list-inline categories m-0">
                                    <li><a href="#">Audio</a></li>
                                    <li><a href="#">Design</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- /item -->


                    <div class="col-md-3 col-sm-3 mix photography"><!-- item -->

                        <div class="item-box">
                            <figure>
                                <span class="item-hover">
                                    <span class="overlay dark-5"></span>
                                    <span class="inner">

                                        <!-- lightbox -->
                                        <a class="ico-rounded lightbox"
                                            href="/website/demo_files/images/thematics/construction/w3-min.jpg"
                                            data-plugin-options='{"type":"image"}'>
                                            <span class="fa fa-plus fs-20"></span>
                                        </a>

                                        <!-- details -->
                                        <a class="ico-rounded lightbox" href="ajax/portfolio-detail-modal-4.html"
                                            data-plugin-options='{"type":"ajax", "closeOnBgClick":false}'>
                                            <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                        </a>

                                    </span>
                                </span>

                                <img class="img-fluid" src="/website/demo_files/images/thematics/construction/w3-min.jpg"
                                    width="600" height="399" alt="">
                            </figure>

                            <div class="item-box-desc">
                                <h3>Mobile Development</h3>
                                <ul class="list-inline categories m-0">
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Design</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- /item -->


                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                        <div class="item-box">
                            <figure>
                                <span class="item-hover">
                                    <span class="overlay dark-5"></span>
                                    <span class="inner">

                                        <!-- lightbox -->
                                        <a class="ico-rounded lightbox"
                                            href="/website/demo_files/images/thematics/construction/w4-min.jpg"
                                            data-plugin-options='{"type":"image"}'>
                                            <span class="fa fa-plus fs-20"></span>
                                        </a>

                                        <!-- details -->
                                        <a class="ico-rounded" href="portfolio-single-slider.html">
                                            <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                        </a>

                                    </span>
                                </span>

                                <img class="img-fluid" src="/website/demo_files/images/thematics/construction/w4-min.jpg"
                                    width="600" height="399" alt="">
                            </figure>

                            <div class="item-box-desc">
                                <h3>Nature Art</h3>
                                <ul class="list-inline categories m-0">
                                    <li><a href="#">Nature</a></li>
                                    <li><a href="#">Art</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- /item -->


                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                        <div class="item-box">
                            <figure>
                                <span class="item-hover">
                                    <span class="overlay dark-5"></span>
                                    <span class="inner">

                                        <!-- lightbox -->
                                        <a class="ico-rounded lightbox"
                                            href="/website/demo_files/images/thematics/construction/w5-min.jpg"
                                            data-plugin-options='{"type":"image"}'>
                                            <span class="fa fa-plus fs-20"></span>
                                        </a>

                                        <!-- details -->
                                        <a class="ico-rounded" href="portfolio-single-slider.html">
                                            <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                        </a>

                                    </span>
                                </span>

                                <img class="img-fluid" src="/website/demo_files/images/thematics/construction/w5-min.jpg"
                                    width="600" height="399" alt="">
                            </figure>

                            <div class="item-box-desc">
                                <h3>Nature Art</h3>
                                <ul class="list-inline categories m-0">
                                    <li><a href="#">Nature</a></li>
                                    <li><a href="#">Art</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- /item -->


                    <div class="col-md-3 col-sm-3 mix photography"><!-- item -->

                        <div class="item-box">
                            <figure>
                                <span class="item-hover">
                                    <span class="overlay dark-5"></span>
                                    <span class="inner">

                                        <!-- lightbox -->
                                        <a class="ico-rounded lightbox"
                                            href="/website/demo_files/images/thematics/construction/w6-min.jpg"
                                            data-plugin-options='{"type":"image"}'>
                                            <span class="fa fa-plus fs-20"></span>
                                        </a>

                                        <!-- details -->
                                        <a class="ico-rounded" href="portfolio-single-slider.html">
                                            <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                        </a>

                                    </span>
                                </span>

                                <img class="img-fluid" src="/website/demo_files/images/thematics/construction/w6-min.jpg"
                                    width="600" height="399" alt="">
                            </figure>

                            <div class="item-box-desc">
                                <h3>Mobile Development</h3>
                                <ul class="list-inline categories m-0">
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Design</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- /item -->


                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                        <div class="item-box">
                            <figure>
                                <span class="item-hover">
                                    <span class="overlay dark-5"></span>
                                    <span class="inner">

                                        <!-- lightbox -->
                                        <a class="ico-rounded lightbox"
                                            href="/website/demo_files/images/thematics/construction/w7-min.jpg"
                                            data-plugin-options='{"type":"image"}'>
                                            <span class="fa fa-plus fs-20"></span>
                                        </a>

                                        <!-- details -->
                                        <a class="ico-rounded" href="portfolio-single-slider.html">
                                            <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                        </a>

                                    </span>
                                </span>

                                <img class="img-fluid" src="/website/demo_files/images/thematics/construction/w7-min.jpg"
                                    width="600" height="399" alt="">
                            </figure>

                            <div class="item-box-desc">
                                <h3>Nature Art</h3>
                                <ul class="list-inline categories m-0">
                                    <li><a href="#">Nature</a></li>
                                    <li><a href="#">Art</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- /item -->


                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                        <div class="item-box">
                            <figure>
                                <span class="item-hover">
                                    <span class="overlay dark-5"></span>
                                    <span class="inner">

                                        <!-- lightbox -->
                                        <a class="ico-rounded lightbox"
                                            href="/website/demo_files/images/thematics/construction/w8-min.jpg"
                                            data-plugin-options='{"type":"image"}'>
                                            <span class="fa fa-plus fs-20"></span>
                                        </a>

                                        <!-- details -->
                                        <a class="ico-rounded" href="portfolio-single-slider.html">
                                            <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                        </a>

                                    </span>
                                </span>

                                <img class="img-fluid" src="/website/demo_files/images/thematics/construction/w8-min.jpg"
                                    width="600" height="399" alt="">
                            </figure>

                            <div class="item-box-desc">
                                <h3>Nature Art</h3>
                                <ul class="list-inline categories m-0">
                                    <li><a href="#">Nature</a></li>
                                    <li><a href="#">Art</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- /item -->


                </div>

            </div>
        </div>
    </section>
    <!-- /PORTFOLIO -->


@endsection
@section('plugin')

@endsection
