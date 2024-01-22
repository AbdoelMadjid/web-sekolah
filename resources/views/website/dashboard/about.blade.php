@extends('website.inc.layout-web')
@section('title', 'About Us')
@section('css_link')

@endsection

@section('content-web')
    @include('website.inc.page_title')
    <section>
        <div class="container">

            <header class="mb-60 text-center">
                <h2>Smarty Recent Works</h2>
                <p class="lead font-lato">We believe in Simple &amp; Creative</p>
                <hr />
            </header>

            <div class="row mix-grid mt-80">

                <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                    <div class="item-box">
                        <figure>
                            <span class="item-hover">
                                <span class="overlay dark-5"></span>
                                <span class="inner">

                                    <!-- lightbox -->
                                    <a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/8-min.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                        <span class="fa fa-plus fs-20"></span>
                                    </a>

                                    <!-- details -->
                                    <a class="ico-rounded" href="portfolio-single-slider.html">
                                        <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                    </a>

                                </span>
                            </span>

                            <!-- carousel -->
                            <div class="owl-carousel buttons-autohide controlls-over m-0"
                                data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
                                <div>
                                    <img class="img-fluid" src="demo_files/images/mockups/600x399/8-min.jpg" width="600"
                                        height="399" alt="">
                                </div>
                                <div>
                                    <img class="img-fluid" src="demo_files/images/mockups/600x399/9-min.jpg" width="600"
                                        height="399" alt="">
                                </div>
                                <div>
                                    <img class="img-fluid" src="demo_files/images/mockups/600x399/10-min.jpg" width="600"
                                        height="399" alt="">
                                </div>
                            </div>
                            <!-- /carousel -->


                        </figure>

                        <div class="item-box-desc">
                            <h3>Street Photography</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-4 col-sm-4 mix development"><!-- item -->

                    <div class="item-box">
                        <figure>
                            <span class="item-hover">
                                <span class="overlay dark-5"></span>
                                <span class="inner">

                                    <!-- lightbox -->
                                    <a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/9-min.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                        <span class="fa fa-plus fs-20"></span>
                                    </a>

                                    <!-- details -->
                                    <a class="ico-rounded" href="portfolio-single-slider.html">
                                        <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                    </a>

                                </span>
                            </span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/9-min.jpg" width="600"
                                height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Nature Photography</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-4 col-sm-4 mix photography"><!-- item -->

                    <div class="item-box">
                        <figure>
                            <span class="item-hover">
                                <span class="overlay dark-5"></span>
                                <span class="inner">

                                    <!-- lightbox -->
                                    <a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/10-min.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                        <span class="fa fa-plus fs-20"></span>
                                    </a>

                                    <!-- details -->
                                    <a class="ico-rounded" href="portfolio-single-slider.html">
                                        <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                    </a>

                                </span>
                            </span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/10-min.jpg" width="600"
                                height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Fashion Design</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                    <div class="item-box">
                        <figure>
                            <span class="item-hover">
                                <span class="overlay dark-5"></span>
                                <span class="inner">

                                    <!-- lightbox -->
                                    <a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/11-min.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                        <span class="fa fa-plus fs-20"></span>
                                    </a>

                                    <!-- details -->
                                    <a class="ico-rounded" href="portfolio-single-slider.html">
                                        <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                    </a>

                                </span>
                            </span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/11-min.jpg" width="600"
                                height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Ocean Project</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                    <div class="item-box">
                        <figure>
                            <span class="item-hover">
                                <span class="overlay dark-5"></span>
                                <span class="inner">

                                    <!-- lightbox -->
                                    <a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/12-min.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                        <span class="fa fa-plus fs-20"></span>
                                    </a>

                                    <!-- details -->
                                    <a class="ico-rounded" href="portfolio-single-slider.html">
                                        <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                    </a>

                                </span>
                            </span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/12-min.jpg" width="600"
                                height="399" alt="">
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


                <div class="col-md-4 col-sm-4 mix development"><!-- item -->

                    <div class="item-box">
                        <figure>
                            <span class="item-hover">
                                <span class="overlay dark-5"></span>
                                <span class="inner">

                                    <!-- lightbox -->
                                    <a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/13-min.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                        <span class="fa fa-plus fs-20"></span>
                                    </a>

                                    <!-- details -->
                                    <a class="ico-rounded" href="portfolio-single-slider.html">
                                        <span class="glyphicon glyphicon-option-horizontal fs-20"></span>
                                    </a>

                                </span>
                            </span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/13-min.jpg" width="600"
                                height="399" alt="">
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

            </div>

            <!-- callout -->
            <div class="callout alert alert-border mt-60">

                <div class="row">

                    <div class="col-md-8 col-sm-8"><!-- left text -->
                        <h4>Call now at <strong>+800-565-2390</strong> and get 15% discount!</h4>
                        <p class="font-lato fs-17">
                            We truly care about our users and our product.
                        </p>
                    </div><!-- /left text -->


                    <div class="col-md-4 col-sm-4 text-right"><!-- right btn -->
                        <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-default btn-lg fs-15">PURCHASE
                            NOW</a>
                    </div><!-- /right btn -->

                </div>

            </div>
            <!-- /callout -->


            <!-- testimonials -->
            <div class="testimonial-bordered">

                <div class="owl-carousel text-center owl-testimonial m-0"
                    data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
                    <div class="testimonial">
                        <figure>
                            <img class="rounded" src="demo_files/images/people/300x300/11-min.jpg" alt="" />
                        </figure>
                        <div class="testimonial-content p-0">
                            <p class="lead">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam
                                quibusdam cum libero.</p>
                            <cite>
                                Joana Doe
                                <span>Company Ltd.</span>
                            </cite>
                        </div>
                    </div>

                    <div class="testimonial">
                        <figure>
                            <img class="rounded" src="demo_files/images/people/300x300/12-min.jpg" alt="" />
                        </figure>
                        <div class="testimonial-content p-0">
                            <p class="lead">Quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
                            <cite>
                                Melissa Doe
                                <span>Company Ltd.</span>
                            </cite>
                        </div>
                    </div>

                    <div class="testimonial">
                        <figure>
                            <img class="rounded" src="demo_files/images/people/300x300/d-min.jpg" alt="" />
                        </figure>
                        <div class="testimonial-content p-0">
                            <p class="lead">Deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum
                                libero illo rerum.</p>
                            <cite>
                                John Doe
                                <span>Company Ltd.</span>
                            </cite>
                        </div>
                    </div>

                    <div class="testimonial">
                        <figure>
                            <img class="rounded" src="demo_files/images/people/300x300/c-min.jpg" alt="" />
                        </figure>
                        <div class="testimonial-content p-0">
                            <p class="lead">Fugit repellendus expedita excepturi iure perferendis provident quia eaque.
                            </p>
                            <cite>
                                Simina Doe
                                <span>Company Ltd.</span>
                            </cite>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /testimonials -->

        </div>
    </section>
    <!-- /Works -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>Three Column</h4>
                <div class="testimonial-bordered">
                    <div class="owl-carousel text-center owl-testimonial m-0"
                        data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
                        <div class="testimonial">
                            <figure>
                                <img class="rounded" src="/website/demo_files/images/people/300x300/11-min.jpg"
                                    alt="" />
                            </figure>
                            <div class="testimonial-content p-0">
                                <cite>
                                    Joana Doe
                                    <span>Company Ltd.</span>
                                </cite>
                            </div>
                        </div>

                        <div class="testimonial">
                            <figure>
                                <img class="rounded" src="/website/demo_files/images/people/300x300/1-min.jpg"
                                    alt="" />
                            </figure>
                            <div class="testimonial-content p-0">
                                <cite>
                                    Melissa Doe
                                    <span>Company Ltd.</span>
                                </cite>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h4>Three Column</h4>
                <p class="m-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                    venenatis
                    dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
            </div>

            <div class="col-md-4">
                <h4>Three Column</h4>
                <p class="m-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                    venenatis
                    dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
            </div>
        </div>

        <!-- pre code -->
        <div class="text-left mt-20 mb-60">
            <a href="javascript:;" onclick="jQuery('#pre-3').slideToggle();">Show Code</a>
        </div>
        <pre id="pre-3" class="text-left rad-0 text-danger hide">
