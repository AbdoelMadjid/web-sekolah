@extends('website.inc.layout-web')
@section('title', 'Konsentrasi Keahlian')
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

    <!-- REPUTATION -->
    <section id="reputation">
        <div class="container">
            <header class="text-center mb-40">
                <h1 class="fw-300">Lawyers With A Global Reputation</h1>
                <h2 class="fw-300 letter-spacing-1 fs-13"><span>WE DELIVER MORE TO OUR CLIENTS</span></h2>
            </header>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="testimonial testimonial-bordered p-15 text-center">
                        <h5>WHAT WE DO</h5>
                        <hr />
                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="testimonial testimonial-bordered p-15 text-center">
                        <h5>WHERE WE WORK</h5>
                        <hr />
                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="testimonial testimonial-bordered p-15 text-center">
                        <h5>SMARTY LAWYERS</h5>
                        <hr />
                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="testimonial testimonial-bordered p-15 text-center">
                        <h5>FUTURE VIEW</h5>
                        <hr />
                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /REPUTATION -->


@endsection
@section('plugin')

@endsection
