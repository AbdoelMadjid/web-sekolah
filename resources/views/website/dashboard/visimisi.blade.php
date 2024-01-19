@extends('website.inc.layout-web')
@section('title', 'Visi Misi dan Tujuan')
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

            <h2 class="fs-25">What else Smarty can offer?</h2>

            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget
                diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat
                nibh adipiscing sit amet.</p>

            <div class="mt-60">
                <ul class="nav nav-tabs nav-clean">
                    <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab">Architecture</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Web Design</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">Video Editing</a></li>
                </ul>

                <div class="tab-content">
                    <div id="tab1" class="tab-pane active">
                        <img class="float-left" src="/website/demo_files/images/mockups/600x399/11-min.jpg" width="200"
                            alt="" />
                        <p>Praesent est laborum dolo rumes fugats untras. Etha rums ser quidem rerum facilis dolores nemis
                            onis fugats vitaes nemo minima rerums unsers sadips amets. Ut enim ad minim veniam, quis nostrud
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci amets
                            uns. Etharums ser quidem rerum. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Asunt
                            in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla dolores ipsums fugiats. Etha rums ser quidem rerum facilis dolores nemis onis fugats
                            vitaes nemo minima rerums unsers sadips amets.
                        <p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check"></i> Fully responsive so your content will always look good on any
                                screen</li>
                            <li><i class="fa fa-check"></i> Awesome sliders give you the opportunity to showcase content
                            </li>
                            <li><i class="fa fa-check"></i> Unlimited color options with a backed color picker, gradients
                            </li>
                            <li><i class="fa fa-check"></i> Multiple layout options for home pages, portfolio &amp; blo
                            </li>
                            <li><i class="fa fa-check"></i> We offer free support because we care about your site.</li>
                        </ul>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <img class="float-right" src="/website/demo_files/images/mockups/600x399/18-min.jpg" width="200"
                            alt="" />
                        <p>Praesent est laborum dolo rumes fugats untras. Etha rums ser quidem rerum facilis dolores nemis
                            onis fugats vitaes nemo minima rerums unsers sadips amets. Ut enim ad minim veniam, quis nostrud
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci amets
                            uns. Etharums ser quidem rerum. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Asunt
                            in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla dolores ipsums fugiats. Etha rums ser quidem rerum facilis dolores nemis onis fugats
                            vitaes nemo minima rerums unsers sadips amets.
                        <p>
                    </div>
                    <div id="tab3" class="tab-pane fade">
                        <p>Praesent est laborum dolo rumes fugats untras. Etha rums ser quidem rerum facilis dolores nemis
                            onis fugats vitaes nemo minima rerums unsers sadips amets. Ut enim ad minim veniam, quis nostrud
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci amets
                            uns. Etharums ser quidem rerum. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Asunt
                            in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla dolores ipsums fugiats. Etha rums ser quidem rerum facilis dolores nemis onis fugats
                            vitaes nemo minima rerums unsers sadips amets.
                        <p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- / -->

@endsection
@section('plugin')

@endsection
