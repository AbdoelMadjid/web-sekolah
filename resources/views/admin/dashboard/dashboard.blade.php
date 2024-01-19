@extends('admin.inc.main')
@section('title', 'Dashboard')
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
                'heading1' => 'Dashboard',
                'heading2' => 'Admin',
                'sup' => 'ADDON',
                'pagedescription' => 'Administration with dashboard',
            ])
            @endcomponent
        </div>
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    <i class="fal fa-check text-success mr-2"></i> Default <span class="fw-300"><i>Panel</i></span>
                </h2>
                <div class="panel-toolbar">
                    <select class="custom-select custom-select-sm">
                        <option selected="">Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="panel-toolbar ml-2">
                    <div class="d-flex position-relative ml-auto" style="max-width: 8rem;">
                        <i class="fal fa-search position-absolute pos-left fs-lg px-2 py-1 mt-1 fs-xs"></i>
                        <input type="text" class="form-control form-control-sm pl-5" placeholder="Search">
                    </div>
                </div>
                <div class="panel-toolbar ml-2">
                    <a href="#" class="btn btn-primary btn-sm" title="Kembali"><span class="hidden-xl-up"><i
                                class="fal fa-reply"></i> </span><span class="hidden-sm-down"><span class="hidden-sm-down">
                                Kembali </span></a>
                    <button class="btn btn-primary btn-sm ml-2"
                        onclick="showToast('Peringatan!','Lengkapi data yang kosong', 'warning')">Show Toast</button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content py-2 bg-faded border-faded border-top-0 border-left-0 border-right-0">

                    <div class="btn-group mr-2" role="group" aria-label="Group A">
                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-bold"></i></button>
                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-italic"></i></button>
                        <button type="button" class="btn btn-light btn-sm bg-white"><i
                                class="fas fa-underline"></i></button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Group A">
                        <button type="button" class="btn btn-light btn-sm bg-white"><i
                                class="fas fa-align-left"></i></button>
                        <button type="button" class="btn btn-light btn-sm bg-white"><i
                                class="fas fa-align-center"></i></button>
                        <button type="button" class="btn btn-light btn-sm bg-white"><i
                                class="fas fa-align-right"></i></button>
                        <button type="button" class="btn btn-light btn-sm bg-white"><i
                                class="fas fa-align-justify"></i></button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    {{--                     <div class="panel-tag">
                        All panels needs to have an unique ID in order to use the panel funtions.
                        <code>.panel</code> is a container with no padding, <code>.panel-hdr</code> has a
                        <code>min-height</code> value and default <code>flexbox</code> properties. The
                        <code>.panel-toolbar</code> is inserted into <code>.panel-hdr</code> for extra elements. The
                        <code>.panel-container</code> wraps <code>.panel-content</code> which has a predefined
                        padding.
                    </div> --}}
                </div>
                <div class="panel-content">
                    {{--                     <div class="panel-tag">
                        All panels needs to have an unique ID in order to use the panel funtions.
                        <code>.panel</code> is a container with no padding, <code>.panel-hdr</code> has a
                        <code>min-height</code> value and default <code>flexbox</code> properties. The
                        <code>.panel-toolbar</code> is inserted into <code>.panel-hdr</code> for extra elements. The
                        <code>.panel-container</code> wraps <code>.panel-content</code> which has a predefined
                        padding.
                    </div> --}}
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                        <div class="d-flex align-items-center">
                            <div class="alert-icon">
                                <i class="fal fa-exclamation-triangle"></i>
                            </div>
                            <div class="flex-1">
                                <span class="h4">Medim Icon Stack</span>
                                <br>
                                Custom alert background with <strong>medium</strong> sized icon stack.
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                        <div class="d-flex align-items-center">
                            <div class="alert-icon">
                                <span class="icon-stack icon-stack-md">
                                    <i class="base-7 icon-stack-3x color-danger-900"></i>
                                    <i class="fal fa-times icon-stack-1x text-white"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <span class="h4">Medim Icon Stack</span>
                                <br>
                                Custom alert background with <strong>medium</strong> sized icon stack.
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                        <div class="d-flex align-items-center">
                            <div class="alert-icon mt-0">
                                <span class="icon-stack icon-stack-md">
                                    <i class="base-7 icon-stack-3x color-success-600"></i>
                                    <i class="fal fa-check icon-stack-1x text-white"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <span class="h4">Medim Icon Stack</span>
                                <br>
                                Custom alert background with <strong>medium</strong> sized icon stack. Your privacy is
                                important
                                to
                                us at SmartAdmin and the protection, confidentiality and integrity of your
                                personal data are our prime concerns.
                                We will only use your personal information to administer your account, provide the products
                                and
                                services you
                                have requested from us, and to keep you informed about our products and services (if you
                                have
                                consented to
                                this).
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td style="width: 40%; vertical-align: middle;">
                                    <span
                                        class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">1</span>
                                    Basic Alert
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="js-bootbox-alert btn btn-outline-primary"
                                        data-title="Success!" data-message="Great... all is complete"
                                        data-redirect-url="/docs_general">
                                        Trigger Custom Alert
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary"
                                        id="js-bootbox-alert-2">Try
                                        me!</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <!-- panel footer with utility classes -->
                <div
                    class="panel-content d-flex py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="demoCheck">
                        <label class="custom-control-label" for="demoCheck">Checkbox</label>
                    </div>
                    <button class="btn btn-sm btn-primary ml-auto mr-2 js-bootbox-alert" data-title="Tambah data siswa"
                        data-message="Sukses tersimpan!" data-redirect-url="/docs_general">
                        <i class="fal fa-save"></i> Save
                    </button>
                    <button class="btn btn-sm btn-primary js-bootbox-alert-smartadmin" data-title="Konfirmasi"
                        data-message="Apakah Anda yakin data ini akan dihapus?" data-auto-redirect-url="/">
                        <i class="fal fa-trash-alt"></i> Delete
                    </button>
                </div>
            </div>
        </div>
        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            <p class="mb-g">
                Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of
                your
                personal data are our prime concerns.
                We will only use your personal information to administer your account, provide the products and
                services
                you
                have requested from us, and to keep you informed about our products and services (if you have
                consented
                to
                this).
                We only use your data for the purposes for which it was collected and, where relevant, to meet local
                legal
                obligations.
                We will retain your personal information only for as long as is necessary for the purposes for which
                the
                information was collected, or as long as is required pursuant to law.
            </p>
            <h3>Cookies and other similar technologies</h3>
            <p>
                We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device
                identifiers). Cookies are text files placed on your computer to collect standard internet log
                information
                and visitor behaviour information. This information is used to track visitor use of the website and
                to
                compile statistical reports on website activity. We register your interaction with our services in
                order
                to
                improve our website, content and services. Our use of such technologies and the data collected is
                described
                in more detail in our Cookie Policy. You can manage your cookie preferences through your browser
                settings.
            </p>

        </div>
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
