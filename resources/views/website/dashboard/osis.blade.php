@extends('website.inc.layout-web')
@section('title', 'Organisasi Siswa Intra Sekolah')
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


    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item"><a class="nav-link active" href="#home_justified" data-toggle="tab">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#profile_justified" data-toggle="tab">Profile</a></li>
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown </a>
            <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
                <li class="dropdown-item"><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
            </ul>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
        </div>
        <div class="tab-pane fade" id="profile">
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
        </div>
        <div class="tab-pane fade" id="dropdown1">
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold.</p>
        </div>
        <div class="tab-pane fade" id="dropdown2">
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party.</p>
        </div>
    </div>

@endsection
@section('plugin')

@endsection
