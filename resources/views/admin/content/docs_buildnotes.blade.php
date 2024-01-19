@extends('admin.inc.main')
@section('title', 'Build Notes')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb', ['category_1' => 'Documentation'])
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'book',
                'heading1' => 'Documentation:',
                'heading2' => 'Build Notes',
                'pagedescription' => 'Casing all release notes for your convenience',
            ])
            @endcomponent
        </div>
        <div class="card mb-g">
            <div class="card-body">
                <div class="alert alert-primary">
                    <div class="d-flex flex-start w-100">
                        <div class="d-flex align-center mr-2 hidden-sm-down">
                            <span class="icon-stack icon-stack-lg">
                                <i class="base-7 icon-stack-3x color-primary-400"></i>
                                <i class="base-7 icon-stack-2x color-primary-600 opacity-70"></i>
                                <i class="fal fa-key icon-stack-1x text-white opacity-90"></i>
                            </span>
                        </div>
                        <div class="d-flex flex-fill">
                            <div class="flex-fill">
                                <span class="h5">Want to see more features?</span>
                                <br> We are constantly adding features to this template. To convey what you wish to see on
                                future updates, please send us your request here: <a
                                    href="https://support.gotbootstrap.com/d/173-feature-requests"
                                    target="_blank">https://support.gotbootstrap.com/d/173-feature-requests</a>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mb-g">
                    Build v 4.5.1
                    <small>
                        Hot fix
                    </small>
                </h4>
                <ul class="nav d-block fs-md pl-3">
                    <li>
                        <span class="badge badge-warning fw-n mr-1 width-3">MISC</span> Fixed all reported bugs and errors
                        for <strong>Dark Mode</strong>
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">JS</span> Fixed Saving state for Skins
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">DOM</span> Change DOM element
                        <code>id='mythemes'</code> to singular <code>id='mytheme'</code>
                    </li>
                    <li>
                        <span class="badge bg-primary-800 fw-n mr-1 width-3">PLUG</span> Updated Bootstrap to 4.5.0, Jquery
                        to 3.5.1, check your <code>package.json</code>
                    </li>
                </ul>
                <hr class="mt-4 mb-g">
                <h4 class="mb-g">
                    Build v 4.5.0
                    <small>
                        Example pages, more plugins, and requested features
                    </small>
                </h4>
                <ul class="nav d-block fs-md pl-3">
                    <li>
                        <span class="badge badge-warning fw-n mr-1">MISC</span> Fixed all reported bugs and errors
                    </li>
                    <li>
                        <span class="badge badge-warning fw-n mr-1">MISC</span> Fixed gulp warning messages for Bootstrap's
                        SCSS files.
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">BUILD</span> Added new build component to
                        combine all CSS and JS files by running <code>gulp build-combined</code> which produces
                        <code>'combined.js'</code> and <code>'combined.css'</code> files.
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">JS</span> Added Methods for Layout Options, see
                        <a href="settings_layout_options.html">Settings Layout Options</a> page for more details.
                    </li>
                    <li>
                        <span class="badge bg-primary-800 fw-n mr-1 width-3">PLUG</span> Updated all plugins to latest,
                        check your <code>package.json</code>
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">PCKG</span> Updated build file, updated
                        package.json
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCSS</span> Added <strong>Fixed Footer</strong>
                        option. See <a href="#" data-toggle="modal" data-target=".js-modal-settings"
                            class="font-weight-bold"><i class="fal fa-cog"></i> settings panel</a> under <span
                            class="font-weight-bold">App Layout</span> for more details.
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCSS</span> Added <strong>Dark
                            Navigation</strong> option. See <a href="#" data-toggle="modal"
                            data-target=".js-modal-settings" class="font-weight-bold"><i class="fal fa-cog"></i> settings
                            panel</a> under <span class="font-weight-bold">Global Modification</span> for more details.
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCSS</span> Added <strong>Theme Modes
                            Layer</strong> addon for <strong>Dark</strong> and <strong>Light</strong> Themes. See <a
                            href="#" data-toggle="modal" data-target=".js-modal-settings" class="font-weight-bold"><i
                                class="fal fa-cog"></i> settings panel</a> under <span class="font-weight-bold">Theme Modes
                            (beta)</span> for more details.
                        <div class="notes ml-6 mt-2 mb-2">
                            <strong>DOM Changes:</strong> We have hardcoded two additional stylesheets to the
                            <code>head</code> element, refer to the HTML ID <code>#mytheme</code> and <code>#myskin</code>
                        </div>
                        <div class="ml-6 mb-3">
                            <img src="/admin/img/demo/modes/mode-dark.png" alt="Theme Modes (Dark)"
                                class="border mt-2 mr-1">
                            <img src="/admin/img/demo/modes/mode-light.png" alt="Theme Modes (Light)"
                                class="border mr-1 mt-2">
                        </div>
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Added <a
                            href="page_projects.html">Projects View</a> page
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Updated Docs to reflect recent
                        changes
                    </li>
                </ul>
                <hr class="mt-4 mb-g">
                <h4 class="mb-g">
                    Build v 4.4.5
                    <small>
                        Hot Fix
                    </small>
                </h4>
                <ul class="nav d-block fs-md pl-3">
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCRP</span> Fixed bugs for Project Structure
                        page
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Updated Docs
                    </li>
                </ul>
                <hr class="mt-4 mb-g">
                <h4 class="mb-g">
                    Build v 4.4.3
                    <small>
                        BIG Documentation Update
                    </small>
                </h4>
                <ul class="nav d-block fs-md pl-3">
                    <li>
                        <span class="badge bg-primary-800 fw-n mr-1 width-3">PLUG</span> Updated all plugins to latest,
                        check your <code>package.json</code>
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">PCKG</span> Updated build file, updated
                        package.json
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> <span
                            class="text-danger font-weight-bold">Announcement:</span> Removed Seed projects for PHP,
                        Angular, ASP.NET and RubyOnRails Seed projects from the HTML Flavor. They are now sold separately by
                        their respected Co-Authors. <a href="javascript:void(0);" data-toggle="modal"
                            data-target="#default-example-modal-lg" class="font-weight-bold">Click here to find out why we
                            did this</a>.
                        <!-- Modal Large -->
                        <div class="modal fade" id="default-example-modal-lg" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-transparent text-white" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Licensed Content Update</h2>
                                        <button type="button" class="close text-white" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Dear Folks,</p>
                                        <p>We have always felt strongly towards ensuring that every customer of SmartAdmin
                                            has an opportunity to grow a strong connection with the entire range of Products
                                            of what the Theme has to offer, as such we have always included
                                            <strong>Seed</strong> versions of other Flavors, such as PHP, Angular,
                                            RubyOnRails and .NET Core, with the HTML Full purchase.
                                        </p>
                                        <p>These contributions were to give you a sneak peak of what the other Flavors had
                                            to offer and to of course assist you as our loyal customers with the target
                                            development platform of your choice. After much considering, we feel that this
                                            model does not allow us to fully support the Theme in the way we had envisioned.
                                        </p>
                                        <p>This means, that starting from this update, we are removing the seeds to
                                            encourage adoption of the Full versions. Obtaining the Seed and the Full
                                            versions of the Flavor you are interested in, will now only be made available
                                            after the purchase of each respective Flavor product on WrapBootstrap and will
                                            no longer be part of the HTML Flavor itself.</p>
                                        <hr>
                                        <h4>WrapBootstrap Product Links</h4>
                                        <ul>
                                            <li>
                                                <a href="https://wrapbootstrap.com/theme/smartadmin-asp.net-core-responsive-webapp-WB073L89G?ref=myorange"
                                                    target="_blank" class="text-warning">SmartAdmin for .NET Core</a>
                                            </li>
                                            <li>
                                                <a href="https://wrapbootstrap.com/theme/smartadmin-php-7-responsive-webapp-WB05M9585?ref=myorange"
                                                    target="_blank" class="text-warning">SmartAdmin for PHP</a>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p>We do apologize that we have had to take this decision, it was not made lightly.
                                            Rest assured though that we will always continue to support the community to our
                                            best abilities and with your interest at heart.</p>
                                        <p>Sincerely,<br>
                                            Sunny</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Updated SLIM & Seed Project
                    </li>
                    <li>
                        <span class="badge badge-warning fw-n mr-1">MISC</span> Fixed all reported bugs and errors
                    </li>
                    <li>
                        <span class="badge badge-warning fw-n mr-1">MISC</span> Fixed Summernote's icon issue from last
                        update
                    </li>
                    <li>
                        <span class="badge bg-success-700 fw-n mr-1 width-3">FICN</span> Updated Fontawesome Pro packages
                        adding COVID-19 Icon sets.
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Revamped Documentation
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCRP</span> Added function for SmartPanels 'One
                        Click' turn on Icons. See <a href="#" data-toggle="modal" data-target=".js-modal-settings"
                            class="font-weight-bold"><i class="fal fa-cog"></i> settings panel</a> under <span
                            class="font-weight-bold">Accessibility</span> for more details.
                    </li>
                </ul>
                <hr class="mt-4 mb-g">
                <h4 class="mb-g">
                    Build v 4.4.1
                    <small>
                        Improvements and bug fixes
                    </small>
                </h4>
                <ul class="nav d-block fs-md pl-3">
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCRP</span> Updated all plugins to latest
                        version
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">PCKG</span> Updated build file, updated
                        package.json
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Updated PHP Seed flavor
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Updated SLIM project (HTML Flavor)
                    </li>
                    <li>
                        <span class="badge badge-warning fw-n mr-1">MISC</span> Fixed all reported bugs and errors
                    </li>
                    <li>
                        <span class="badge bg-success-700 fw-n mr-1 width-3">FICN</span> Updated Fontawesome Pro packages
                        adding the all new <a href="icons_fontawesome_duotone.html" target="_blank">DuoTone icons</a> now
                        with a total of 7500+ icons to choose from
                    </li>
                </ul>
                <hr class="mt-4 mb-g">
                <h4 class="mb-g">
                    Build v 4.0.2
                    <small>
                        Improvements and bug fixes
                    </small>
                </h4>
                <ul class="nav d-block fs-md pl-3">
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">JS</span> Updated Jquery 3.3.1 to 3.4.1
                        <ul class="nav fs-b ml-3 pl-4 mb-2">
                            <li class="notes">
                                <strong>Notes:</strong> This change may impact some plugins on IE10, if you are seeing any
                                issues with datatables for IE10, please revert back to jquery 3.3.1 through the build.json.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCRP</span> Updated all plugins to latest
                        version
                    </li>
                    <li>
                        <span class="badge badge-warning fw-n mr-1">MISC</span> Updated <code>./src/img</code>,
                        <code>./src/custom/plugins</code> directories
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">PCKG</span> Updated build file, updated
                        package.json
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Updated PHP Seed flavor
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Added Ruby on Rails Seed flavor
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Updated SLIM project (HTML Flavor)
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Added AJAX Alpha Flavor (HTML
                        Flavor)
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Added Angular 8 Alpha Seed (work in
                        progress)
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">CSS</span> Added RTL CSS which are automated.
                        You can even write your own CSS and it will auto convert to RTL. Seed docs for proper usage.
                    </li>
                    <li>
                        <span class="badge badge-warning fw-n mr-1">MISC</span> Fixed all reported bugs and errors
                    </li>
                </ul>
                <hr class="mt-4 mb-g">
                <h4 class="mb-g">
                    Build v 4.0.1
                    <small>
                        Improvements and bug fixes
                    </small>
                </h4>
                <ul class="nav d-block fs-md pl-3">
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Added Seed project (PHP Flavor)
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Added SLIM project (HTML Flavor)
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Added Full project (HTML AJAX
                        Flavor - Alpha release)
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCRP</span> Fixed linux bug for lowercase
                        uppercase in build.json
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Fixed error on blank.hbs
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCRP</span> Fixed fontawesome page bugs
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Updated app flavors page (added
                        content for app flavor)
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Updated app docs
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Updated license page to reflect
                        latest license changes on wrapbootstrap
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Update statistic bug
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Updated UI for side panels
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Added google analytics option
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Fixed broken link for inbox
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCRP</span> Added smartvoice.js (work in
                        progress, page will be added in next release)
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Spell corrections and added links
                        to footer
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">SCSS</span> CSS bug fix for
                        (_nav-function-hidden.scss, _settings-demo-theme-colors.scss, _mod-clear-bg.scss,
                        _mod-clean-page-bg.scss, _custom-bootstrap-varients.scss, _nav.scss, _mod-text-size.scss)
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">SCSS</span> Added NEW skin options (overlays
                        base CSS file so there might be a flicker when switching pages because of the delay for server
                        fetching), over 13 unique skins are now part of the base app
                    </li>
                    <li>
                        <span class="badge bg-primary-800 fw-n mr-1 width-3">PLUG</span> Updated all plugins to latest,
                        check your <code>package.json</code>
                    </li>
                    <li>
                        <span class="badge bg-danger-500 fw-n mr-1 width-3">DEL</span> Removed <code>nav_dev.json</code>,
                        <code>license.md</code>
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Updated docs
                    </li>
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Added source files HTML
                    </li>
                    <li>
                        <span class="badge badge-warning fw-n mr-1">MISC</span> Updated <code>./src/img</code>,
                        <code>./src/custom/plugins</code> directories
                    </li>
                </ul>
                <hr class="mt-4 mb-g">
                <h4 class="mb-g">
                    Build v 4.0.0
                    <!-- /* 4.0.0*/ -->
                    <small>
                        Initial release
                    </small>
                </h4>
                <ul class="nav d-block fs-md pl-3">
                    <li>
                        <span class="badge badge-success fw-n mr-1 width-3">*HBS</span> Added source files HTML
                        <ul class="nav fs-b ml-3 pl-4 mb-2">
                            <li class="notes">
                                <strong>Notes:</strong> Layouts are neatly organized into handlebar template partials
                                <code>*.hbs</code>. Making it much easier to edit, remove or add new pages. There are three
                                base
                                layouts (main.hbs, auth.hbs, and alt.hbs)
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">PCKG</span> Updated BS4 pack to v4.3
                    </li>
                    <li>
                        <span class="badge bg-fusion-600 fw-n mr-1 width-3">SCSS</span> Added source files for CSS
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Added Seed project (HTML Flavor)
                    </li>
                    <li>
                        <span class="badge bg-fusion-200 fw-n mr-1 width-3">PRJT</span> Added Seed project (.Net Flavor)
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCRP</span> Added package.json
                    </li>
                    <li>
                        <span class="badge badge-primary fw-n mr-1 width-3">SCRP</span> Added _modules for SmartAdmin
                        WebApp Core
                    </li>
                    <li>
                        <span class="badge bg-primary-800 fw-n mr-1 width-3">PLUG</span> Added npm dependencies:
                        <ul class="fs-b ml-3 mb-2">
                            <li>"@fullcalendar/bootstrap": "^4.2.0",</li>
                            <li>"@fullcalendar/core": "^4.2.0",</li>
                            <li>"@fullcalendar/daygrid": "^4.2.0",</li>
                            <li>"@fullcalendar/interaction": "^4.2.0",</li>
                            <li>"@fullcalendar/list": "^4.2.0",</li>
                            <li>"@fullcalendar/timegrid": "^4.2.0",</li>
                            <li>"bootbox": "^5.1.3",</li>
                            <li>"bootstrap": "^4.3.1",</li>
                            <li>"bootstrap-colorpicker": "^3.1.2",</li>
                            <li>"bootstrap-datepicker": "^1.9.0",</li>
                            <li>"bootstrap-daterangepicker": "^3.0.5",</li>
                            <li>"bootstrap-markdown": "^2.10.0",</li>
                            <li>"c3": "^0.7.1",</li>
                            <li>"chart.js": "^2.8.0",</li>
                            <li>"chartist": "^0.11.2",</li>
                            <li>"cropperjs": "^1.5.1",</li>
                            <li>"d3": "^5.9.2",</li>
                            <li>"datatables.net-autofill-bs4": "^2.3.3",</li>
                            <li>"datatables.net-bs4": "^1.10.19",</li>
                            <li>"datatables.net-buttons-bs4": "^1.5.6",</li>
                            <li>"datatables.net-colreorder-bs4": "^1.5.1",</li>
                            <li>"datatables.net-fixedcolumns-bs4": "^3.2.6",</li>
                            <li>"datatables.net-fixedheader-bs4": "^3.1.5",</li>
                            <li>"datatables.net-keytable-bs4": "^2.5.0",</li>
                            <li>"datatables.net-responsive-bs4": "^2.2.3",</li>
                            <li>"datatables.net-rowgroup-bs4": "^1.1.0",</li>
                            <li>"datatables.net-rowreorder-bs4": "^1.2.5",</li>
                            <li>"datatables.net-scroller-bs4": "^2.0.0",</li>
                            <li>"datatables.net-select-bs4": "^1.3.0",</li>
                            <li>"dropzone": "^5.5.1",</li>
                            <li>"dygraphs": "^2.1.0",</li>
                            <li>"easy-pie-chart": "^2.1.7",</li>
                            <li>"es6-promise-polyfill": "^1.2.0",</li>
                            <li>"flot": "^0.8.3",</li>
                            <li>"flot-spline": "0.0.1",</li>
                            <li>"holderjs": "^2.9.6",</li>
                            <li>"i18next-client": "^1.11.4",</li>
                            <li>"inputmask": "^4.0.8",</li>
                            <li>"ion-rangeslider": "^2.3.0",</li>
                            <li>"jquery": "3.3.1",</li>
                            <li>"jquery-cropper": "^1.0.0",</li>
                            <li>"jquery-mousewheel": "^3.1.13",</li>
                            <li>"jquery-slimscroll": "^1.3.8",</li>
                            <li>"jquery-sparkline": "^2.4.0",</li>
                            <li>"jquery-throttle-debounce": "github:myorangeca/jquery-throttle-debounce",</li>
                            <li>"jquery-ui": "^1.12.1",</li>
                            <li>"jquery.flot.tooltip": "^0.9.0",</li>
                            <li>"jqvmap": "^1.5.1",</li>
                            <li>"jszip": "^3.2.1",</li>
                            <li>"justifiedGallery": "^3.7.0",</li>
                            <li>"lightgallery": "^1.6.12",</li>
                            <li>"markdown": "^0.5.0",</li>
                            <li>"moment": "^2.24.0",</li>
                            <li>"node-waves": "^0.7.6",</li>
                            <li>"nouislider": "^13.1.5",</li>
                            <li>"pace-js": "^1.0.2",</li>
                            <li>"pdfmake": "^0.1.56",</li>
                            <li>"peity": "^3.3.0",</li>
                            <li>"popper.js": "^1.15.0",</li>
                            <li>"select2": "4.0.7",</li>
                            <li>"smartwizard": "^4.3.1",</li>
                            <li>"summernote": "^0.8.12",</li>
                            <li>"sweetalert2": "^8.11.7",</li>
                            <li>"toastr": "^2.1.4"</li>
                        </ul>
                    </li>
                    <li>
                        <span class="badge bg-primary-800 fw-n mr-1 width-3">GULP</span> <strong>Added gulpfile.js with
                            automated tasks: </strong>
                        <ul class="fs-b ml-3 mb-2">
                            <li>
                                compress images/*.css/*.js files
                            </li>
                            <li>
                                concatinate modules to core JS package
                            </li>
                            <li>
                                copy fonts/icons/favicon/videos
                            </li>
                            <li>
                                organize bower components
                            </li>
                            <li>
                                sass and hbs compiler
                            </li>
                            <li>
                                gulp task watch
                            </li>
                            <li>
                                gulp task connect
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="badge badge-warning fw-n mr-1 width-3">MISC</span> Added .favicon
                    </li>
                    <li>
                        <span class="badge badge-warning fw-n mr-1 width-3">MISC</span> Added IMG, VIDEO, and MISC
                        directory for
                        all media
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal"></div>
    </main>
@endsection
