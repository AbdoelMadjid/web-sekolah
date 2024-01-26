@extends('admin.inc.main')
@section('title', 'Component Sample')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb')
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'home',
                'heading1' => 'Component',
                'heading2' => 'Sample',
                'sup' => 'ADDON',
                'pagedescription' => 'Component-component sample this web',
            ])
            @endcomponent
        </div>

        <x-panel id_panel="panelcomponent02" judulutama="Contoh" judulspan="Componen" icon="cog">
            <div class="row">
                <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                    <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                        <h3 class="mb-g">
                            Hi Everyone,
                        </h3>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                    <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                        <h3 class="mb-g">
                            Component Style Button
                        </h3>
                    </div>
                    <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                        <h3 class="mb-g">
                            Component Style Button
                        </h3>
                    </div>

                </div>
            </div>
        </x-panel>
    </main>
@endsection
@section('pages-script')
    <script src="/admin/js/notifications/toastr/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 100,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            // Fungsi untuk menampilkan pemberitahuan Toastr
            window.showToast = function(title, message, type) {
                toastr[type](message, title);
            }

            //showToast("Sukses!", "Ini pesan sukses", "success");
            //showToast("Informasi", "Ini pesan informasi", "info");
            //showToast("Error", "Ini pesan error", "error");
            //showToast("Peringatan", "Ini pesan peringatan", "warning");
        });
    </script>
@endsection
