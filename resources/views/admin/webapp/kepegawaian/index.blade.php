@extends('admin.inc.main')
@section('title', 'Kepegawaian')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb', ['category_1' => 'Web App'])
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'user-cog',
                'heading1' => 'Kepegawaian',
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
            </div>
            <div class="panel-container show">
                <div class="panel-content">
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
                <!-- panel footer with utility classes -->
                <div
                    class="panel-content d-flex py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">

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
    </main>
@endsection
@section('pages-script')

@endsection
