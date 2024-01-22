@extends('website.inc.layout-web')
@section('title', 'Tenaga Kependidikan')
@section('css_link')

@endsection

@section('content-web')
    @include('website.inc.page_title', ['bc_1' => 'Kepegawaian'])

    <section>
        <div class="container">

            <div class="clearfix">

                <div class="side-nav float-left mr-100">
                    <ul class="list-group list-unstyled mix-filter mb-0">
                        <li data-filter="all" class="list-group-item filter active"><a href="#">All</a></li>
                        <li data-filter="guru-umum" class="list-group-item filter"><a href="#">Guru Umum</a></li>
                        <li data-filter="guru-rpl" class="list-group-item filter"><a href="#">Guru RPL</a></li>
                        <li data-filter="guru-tkj" class="list-group-item filter"><a href="#">Guru TKJ</a></li>
                        <li data-filter="guru-bd" class="list-group-item filter"><a href="#">Guru BD</a></li>
                        <li data-filter="guru-mp" class="list-group-item filter"><a href="#">Guru MP</a></li>
                        <li data-filter="guru-ak" class="list-group-item filter"><a href="#">Guru AK</a></li>
                        <li data-filter="guru-bk" class="list-group-item filter"><a href="#">Guru BP/BK</a></li>
                        {{--
                        <li class="list-group-item filter"><a href="#">Jumpsuits</a></li>
                        <li class="list-group-item filter"><a href="#">Jackets</a></li>
                        <li class="list-group-item filter"><a href="#">Trench Coasts</a></li>
                        <li class="list-group-item filter"><a href="#">Tops &amp; Tees</a></li>
                        <li class="list-group-item filter"><a href="#">Bra &amp; Brief Sets</a></li>
                        <li class="list-group-item filter"><a href="#">Pants</a></li>
                        <li class="list-group-item filter"><a href="#">Sunglasses <small
                                    class="text-danger">(new)</small></a></li>
                        <li class="list-group-item filter"><a href="#">Socks</a></li>
                        --}}
                    </ul>

                </div>

                <div id="portfolio" class="portfolio-gutter">
                    <h2><span class="fs-18">Para Guru Hebat</span></h2>
                    <div class="row mix-grid mt-40">
                        <div class="col-md-2 col-sm-4 mix guru-ak">
                            <div class="item-box thumbnail">
                                <figure>
                                    <img class="img-fluid" src="/website/guru/3.-SUPRIHATIN,-M.Pd..jpg" width="600"
                                        height="399" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h3 class="mb-10 text-center"><small>Suprihatin, M.Pd.</small></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 mix guru-ak">
                            <div class="item-box thumbnail">
                                <figure>
                                    <img class="img-fluid" src="/website/guru/4.-Dra.YETI-NURHAYATI-SARI,-M.Pd..jpg"
                                        width="600" height="399" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h3 class="mb-10 text-center"><small>Dra. Yeti Nurhayati Sari, M.Pd.</small></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 mix guru-ak">
                            <div class="item-box thumbnail">
                                <figure>
                                    <img class="img-fluid" src="/website/guru/5.-Dra.-EBAH-HABIBAH,-MM.jpg" width="600"
                                        height="399" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h3 class="mb-10 text-center"><small>Dra. Ebah Habibah, MM</small></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 mix guru-umum">
                            <div class="item-box thumbnail">
                                <figure>
                                    <img class="img-fluid" src="/website/guru/6.-H.-ONO-TARYONO-PRIYATNA,-S.Pd,-MM.jpg"
                                        width="600" height="399" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h3 class="mb-10 text-center"><small>H. Ono Taryono Priyatna, S.Pd., MM</small></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 mix guru-bk">
                            <div class="item-box thumbnail">
                                <figure>
                                    <img class="img-fluid" src="/website/guru/7.-Dra.-IMAS-SITI--MAESAROH,-M.Pd.I.jpg"
                                        width="600" height="399" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h3 class="mb-10 text-center"><small>Dra. Imas Siti Maesaroh, M.Pd.I</small></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 mix guru-mp">
                            <div class="item-box thumbnail">
                                <figure>
                                    <img class="img-fluid" src="/website/guru/8.-ZULKIFLI-SA_BAN,-S.Pd.,-M.Pd..jpg"
                                        width="600" height="399" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h3 class="mb-10 text-center"><small>Zulkifli Sa'ban, S.Pd, M.Pd.</small></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('plugin')

@endsection
