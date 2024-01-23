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
                    <i class="fal fa-check text-info mr-2"></i> Default <span class="fw-300"><i>Panel</i></span>
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
                    <a href="#" class="btn btn-primary btn-sm" title="Kembali">
                        <span class="hidden-xl-up"><i class="fal fa-reply"></i> </span>
                        <span class="hidden-sm-down"> Kembali </span></a>
                    <div class="btn-group dropleft">
                        <button class="btn btn-icon fs-xl width-1 mr-1" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content py-2 bg-faded border-faded border-top-0 border-left-0 border-right-0">
                    <x-button-group :buttons="[['icon' => 'fas fa-bold'], ['icon' => 'fas fa-italic'], ['icon' => 'fas fa-underline']]" />
                    <x-button-group :buttons="[
                        ['icon' => 'fas fa-align-left'],
                        ['icon' => 'fas fa-align-center'],
                        ['icon' => 'fas fa-align-right'],
                        ['icon' => 'fas fa-align-justify'],
                    ]" />
                    @php
                        $dropdownItems = [['url' => '#', 'label' => 'Action'], ['url' => '#', 'label' => 'Another action'], ['url' => '#', 'label' => 'Something else here']];
                    @endphp

                    <x-button-dropdown buttonText="Dropdown button" :items="$dropdownItems" buttonType="primary" />
                </div>
                <div class="panel-content">
                    <div class="row">
                        <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                            <!-- Panggil komponen Alert untuk pesan warning -->
                            <x-alert type="warning" title="Warning">
                                Custom alert background with <strong>medium</strong> sized icon stack.
                            </x-alert>
                            <x-alert type="info" title="Info">
                                Custom alert background with <strong>medium</strong> sized icon stack.
                            </x-alert>
                            <x-alert type="danger" title="Error">
                                Custom alert background with <strong>medium</strong> sized icon stack.
                            </x-alert>
                            <x-alert type="success" title="Success">
                                Custom alert background with <strong>medium</strong> sized icon stack.
                            </x-alert>
                        </div>
                        <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <td style="width: 40%; vertical-align: middle;">
                                            <span
                                                class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">1</span>
                                            Basic Alert Toast
                                        </td>
                                        <td>
                                            <div class="btn-group mr-2" role="group" aria-label="Group A">
                                                <x-toastr-notif typebutton="warning" type="warning"
                                                    message="Terjadi Kesalahan">Warning</x-toastr-notif>
                                                <x-toastr-notif typebutton="danger" type="error"
                                                    message="Lengkapi data yang kosong">Error</x-toastr-notif>
                                                <x-toastr-notif typebutton="info" type="info"
                                                    message="Data yang di lengkapi sudah sesuai">Info</x-toastr-notif>
                                                <x-toastr-notif typebutton="success" type="success"
                                                    message="Data sukses di simpan">Success</x-toastr-notif>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%; vertical-align: middle;">
                                            <span
                                                class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">2</span>
                                            Basic Alert BootBox
                                        </td>
                                        <td>
                                            <x-bootboxalert typebutton="primary" id="eksekusi"
                                                datatitle="Tambah Data Siswa" datamessage="Sukses tersimpan!"
                                                url="dashboard-admin" icon="save">Simpan</x-bootboxalert>
                                            <x-bootboxalert typebutton="primary" id="ya-atau-tidak" datatitle="Konfirmasi"
                                                datamessage="Apakah Anda yakin data ini akan dihapus?" url="dashboard-admin"
                                                icon="trash-alt">Hapus</x-bootboxalert>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%; vertical-align: middle;">
                                            <span
                                                class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">3</span>
                                            Modal Component
                                        </td>
                                        <td>
                                            <div class="btn-group mr-2" role="group" aria-label="Group A">
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#default-example-modal-sm">Small</button>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#default-example-modal">Default</button>
                                                <!-- Large modal -->
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#default-example-modal-lg">Large</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <x-modal :modalId="'default-example-modal'" :modalSize="''" :modalTitle="'Ini Modal default'" :modalSubTitle="'Contoh Modal default'"
                                :modalAction="'Simpan'">
                                <!-- Isi konten modal yang dinamis -->
                                <p>Isi Modal default</p>
                            </x-modal>

                            <x-modal :modalId="'default-example-modal-sm'" :modalSize="'modal-sm'" :modalTitle="'Ini Modal small'" :modalSubTitle="'Contoh Modal small'"
                                :modalAction="'Simpan'">
                                <!-- Isi konten modal yang dinamis -->
                                <p>Isi Modal small</p>
                            </x-modal>

                            <x-modal :modalId="'default-example-modal-lg'" :modalSize="'modal-lg'" :modalTitle="'Ini Modal large'" :modalSubTitle="'Contoh Modal large'"
                                :modalAction="'Simpan'">
                                <!-- Isi konten modal yang dinamis -->
                                <p>Isi Modal large</p>
                            </x-modal>
                        </div>
                    </div>
                </div>

                <!-- panel footer with utility classes -->
                <div
                    class="panel-content d-flex py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="demoCheck">
                        <label class="custom-control-label" for="demoCheck">Checkbox</label>
                    </div>
                    <button class="btn btn-sm btn-primary ml-auto mr-2">
                        <i class="fal fa-save"></i> Button 1
                    </button>
                    <button class="btn btn-sm btn-primary">
                        <i class="fal fa-trash-alt"></i> Button 2
                    </button>
                </div>
            </div>
        </div>

        <x-panel id_panel="panelcomponent" icon="cogs" judulutama="Contoh" judulspan="Componen Panel">
            <x-slot name="paneltoolbar">
                <div class="panel-toolbar ml-2">
                    <div class="d-flex position-relative ml-auto" style="max-width: 8rem;">
                        <i class="fal fa-search position-absolute pos-left fs-lg px-2 py-1 mt-1 fs-xs"></i>
                        <input type="text" class="form-control form-control-sm pl-5" placeholder="Search">
                    </div>
                </div>
                <div class="panel-toolbar ml-2">
                    <a href="#" class="btn btn-primary btn-sm" title="Kembali">
                        <span class="hidden-xl-up"><i class="fal fa-reply"></i> </span>
                        <span class="hidden-sm-down"> Kembali </span></a>
                    <div class="btn-group dropleft">
                        <button class="btn btn-icon fs-xl width-1 mr-1" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="panelcontentbar">
                <div class="panel-content py-2 bg-faded border-faded border-top-0 border-left-0 border-right-0">
                    <div class="btn-group mr-2" role="group" aria-label="Group A">
                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-bold"></i></button>
                        <button type="button" class="btn btn-light btn-sm bg-white"><i
                                class="fas fa-italic"></i></button>
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
                </div>
            </x-slot>
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
            <x-slot name="panelcontentfoot">
                <!-- panel footer with utility classes -->
                <div
                    class="panel-content d-flex py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="demoCheck">
                        <label class="custom-control-label" for="demoCheck">Checkbox</label>
                    </div>
                    <button class="btn btn-sm btn-primary ml-auto mr-2">
                        <i class="fal fa-save"></i> Button 1
                    </button>
                    <button class="btn btn-sm btn-primary">
                        <i class="fal fa-trash-alt"></i> Button 2
                    </button>
                </div>
            </x-slot>
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
