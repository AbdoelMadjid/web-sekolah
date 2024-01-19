@extends('website.inc.layout-web')
@section('title', 'Ketua Program Studi')
@section('css_link')
    <!-- PAGE LEVEL SCRIPTS -->
    <link href="/websiter/assets/css/color_scheme/blue.css" rel="stylesheet" type="text/css" />
    <link href="/websiter/assets/css/header-6.css" rel="stylesheet" type="text/css" />
    <link href="/websiter/assets/css/pack-megashop.css" rel="stylesheet" type="text/css" />
    <link href="/websiter/assets/css/custom-forms-v2.css" rel="stylesheet" type="text/css" />
@endsection

@section('content-web')
    @include('website.inc.page_title', ['bc_1' => 'My Schools'])
    <!--
               PAGE HEADER

               CLASSES:
                .page-header-xs	= 20px margins
                .page-header-md	= 50px margins
                .page-header-lg	= 80px margins
                .page-header-xlg= 130px margins
                .dark			= dark page header

              -->
    <section class="page-header page-header-xs mt-60">
        <div class="container">

            <h1>Shop Category</h1>
            <span class="fs-18 fw-300"><em>Optional category subtitle / slogan</em></span>

            <!-- breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Category</li>
            </ol><!-- /breadcrumbs -->

        </div>
    </section>
    <!-- /PAGE HEADER -->







    <!-- wrapper -->
    <div id="wrapper">


        <section>
            <div class="container">


                <div class="row">

                    <!-- RIGHT -->
                    <div class="col-lg-9 col-md-9 col-sm-9 order-lg-2 order-md-2 order-sm-2">



                        <!-- CAROUSEL -->
                        <div class="owl-carousel buttons-autohide controlls-over mb-60 r-4"
                            data-plugin-options='{"singleItem": true, "autoPlay": 6000, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
                            <!-- item -->
                            <div>
                                <div class="caption-slider-default">
                                    <div class="display-table">
                                        <div class="display-table-cell vertical-align-middle">
                                            <div class="caption-container text-left">
                                                <h2>SHOP <strong>NOW</strong> &ndash; 50% OFF</h2>
                                                <p>
                                                    This is a category banner rotator<br />
                                                    for any category of your shop.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <img class="img-fluid radius-4"
                                    src="/website/demo_files/images/packs/megashop/banners/top_1.jpg" width="1200"
                                    height="335" alt="">
                            </div>
                            <!-- /item -->

                            <!-- item -->
                            <div>

                                <div class="caption-slider-default">
                                    <div class="display-table">
                                        <div class="display-table-cell vertical-align-middle">
                                            <div class="caption-container text-left">
                                                <h2>LOREM IPSUM <strong>DOLOR</strong></h2>
                                                <p>
                                                    Unlimited designs, unlimited combinations <br />
                                                    imagination is the limit!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <img class="img-fluid radius-4"
                                    src="/website/demo_files/images/packs/megashop/banners/top_2.jpg" width="1200"
                                    height="335" alt="">
                            </div>
                            <!-- /item -->

                        </div>
                        <!-- /CAROUSEL -->



                        <div class="clearfix shop-list-options mb-20">

                            <ul class="pagination m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>


                            <div class="options-left">
                                <select class="r-3">
                                    <option value="pos_asc">Position ASC</option>
                                    <option value="pos_desc">Position DESC</option>
                                    <option value="name_asc">Name ASC</option>
                                    <option value="name_desc">Name DESC</option>
                                    <option value="price_asc">Price ASC</option>
                                    <option value="price_desc">Price DESC</option>
                                </select>

                                <a class="btn active btn-sm fa fa-th" href="pack-megashop-list-2.html"><!-- grid --></a>
                                <a class="btn btn-sm fa fa-list" href="shop-1col-left.html"><!-- list --></a>
                            </div>

                        </div>




                        <div class="row shop-item-list">

                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p13.jpg"
                                                alt="">
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p14.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image product-price-autohide fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                            <span
                                                class="rating rating-4 fs-13 text-yellow"><!-- rating-0 ... rating-5 --></span>
                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p10.jpg"
                                                alt="">
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p9.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                            <span
                                                class="rating rating-4 fs-13 text-yellow"><!-- rating-0 ... rating-5 --></span>
                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p12.jpg"
                                                alt="">
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p11.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p14.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 elipsis mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->



                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p1.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p2.jpg"
                                                alt="">
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p3.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p4.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p5.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 elipsis mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p6.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 elipsis mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p7.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 elipsis mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p8.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 elipsis mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p9.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 elipsis mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->



                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p10.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 elipsis mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->



                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p11.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 elipsis mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->




                            <!-- item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <div class="card hover-shadow">

                                    <a class="img-hover-switch m-15" href="pack-megashop-single-1.html">
                                        <figure>
                                            <img class="img-fluid"
                                                src="/website/demo_files/images/shop/products/300x450/p12.jpg"
                                                alt="">
                                        </figure>

                                        <span class="product-price product-price-over-image fw-600">
                                            <span class="block fs-20">
                                                <span class="line-through fs-14 fw-200">$98.00</span>
                                                $78
                                            </span>

                                        </span>
                                    </a>


                                    <h3 class="product-item-title text-left pl-15 pr-15 fs-15 elipsis mb-15">
                                        <a href="pack-megashop-single-1.html">Cotton 100% - Pink Shirt</a>
                                    </h3>

                                    <div class="btn-grid text-center">
                                        <a href="pack-megashop-cart.html"
                                            class="btn btn-danger fs-14 btn-sm btn-fancy-left">ADD TO CART</a>
                                        <a href="#" class="btn btn-flat fs-14 btn-sm btn-fancy-right"
                                            title="add to favourites"><i class="fa fa-heart-o m-0 p-0"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /item -->



                        </div>

                    </div>


                    <!-- LEFT -->
                    <div class="col-lg-3 col-md-3 col-sm-3 order-lg-1 order-md-1 order-sm-1">

                        <!-- CATEGORIES -->
                        <div class="side-nav mb-60">

                            <div class="side-nav-head">
                                <button class="fa fa-bars"></button>
                                <h4>CATEGORIES</h4>
                            </div>

                            <ul class="list-group list-group-bordered list-group-noicon uppercase">
                                <li class="list-group-item active">
                                    <a class="dropdown-toggle" href="#">WOMEN</a>
                                    <ul>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(123)</span>
                                                Shoes &amp; Boots</a></li>
                                        <li class="active"><a href="#"><span
                                                    class="fs-11 text-muted float-right">(331)</span> Top &amp; Blouses</a>
                                        </li>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(234)</span>
                                                Dresses &amp; Skirts</a></li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a class="dropdown-toggle" href="#">MEN</a>
                                    <ul>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(88)</span>
                                                Accessories</a></li>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(67)</span> Shoes
                                                &amp; Boots</a></li>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(32)</span>
                                                Dresses &amp; Skirts</a></li>
                                        <li class="active"><a href="#"><span
                                                    class="fs-11 text-muted float-right">(78)</span> Top &amp; Blouses</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a class="dropdown-toggle" href="#">JEWELLERY</a>
                                    <ul>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(23)</span>
                                                Dresses &amp; Skirts</a></li>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(34)</span> Shoes
                                                &amp; Boots</a></li>
                                        <li class="active"><a href="#"><span
                                                    class="fs-11 text-muted float-right">(21)</span> Top &amp; Blouses</a>
                                        </li>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(88)</span>
                                                Accessories</a></li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a class="dropdown-toggle" href="#">KIDS</a>
                                    <ul>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(88)</span> Shoes
                                                &amp; Boots</a></li>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(22)</span>
                                                Dresses &amp; Skirts</a></li>
                                        <li><a href="#"><span class="fs-11 text-muted float-right">(31)</span>
                                                Accessories</a></li>
                                        <li class="active"><a href="#"><span
                                                    class="fs-11 text-muted float-right">(18)</span> Top &amp; Blouses</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item"><a href="#"><span
                                            class="fs-11 text-muted float-right">(189)</span> ACCESSORIES</a></li>
                                <li class="list-group-item"><a href="#"><span
                                            class="fs-11 text-muted float-right">(61)</span> GLASSES</a></li>

                            </ul>

                        </div>
                        <!-- /CATEGORIES -->

                        <!-- SIZE -->
                        <div class="mb-60">
                            <h4>SIZE</h4>

                            <a class="tag" href="#">
                                <span class="txt">S</span>
                            </a>
                            <a class="tag" href="#">
                                <span class="txt bold">M</span>
                            </a>
                            <a class="tag" href="#">
                                <span class="txt">L</span>
                            </a>
                            <a class="tag" href="#">
                                <span class="txt">XL</span>
                            </a>
                            <a class="tag" href="#">
                                <span class="txt">2XL</span>
                            </a>
                            <a class="tag" href="#">
                                <span class="txt">3XL</span>
                            </a>

                            <hr />

                            <div class="clearfix fs-12">
                                <a class="float-right fa fa-remove" href="#"></a>
                                SELECTED SIZE: <strong>M</strong>
                            </div>
                        </div>
                        <!-- /SIZE -->


                        <!-- COLOR -->
                        <div class="mb-60">
                            <h4>COLOR</h4>

                            <a class="tag shop-color" href="#" style="background-color:#000000"></a>
                            <a class="tag shop-color" href="#" style="background-color:#FFFFFF"></a>
                            <a class="tag shop-color" href="#" style="background-color:#C0C0C0"></a>
                            <a class="tag shop-color" href="#" style="background-color:#0000E0"></a>
                            <a class="tag shop-color" href="#" style="background-color:#800080"></a>
                            <a class="tag shop-color" href="#" style="background-color:#FF0000"></a>
                            <a class="tag shop-color" href="#" style="background-color:#FF0080"></a>
                            <a class="tag shop-color" href="#" style="background-color:#FF6600"></a>
                            <a class="tag shop-color" href="#" style="background-color:#E0DCC8"></a>
                            <a class="tag shop-color" href="#" style="background-color:#F0E68C"></a>
                            <a class="tag shop-color" href="#" style="background-color:#FFFFD0"></a>
                            <a class="tag shop-color" href="#" style="background-color:#4B0082"></a>
                            <a class="tag shop-color" href="#" style="background-color:#666666"></a>
                            <a class="tag shop-color" href="#" style="background-color:#00FF00"></a>
                            <a class="tag shop-color" href="#" style="background-color:#36454F"></a>
                            <a class="tag shop-color" href="#" style="background-color:#F4A460"></a>
                            <a class="tag shop-color" href="#" style="background-color:#0088CC"></a>
                            <a class="tag shop-color" href="#" style="background-color:#B38B6D"></a>

                            <hr />

                            <div class="clearfix fs-12">
                                <a class="float-right fa fa-remove" href="#"></a>
                                SELECTED COLOR: <strong>Red</strong>
                            </div>
                        </div>
                        <!-- /COLOR -->


                        <!-- BRANDS -->
                        <div class="side-nav mb-60">

                            <div class="side-nav-head">
                                <button class="fa fa-bars"></button>
                                <h4>BRANDS</h4>
                            </div>

                            <ul class="list-group list-unstyled">
                                <li class="list-group-item"><a href="#"><span
                                            class="fs-11 text-muted float-right">(21)</span> Armani</a></li>
                                <li class="list-group-item"><a href="#"><span
                                            class="fs-11 text-muted float-right">(44)</span> Nike</a></li>
                                <li class="list-group-item"><a href="#"><span
                                            class="fs-11 text-muted float-right">(2)</span> Jolidon</a></li>
                                <li class="list-group-item"><a href="#"><span
                                            class="fs-11 text-muted float-right">(18)</span> Ralph Lauren</a></li>
                                <li class="list-group-item"><a href="#"><span
                                            class="fs-11 text-muted float-right">(87)</span> Lotto</a></li>
                                <li class="list-group-item"><a href="#"><span
                                            class="fs-11 text-muted float-right">(32)</span> Fila</a></li>
                                <li class="list-group-item"><a href="#"><span
                                            class="fs-11 text-muted float-right">(69)</span> Boss</a></li>
                            </ul>

                        </div>
                        <!-- BRANDS -->


                        <!-- BANNER ROTATOR -->
                        <div class="owl-carousel buttons-autohide controlls-over mb-60 text-center"
                            data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"goDown"}'>
                            <a href="#">
                                <img class="img-fluid" src="/website/demo_files/images/shop/banners/off_1.png"
                                    width="270" height="350" alt="">
                            </a>
                            <a href="#">
                                <img class="img-fluid" src="/website/demo_files/images/shop/banners/off_2.png"
                                    width="270" height="350" alt="">
                            </a>
                        </div>
                        <!-- /BANNER ROTATOR -->


                        <!-- FEATURED -->
                        <div class="mb-60">

                            <h2 class="owl-featured">FEATURED</h2>
                            <div class="owl-carousel featured"
                                data-plugin-options='{"singleItem": true, "stopOnHover":false, "autoPlay":false, "autoHeight": false, "navigation": true, "pagination": false}'>

                                <div><!-- SLIDE 1 -->
                                    <ul class="list-unstyled m-0 p-0 text-left">

                                        <li class="clearfix"><!-- item -->
                                            <div class="thumbnail featured clearfix float-left">
                                                <a href="#">
                                                    <img src="/website/demo_files/images/shop/products/100x100/p10.jpg"
                                                        width="80" height="80" alt="featured item">
                                                </a>
                                            </div>

                                            <a class="block fs-12" href="#">Long Grey Dress - Special</a>
                                            <div class="rating rating-4 fs-13 fw-100 text-left">
                                                <!-- rating-0 ... rating-5 -->
                                            </div>
                                            <div class="fs-18 text-left">$132.00</div>
                                        </li><!-- /item -->

                                        <li class="clearfix"><!-- item -->
                                            <div class="thumbnail featured clearfix float-left">
                                                <a href="#">
                                                    <img src="/website/demo_files/images/shop/products/100x100/p2.jpg"
                                                        width="80" height="80" alt="featured item">
                                                </a>
                                            </div>

                                            <a class="block fs-1" href="#">Black Fashion Hat</a>
                                            <div class="rating rating-4 fs-13 fw-100 text-left">
                                                <!-- rating-0 ... rating-5 -->
                                            </div>
                                            <div class="fs-18 text-left">$65.00</div>
                                        </li><!-- /item -->

                                        <li class="clearfix"><!-- item -->
                                            <div class="thumbnail featured clearfix float-left">
                                                <a href="#">
                                                    <img src="/website/demo_files/images/shop/products/100x100/p13.jpg"
                                                        width="80" height="80" alt="featured item">
                                                </a>
                                            </div>

                                            <a class="block fs-1" href="#">Cotton 100% - Pink Dress</a>
                                            <div class="rating rating-4 fs-13 fw-100 text-left">
                                                <!-- rating-0 ... rating-5 -->
                                            </div>
                                            <div class="fs-18 text-left">$77.00</div>
                                        </li><!-- /item -->

                                    </ul>
                                </div><!-- /SLIDE 1 -->

                                <div><!-- SLIDE 2 -->
                                    <ul class="list-unstyled m-0 p-0 text-left">

                                        <li class="clearfix"><!-- item -->
                                            <div class="thumbnail featured clearfix float-left">
                                                <a href="#">
                                                    <img src="/website/demo_files/images/shop/products/100x100/p12.jpg"
                                                        width="80" height="80" alt="featured item">
                                                </a>
                                            </div>

                                            <a class="block fs-12" href="#">Long Grey Dress - Special</a>
                                            <div class="rating rating-4 fs-13 fw-100 text-left">
                                                <!-- rating-0 ... rating-5 -->
                                            </div>
                                            <div class="fs-18 text-left">$132.00</div>
                                        </li><!-- /item -->

                                        <li class="clearfix"><!-- item -->
                                            <div class="thumbnail featured clearfix float-left">
                                                <a href="#">
                                                    <img src="/website/demo_files/images/shop/products/100x100/p6.jpg"
                                                        width="80" height="80" alt="featured item">
                                                </a>
                                            </div>

                                            <a class="block fs-1" href="#">Black Fashion Hat</a>
                                            <div class="rating rating-4 fs-13 fw-100 text-left">
                                                <!-- rating-0 ... rating-5 -->
                                            </div>
                                            <div class="fs-18 text-left">$65.00</div>
                                        </li><!-- /item -->

                                        <li class="clearfix"><!-- item -->
                                            <div class="thumbnail featured clearfix float-left">
                                                <a href="#">
                                                    <img src="/website/demo_files/images/shop/products/100x100/p14.jpg"
                                                        width="80" height="80" alt="featured item">
                                                </a>
                                            </div>

                                            <a class="block fs-1" href="#">Cotton 100% - Pink Dress</a>
                                            <div class="rating rating-4 fs-13 fw-100 text-left">
                                                <!-- rating-0 ... rating-5 -->
                                            </div>
                                            <div class="fs-18 text-left">$77.00</div>
                                        </li><!-- /item -->

                                    </ul>
                                </div><!-- /SLIDE 2 -->

                            </div>

                        </div>
                        <!-- /FEATURED -->


                        <!-- HTML BLOCK -->
                        <div class="mb-60">
                            <h4>HTML BLOCK</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                tellus eunit.</p>

                            <form action="#" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" id="email" name="email" class="form-control required"
                                        placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit"><i
                                                class="glyphicon glyphicon-send"></i></button>
                                    </span>
                                </div>
                            </form>

                        </div>
                        <!-- /HTML BLOCK -->

                    </div>

                </div>




                <div class="clearfix shop-list-options mb-20">

                    <ul class="pagination m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>

                </div>


            </div>
        </section>


    </div>
    <!-- /wrapper -->

@endsection
@section('plugin')
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="/website/assets/js/view/demo.shop.js"></script>
@endsection
