@extends('website.inc.layout-web')
@section('title', 'About Us')
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