&lt;div class="row"&gt;
&lt;div class="col-md-6"&gt;
&lt;h4&gt;Three Column&lt;/h4&gt;
&lt;/div&gt;

&lt;div class="col-md-6"&gt;
&lt;h4&gt;Three Column&lt;/h4&gt;
&lt;/div&gt;

&lt;div class="col-md-6"&gt;
&lt;h4&gt;Three Column&lt;/h4&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
        <!-- /pre code -->
    </div>
    <section>
        <div class="container">

            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget
                diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat
                nibh adipiscing sit amet.</p>

            <div class="divider divider-center divider-color"><!-- divider -->
                <i class="fa fa-chevron-down"></i>
            </div>

            <!-- BORN TO BE A WINNER -->
            <article class="row">
                <div class="col-md-6">
                    <!-- OWL SLIDER -->
                    <div class="owl-carousel buttons-autohide controlls-over m-0"
                        data-plugin-options='{"items": 1, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"backSlide", "progressBar":"true"}'>
                        <div>
                            <img class="img-fluid" src="/website/demo_files/images/mockups/800x553/18-min.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="img-fluid" src="/website/demo_files/images/mockups/800x553/17-min.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="img-fluid" src="/website/demo_files/images/mockups/800x553/3-min.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="img-fluid" src="/website/demo_files/images/mockups/800x553/2-min.jpg"
                                alt="">
                        </div>
                    </div>
                    <!-- /OWL SLIDER -->
                </div>
                <div class="col-md-6">
                    <h3>Smarty : Four Areas of Expertise</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam.</p>

                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                        magni dolores eos qui ratione voluptatem.</p>

                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>

                    <p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </article>
            <!-- /BORN TO BE A WINNER -->

        </div>
    </section>


@endsection
@section('plugin')

@endsection
