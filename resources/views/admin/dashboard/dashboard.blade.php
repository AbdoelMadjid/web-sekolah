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

        <x-panel id_panel="panelcomponent02" judulutama="Contoh" judulspan="Componen Panel" icon="cog">
            <x-slot name="paneltoolbar">
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
                    <x-button-dynamic-link url="/intel_analytics_dashboard" title="Kembali" iconClass="reply" />
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
            </x-slot>
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
                                    <x-bootboxalert typebutton="primary" datatitle="Tambah Data Siswa"
                                        datamessage="Sukses tersimpan!" url="dashboard-admin"
                                        icon="save">Simpan</x-bootboxalert>
                                    <x-bootboxalert id="ya-atau-tidak" typebutton="primary" datatitle="Konfirmasi"
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
                                    <div class="btn-group" role="group" aria-label="Group A">
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

                    <x-modal :modalId="'default-example-modal'" :modalSize="''" :modalTitle="'Ini Modal default'" :modalSubTitle="'Contoh Modal default'" :modalAction="'Simpan'">
                        <!-- Isi konten modal yang dinamis -->
                        <p>Isi Modal default</p>
                    </x-modal>

                    <x-modal :modalId="'default-example-modal-sm'" :modalSize="'modal-sm'" :modalTitle="'Ini Modal small'" :modalSubTitle="'Contoh Modal small'" :modalAction="'Simpan'">
                        <!-- Isi konten modal yang dinamis -->
                        <p>Isi Modal small</p>
                    </x-modal>

                    <x-modal :modalId="'default-example-modal-lg'" :modalSize="'modal-lg'" :modalTitle="'Ini Modal large'" :modalSubTitle="'Contoh Modal large'" :modalAction="'Simpan'">
                        <!-- Isi konten modal yang dinamis -->
                        <p>Isi Modal large</p>
                    </x-modal>
                </div>
            </div>
            <x-slot name="panelcontentfoot">
                <!-- panel footer with utility classes -->

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="demoCheck">
                    <label class="custom-control-label" for="demoCheck">Checkbox</label>
                </div>
                <x-button-dynamic-link url="#" title="Button 1" style="btn-primary ml-auto mr-2"
                    iconClass="fas fa-save" />
                <x-button-dynamic-link url="#" title="Button 2" style="btn-primary mr-2"
                    iconClass="fas fa-trash-alt" />
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
