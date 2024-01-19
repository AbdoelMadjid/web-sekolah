@extends('website.inc.layout-web')
@section('title', 'Ekstrakurikuler')
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


    <!-- -->
    <section>
        <div class="container">

            <!-- FILTER -->
            <ul class="nav nav-pills mix-filter mb-30">
                <li data-filter="all" class="filter active"><a href="#">All</a></li>
                <li data-filter="development" class="filter"><a href="#">Development</a></li>
                <li data-filter="photography" class="filter"><a href="#">Photography</a></li>
                <li data-filter="design" class="filter"><a href="#">Design</a></li>
            </ul>
            <!-- /FILTER -->

            <div class="row mix-grid">

                <!-- LEFT COLUMNS -->
                <div class="col-md-9">

                    <!-- TOGGLES -->
                    <div class="toggle toggle-transparent toggle-bordered-simple">

                        <div class="toggle mix design"><!-- toggle -->
                            <label>1. Nulla lacinia iaculis nulla non pulvinar?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    <img class="hidden-sm float-left"
                                        src="/website/demo_files/images/girl_looking-min_thumb.jpg" alt="Careers" />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                    <br /><br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix photography"><!-- toggle -->
                            <label>2. Lacinia iaculis nulla non pulvinar?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                                <div class="row">

                                    <div class="col-md-4 col-sm-6">

                                        <ul class="list-icon check-square"><!-- block 2 -->
                                            <li>Nulla lacinia iaculis nulla</li>
                                            <li>Cum sociis natoque penatibus</li>
                                            <li>Magnis dis parturient montes</li>
                                        </ul>

                                    </div>

                                    <div class="col-md-4 col-sm-6">

                                        <ul class="list-icon check-square"><!-- block 2 -->
                                            <li>Nulla lacinia iaculis nulla</li>
                                            <li>Cum sociis natoque penatibus</li>
                                            <li>Magnis dis parturient montes</li>
                                        </ul>

                                    </div>

                                    <div class="col-md-4 col-sm-6">

                                        <ul class="list-icon check-square"><!-- block 2 -->
                                            <li>Nulla lacinia iaculis nulla</li>
                                            <li>Cum sociis natoque penatibus</li>
                                            <li>Magnis dis parturient montes</li>
                                        </ul>

                                    </div>

                                </div>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix design"><!-- toggle -->
                            <label>3. Quisque rutrum pellentesque imperdiet?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                                <div class="row">

                                    <div class="col-md-4 col-sm-6">

                                        <div class="box-content thumbnail text-center">
                                            <a href="/website/demo_files/images/1200x800/10-min.jpg"
                                                class="item-image lightbox" data-plugin-options='{"type":"image"}'>
                                                <img class="img-fluid" src="/website/demo_files/images/451x300/10-min.jpg"
                                                    alt="" />
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-4 col-sm-6">

                                        <div class="box-content thumbnail text-center">
                                            <a href="http://www.youtube.com/watch?v=s0MDY9fl-IA" class="item-image lightbox"
                                                data-plugin-options='{"type":"iframe"}'>
                                                <img class="img-fluid" src="/website/demo_files/images/451x300/11-min.jpg"
                                                    alt="" />
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-4 col-sm-6">

                                        <div class="box-content thumbnail text-center">
                                            <a href="/website/demo_files/images/1200x800/25-min.jpg"
                                                class="item-image lightbox" data-plugin-options='{"type":"image"}'>
                                                <img class="img-fluid" src="/website/demo_files/images/451x300/25-min.jpg"
                                                    alt="" />
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix development"><!-- toggle -->
                            <label>4. Iaculis nulla non pulvinar?</label>
                            <div class="toggle-content">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus
                                    nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                    <br /><br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix photography"><!-- toggle -->
                            <label>5. Lorem ipsum dolor sit amet, consectetur?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                    <br /><br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix design"><!-- toggle -->
                            <label>6. Cum sociis natoque penatibus et magnis?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                    <br /><br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix development"><!-- toggle -->
                            <label>7. Ut eu risus enim, ut pulvinar lectus?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                    <br /><br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix development"><!-- toggle -->
                            <label>8. Nulla lacinia iaculis nulla non pulvinar?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    <img class="hidden-sm float-left"
                                        src="/website/demo_files/images/girl_looking-min_thumb.jpg" alt="Careers">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                    <br /><br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix design"><!-- toggle -->
                            <label>9. Lacinia iaculis nulla non pulvinar?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                                <div class="row">

                                    <div class="col-md-4 col-sm-6">

                                        <ul class="list-icon check-square"><!-- block 2 -->
                                            <li>Nulla lacinia iaculis nulla</li>
                                            <li>Cum sociis natoque penatibus</li>
                                            <li>Magnis dis parturient montes</li>
                                        </ul>

                                    </div>

                                    <div class="col-md-4 col-sm-6">

                                        <ul class="list-icon check-square"><!-- block 2 -->
                                            <li>Nulla lacinia iaculis nulla</li>
                                            <li>Cum sociis natoque penatibus</li>
                                            <li>Magnis dis parturient montes</li>
                                        </ul>

                                    </div>

                                    <div class="col-md-4 col-sm-6">

                                        <ul class="list-icon check-square"><!-- block 2 -->
                                            <li>Nulla lacinia iaculis nulla</li>
                                            <li>Cum sociis natoque penatibus</li>
                                            <li>Magnis dis parturient montes</li>
                                        </ul>

                                    </div>

                                </div>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix design"><!-- toggle -->
                            <label>10. Quisque rutrum pellentesque imperdiet?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                                <div class="row">

                                    <div class="col-md-4 col-sm-6">

                                        <div class="box-content thumbnail text-center">
                                            <a href="/website/demo_files/images/1200x800/10-min.jpg"
                                                class="item-image lightbox" data-plugin-options='{"type":"image"}'>
                                                <img class="img-fluid" src="/website/demo_files/images/451x300/10-min.jpg"
                                                    alt="" />
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-4 col-sm-6">

                                        <div class="box-content thumbnail text-center">
                                            <a href="http://www.youtube.com/watch?v=s0MDY9fl-IA"
                                                class="item-image lightbox" data-plugin-options='{"type":"iframe"}'>
                                                <img class="img-fluid" src="/website/demo_files/images/451x300/11-min.jpg"
                                                    alt="" />
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-md-4 col-sm-6">

                                        <div class="box-content thumbnail text-center">
                                            <a href="/website/demo_files/images/1200x800/25-min.jpg"
                                                class="item-image lightbox" data-plugin-options='{"type":"image"}'>
                                                <img class="img-fluid" src="/website/demo_files/images/451x300/25-min.jpg"
                                                    alt="" />
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix photography"><!-- toggle -->
                            <label>11. Iaculis nulla non pulvinar?</label>
                            <div class="toggle-content">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus
                                    nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                    <br /><br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                            </div>
                        </div><!-- /toggle -->

                        <div class="toggle mix development"><!-- toggle -->
                            <label>12. Lorem ipsum dolor sit amet, consectetur?</label>
                            <div class="toggle-content">
                                <p class="clearfix">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                    <br /><br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a
                                    sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor
                                    convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                    Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                                </p>

                            </div>
                        </div><!-- /toggle -->

                    </div>
                    <!-- /TOGGLES -->

                    <!-- CALLOUT -->
                    <div class="callout alert alert-border mt-60 mb-60">

                        <div class="row">

                            <div class="col-md-9 col-sm-12"><!-- left text -->
                                <h4>Call now at <strong>+800-565-2390</strong> and get 15% discount!</strong></h4>
                                <p class="font-lato fs-17">
                                    We truly care about our users and our product.
                                </p>
                            </div><!-- /left text -->


                            <div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
                                <a href="#purchase" rel="nofollow" target="_blank"
                                    class="btn btn-default btn-lg btn-round">PURCHASE NOW</a>
                            </div><!-- /right btn -->

                        </div>

                    </div>
                    <!-- /CALLOUT -->

                </div>
                <!-- /LEFT COLUMNS -->

                <!-- RIGHT COLUMNS -->
                <div class="col-md-3">

                    <!-- POPULAR QUESTIONS -->
                    <h4><strong>Poular</strong> Topics</h4>
                    <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque
                            imperdiet.</em></p>

                    <hr />

                    <ul class="list-unstyled"><!-- block 1 -->
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur adipiscing elit</a></li>
                        <li><a href="#">Quisque rutrum pellentesque</a></li>
                    </ul><!-- /block 1 -->

                    <hr />

                    <!-- ASK A QUSTION -->
                    <h4><strong>Ask</strong> a question</h4>
                    <form action="#" method="post" class="sky-form clearfix">

                        <label class="input">
                            <i class="ico-prepend fa fa-user"></i>
                            <input type="text" placeholder="Name">
                        </label>

                        <label class="input">
                            <i class="ico-prepend fa fa-envelope"></i>
                            <input type="text" placeholder="Email">
                        </label>

                        <label class="textarea">
                            <i class="ico-prepend fa fa-comment"></i>
                            <textarea rows="3" placeholder="Type your question..."></textarea>
                        </label>

                        <button class="btn btn-primary btn-sm float-right">SUBMIT YOUR QUESTION</button>

                    </form>

                    <hr />

                    <!-- FLICKR WIDGET -->
                    <h4 class="fs-16 mb-10"><strong>Flickr</strong> Photo</h4>
                    <div class="widget-flickr clearfix lightbox mb-60" data-id="37304598@N02" data-limit="8"></div>

                </div>
                <!-- /RIGHT COLUMNS -->

            </div>

        </div>
    </section>
    <!-- / -->


@endsection
@section('plugin')

@endsection
