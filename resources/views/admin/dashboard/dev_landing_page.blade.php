<!DOCTYPE html>
<!--
Template Name:: SmartAdmin PHP Responsive WebApp - Template built with Bootstrap 4 and PHP
Version: 4.5.3
Author: Jovanni Lo
Website: https://smartadmin.lodev09.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-php-responsive-webapp-WB05M9585
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Landing Page - SmartAdmin v4.6.1</title>
    <meta name="description" content="Landing Page - SmartAdmin v4.6.1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="/admin/css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="/admin/css/app.bundle.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="/admin/css/mytheme.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="/admin/css/skins/skin-master.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="/admin/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/admin/img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="/admin/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <!-- Optional: page related CSS -->
    <!-- PHP docs -->
    <link rel="stylesheet" media="screen, print" href="/admin/css/markdown.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css">
</head>

<body class="mod-skin-1 mod-nav-link">
    <div class="page-wrapper auth">
        <div class="page-inner bg-brand-gradient">
            <div class="page-content-wrapper bg-transparent m-0">
                {{--                 <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient sticky-top">
                    <div class="d-flex align-items-center container p-0">

                    </div>
                </div> --}}
                <nav class="navbar navbar-expand-lg shadow-lg px-4 bg-brand-gradient sticky-top">
                    <div class="d-flex align-items-center container p-0">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler text-white" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1"
                                        aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <div>
                                <a href="#" class="header-icon" data-toggle="dropdown" title="My Apps">
                                    <i class="fal fa-cube"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated w-auto h-auto">
                                    <div
                                        class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top">
                                        <h4 class="m-0 text-center color-white">
                                            Quick Shortcut
                                            <small class="mb-0 opacity-80">User Applications & Addons</small>
                                        </h4>
                                    </div>
                                    <div class="custom-scroll h-100">
                                        <ul class="app-list">
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-2 icon-stack-3x color-primary-600"></i>
                                                        <i class="base-3 icon-stack-2x color-primary-700"></i>
                                                        <i class="ni ni-settings icon-stack-1x text-white fs-lg"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Services
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-2 icon-stack-3x color-primary-400"></i>
                                                        <i class="base-10 text-white icon-stack-1x"></i>
                                                        <i class="ni md-profile color-primary-800 icon-stack-2x"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Account
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-9 icon-stack-3x color-success-400"></i>
                                                        <i class="base-2 icon-stack-2x color-success-500"></i>
                                                        <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Security
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-18 icon-stack-3x color-info-700"></i>
                                                        <span
                                                            class="position-absolute pos-top pos-left pos-right color-white fs-md mt-2 fw-400">28</span>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Calendar
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-7 icon-stack-3x color-info-500"></i>
                                                        <i class="base-7 icon-stack-2x color-info-700"></i>
                                                        <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Stats
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                        <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                        <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Messages
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-4 icon-stack-3x color-fusion-400"></i>
                                                        <i class="base-5 icon-stack-2x color-fusion-200"></i>
                                                        <i class="base-5 icon-stack-1x color-fusion-100"></i>
                                                        <i class="fal fa-keyboard icon-stack-1x color-info-50"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Notes
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                        <i
                                                            class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                        <i
                                                            class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                        <i
                                                            class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Photos
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                        <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                        <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                        <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                        <i
                                                            class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Maps
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i
                                                            class="base-5 icon-stack-3x color-success-700 opacity-80"></i>
                                                        <i
                                                            class="base-12 icon-stack-2x color-success-700 opacity-30"></i>
                                                        <i class="fal fa-comment-alt icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Chat
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-5 icon-stack-3x color-warning-600"></i>
                                                        <i
                                                            class="base-7 icon-stack-2x color-warning-800 opacity-50"></i>
                                                        <i class="fal fa-phone icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Phone
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-6 icon-stack-3x color-danger-600"></i>
                                                        <i class="fal fa-chart-line icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Projects
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="w-100">
                                                <a href="#" class="btn btn-default mt-4 mb-2 pr-5 pl-5"> Add
                                                    more
                                                    apps </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com"
                                    class="header-icon d-flex align-items-center justify-content-center ml-2">
                                    <img src="/admin/img/demo/avatars/avatar-admin.png"
                                        class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                                    <!--
                                        you can also add username next to the avatar with the codes below:
                                        <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
                                        <i class="ni ni-chevron-down hidden-xs-down"></i>
                                    -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="/admin/img/demo/avatars/avatar-admin.png"
                                                    class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                            </span>
                                            <div class="info-card-text">
                                                <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern
                                                </div>
                                                <span
                                                    class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="/dashboard-admin" class="dropdown-item">
                                        <span data-i18n="drpdwn.dashboard_admin">Dashboard Admin</span>
                                    </a>
                                    <a href="#" class="dropdown-item" data-action="app-print">
                                        <span data-i18n="drpdwn.print">Print</span>
                                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                                    </a>
                                    <div class="dropdown-multilevel dropdown-multilevel-left">
                                        <div class="dropdown-item">
                                            Language
                                        </div>
                                        <div class="dropdown-menu">
                                            <a href="#?lang=fr" class="dropdown-item" data-action="lang"
                                                data-lang="fr">Français</a>
                                            <a href="#?lang=en" class="dropdown-item active" data-action="lang"
                                                data-lang="en">English
                                                (US)</a>
                                            <a href="#?lang=es" class="dropdown-item" data-action="lang"
                                                data-lang="es">Español</a>
                                            <a href="#?lang=ru" class="dropdown-item" data-action="lang"
                                                data-lang="ru">Русский язык</a>
                                            <a href="#?lang=jp" class="dropdown-item" data-action="lang"
                                                data-lang="jp">日本語</a>
                                            <a href="#?lang=ch" class="dropdown-item" data-action="lang"
                                                data-lang="ch">中文</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#"
                                        class="dropdown-item fw-500 pt-3 pb-3 js-bootbox-alert-smartadmin"
                                        data-title="Konfirmasi" data-message="Apakah Anda yakin ingin logout?"
                                        data-auto-redirect-url="/page_login_alt" title="Logout">
                                        <span data-i18n="drpdwn.page-logout">Logout</span>
                                        <span class="float-right fw-n">&commat;codexlantern</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="flex-1"
                    style="background: url(/admin/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                        <h2 class="fw-600 text-white">
                            Sticky Element: Scroll Down to See the Effect
                            <small>
                                Scroll down this page to see how sticky positioning works
                            </small>
                        </h2>
                        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                            2020 © SmartAdmin for PHP by&nbsp;<a href='https://smartadmin.lodev09.com'
                                class='text-white opacity-40 fw-500' title='smartadmin.lodev09.com'
                                target='_blank'>@lodev09</a>
                        </div>

                        <div class="flex-1 fs-lg fw-300 p-1 border-faded rounded mb-g">
                            <div class="row">
                                <div class="col-lg-6 col-xl-3 order-lg-1 order-xl-1">
                                    <!-- profile summary -->
                                    <div class="card mb-g rounded-top">
                                        <div class="row no-gutters row-grid">
                                            <div class="col-12">
                                                <div
                                                    class="d-flex flex-column align-items-center justify-content-center p-4">
                                                    <img src="/admin/img/demo/avatars/avatar-admin-lg.png"
                                                        class="rounded-circle shadow-2 img-thumbnail" alt="">
                                                    <h5 class="mb-0 fw-700 text-center mt-3">
                                                        Dr. Codex Lantern
                                                        <small class="text-muted mb-0">Toronto, Canada</small>
                                                    </h5>
                                                    <div class="mt-4 text-center demo">
                                                        <a href="javascript:void(0);" class="fs-xl"
                                                            style="color:#3b5998">
                                                            <i class="fab fa-facebook"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="fs-xl"
                                                            style="color:#38A1F3">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="fs-xl"
                                                            style="color:#db3236">
                                                            <i class="fab fa-google-plus"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="fs-xl"
                                                            style="color:#0077B5">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="fs-xl"
                                                            style="color:#000000">
                                                            <i class="fab fa-reddit-alien"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="fs-xl"
                                                            style="color:#00AFF0">
                                                            <i class="fab fa-skype"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="fs-xl"
                                                            style="color:#0063DC">
                                                            <i class="fab fa-flickr"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-center py-3">
                                                    <h5 class="mb-0 fw-700">
                                                        764
                                                        <small class="text-muted mb-0">Connections</small>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-center py-3">
                                                    <h5 class="mb-0 fw-700">
                                                        1,673
                                                        <small class="text-muted mb-0">Followers</small>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3 text-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn-link font-weight-bold">Follow</a> <span
                                                        class="text-primary d-inline-block mx-3">&#9679;</span>
                                                    <a href="javascript:void(0);"
                                                        class="btn-link font-weight-bold">Message</a> <span
                                                        class="text-primary d-inline-block mx-3">&#9679;</span>
                                                    <a href="javascript:void(0);"
                                                        class="btn-link font-weight-bold">Connect</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- photos -->
                                    <div class="card mb-g">
                                        <div class="row row-grid no-gutters">
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <h2 class="mb-0 fs-xl">
                                                        Photos
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center px-3 py-4 d-flex position-relative height-10 border">
                                                    <span
                                                        class="position-absolute pos-top pos-left pos-right pos-bottom"
                                                        style="background-image: url('/admin/img/demo/gallery/thumb/1.jpg');background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center px-3 py-4 d-flex position-relative height-10 border">
                                                    <span
                                                        class="position-absolute pos-top pos-left pos-right pos-bottom"
                                                        style="background-image: url('/admin/img/demo/gallery/thumb/2.jpg');background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center px-3 py-4 d-flex position-relative height-10 border">
                                                    <span
                                                        class="position-absolute pos-top pos-left pos-right pos-bottom"
                                                        style="background-image: url('/admin/img/demo/gallery/thumb/3.jpg');background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center px-3 py-4 d-flex position-relative height-10 border">
                                                    <span
                                                        class="position-absolute pos-top pos-left pos-right pos-bottom"
                                                        style="background-image: url('/admin/img/demo/gallery/thumb/4.jpg');background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center px-3 py-4 d-flex position-relative height-10 border">
                                                    <span
                                                        class="position-absolute pos-top pos-left pos-right pos-bottom"
                                                        style="background-image: url('/admin/img/demo/gallery/thumb/5.jpg');background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center px-3 py-4 d-flex position-relative height-10 border">
                                                    <span
                                                        class="position-absolute pos-top pos-left pos-right pos-bottom"
                                                        style="background-image: url('/admin/img/demo/gallery/thumb/6.jpg');background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center px-3 py-4 d-flex position-relative height-10 border">
                                                    <span
                                                        class="position-absolute pos-top pos-left pos-right pos-bottom"
                                                        style="background-image: url('/admin/img/demo/gallery/thumb/7.jpg');background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center px-3 py-4 d-flex position-relative height-10 border">
                                                    <span
                                                        class="position-absolute pos-top pos-left pos-right pos-bottom"
                                                        style="background-image: url('/admin/img/demo/gallery/thumb/8.jpg');background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center px-3 py-4 d-flex position-relative height-10 border">
                                                    <span
                                                        class="position-absolute pos-top pos-left pos-right pos-bottom"
                                                        style="background-image: url('/admin/img/demo/gallery/thumb/9.jpg');background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3 text-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn-link font-weight-bold">View all</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- contacts -->
                                    <div class="card mb-g">
                                        <div class="row row-grid no-gutters">
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <h2 class="mb-0 fs-xl">
                                                        Contacts
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center p-3 d-flex flex-column hover-highlight">
                                                    <span class="profile-image rounded-circle d-block m-auto"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                    <span class="d-block text-truncate text-muted fs-xs mt-1">Oliver
                                                        Kopyov</span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center p-3 d-flex flex-column hover-highlight">
                                                    <span class="profile-image rounded-circle d-block m-auto"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                    <span class="d-block text-truncate text-muted fs-xs mt-1">Sesha
                                                        Gray</span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center p-3 d-flex flex-column hover-highlight">
                                                    <span class="profile-image rounded-circle d-block m-auto"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                    <span class="d-block text-truncate text-muted fs-xs mt-1">Preny
                                                        Amdaney</span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center p-3 d-flex flex-column hover-highlight">
                                                    <span class="profile-image rounded-circle d-block m-auto"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                    <span class="d-block text-truncate text-muted fs-xs mt-1">Dr. John
                                                        Cook PhD</span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center p-3 d-flex flex-column hover-highlight">
                                                    <span class="profile-image rounded-circle d-block m-auto"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                    <span class="d-block text-truncate text-muted fs-xs mt-1">Sarah
                                                        McBrook</span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center p-3 d-flex flex-column hover-highlight">
                                                    <span class="profile-image rounded-circle d-block m-auto"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-i.png'); background-size: cover;"></span>
                                                    <span class="d-block text-truncate text-muted fs-xs mt-1">Jimmy
                                                        Fellan</span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center p-3 d-flex flex-column hover-highlight">
                                                    <span class="profile-image rounded-circle d-block m-auto"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-j.png'); background-size: cover;"></span>
                                                    <span class="d-block text-truncate text-muted fs-xs mt-1">Arica
                                                        Grace</span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center p-3 d-flex flex-column hover-highlight">
                                                    <span class="profile-image rounded-circle d-block m-auto"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-k.png'); background-size: cover;"></span>
                                                    <span class="d-block text-truncate text-muted fs-xs mt-1">Jim
                                                        Ketty</span>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);"
                                                    class="text-center p-3 d-flex flex-column hover-highlight">
                                                    <span class="profile-image rounded-circle d-block m-auto"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                                    <span class="d-block text-truncate text-muted fs-xs mt-1">Ali
                                                        Grey</span>
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3 text-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn-link font-weight-bold">View all</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                                    <div class="card border mb-g">
                                        <div class="card-body pl-4 pt-4 pr-4 pb-0">
                                            <div class="d-flex flex-column">
                                                <div class="border-0 flex-1 position-relative shadow-top">
                                                    <div class="pt-2 pb-1 pr-0 pl-0 rounded-0 position-relative"
                                                        tabindex="-1">
                                                        <span
                                                            class="profile-image rounded-circle d-block position-absolute"
                                                            style="background-image:url('/admin/img/demo/avatars/avatar-admin.png'); background-size: cover;"></span>
                                                        <div class="pl-5 ml-5">
                                                            <textarea class="form-control border-0 p-0 fs-xl bg-transparent" rows="4"
                                                                placeholder="What's on your mind Codex?..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="height-8 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-icon fs-xl width-1 mr-1" data-toggle="tooltip"
                                                        data-original-title="More options" data-placement="top">
                                                        <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1"
                                                        data-toggle="tooltip" data-original-title="Attach files"
                                                        data-placement="top">
                                                        <i class="fal fa-paperclip color-fusion-300"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1"
                                                        data-toggle="tooltip" data-original-title="Insert photo"
                                                        data-placement="top">
                                                        <i class="fal fa-camera color-fusion-300"></i>
                                                    </a>
                                                    <button class="btn btn-info shadow-0 ml-auto">Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- post comment -->
                                    <div class="card mb-g">
                                        <div class="card-body pb-0 px-4">
                                            <div
                                                class="d-flex flex-row pb-3 pt-2  border-top-0 border-left-0 border-right-0">
                                                <div class="d-inline-block align-middle status status-success mr-3">
                                                    <span class="profile-image rounded-circle d-block"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                </div>
                                                <h5 class="mb-0 flex-1 text-dark fw-500">
                                                    Dr. John Cook PhD
                                                    <small class="m-0 l-h-n">
                                                        Human Resources & Psychiatry Division
                                                    </small>
                                                </h5>
                                                <span class="text-muted fs-xs opacity-70">
                                                    3 hours
                                                </span>
                                            </div>
                                            <div
                                                class="pb-3 pt-2 border-top-0 border-left-0 border-right-0 text-muted">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur.
                                            </div>
                                            <div class="d-flex align-items-center demo-h-spacing py-3">
                                                <a href="javascript:void(0);"
                                                    class="d-inline-flex align-items-center text-dark">
                                                    <i class="fas fa-heart fs-xs mr-1 text-danger"></i> <span>2
                                                        Likes</span>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="d-inline-flex align-items-center text-dark">
                                                    <i class="fal fa-comment fs-xs mr-1"></i> <span>2 Comments</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="card-body py-0 px-4 border-faded border-right-0 border-bottom-0 border-left-0">
                                            <div class="d-flex flex-column align-items-center">
                                                <!-- comment -->
                                                <div class="d-flex flex-row w-100 py-4">
                                                    <div
                                                        class="d-inline-block align-middle status status-sm status-success mr-3">
                                                        <span
                                                            class="profile-image profile-image-md rounded-circle d-block mt-1"
                                                            style="background-image:url('/admin/img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                    </div>
                                                    <div class="mb-0 flex-1 text-dark">
                                                        <div class="d-flex">
                                                            <a href="javascript:void(0);" class="text-dark fw-500">
                                                                Test name
                                                            </a><span class="text-muted fs-xs opacity-70 ml-auto">
                                                                15 minutes
                                                            </span>
                                                        </div>
                                                        <p class="mb-0">
                                                            Excellent work, looking forward to it.
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="m-0 w-100">
                                                <!-- comment end -->
                                                <!-- comment -->
                                                <div class="d-flex flex-row w-100 py-4">
                                                    <div
                                                        class="d-inline-block align-middle status status-sm status-success mr-3">
                                                        <span
                                                            class="profile-image profile-image-md rounded-circle d-block mt-1"
                                                            style="background-image:url('/admin/img/demo/avatars/avatar-admin.png'); background-size: cover;"></span>
                                                    </div>
                                                    <div class="mb-0 flex-1 text-dark">
                                                        <div class="d-flex">
                                                            <a href="javascript:void(0);" class="text-dark fw-500">
                                                                Dr. Codex Lantern
                                                            </a><span class="text-muted fs-xs opacity-70 ml-auto">
                                                                3 minutes
                                                            </span>
                                                        </div>
                                                        <p class="mb-0">
                                                            Congrats mate!
                                                        </p>
                                                        <div class="pl-0 d-flex flex-row w-100 pb-0 pt-4">
                                                            <div
                                                                class="d-inline-block align-middle status status-sm status-success mr-3">
                                                                <span
                                                                    class="profile-image profile-image-md rounded-circle d-block mt-1"
                                                                    style="background-image:url('/admin/img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                            </div>
                                                            <div class="mb-0 flex-1 text-dark">
                                                                <div class="d-flex">
                                                                    <a href="javascript:void(0);"
                                                                        class="text-dark fw-500">
                                                                        Dr. John Cook PhD
                                                                    </a><span
                                                                        class="text-muted fs-xs opacity-70 ml-auto">
                                                                        30 seconds
                                                                    </span>
                                                                </div>
                                                                <p class="mb-0">
                                                                    Thanks!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="m-0 w-100">
                                                <!-- comment end -->
                                                <!-- add comment -->
                                                <div class="py-3 w-100">
                                                    <textarea class="form-control border-0 p-0 bg-transparent" rows="2" placeholder="add a comment..."></textarea>
                                                </div>
                                                <!-- add comment end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- post comment - end -->
                                    <!-- post picture -->
                                    <div class="card mb-g">
                                        <div class="card-body pb-0 px-4">
                                            <div
                                                class="d-flex flex-row pb-3 pt-2  border-top-0 border-left-0 border-right-0">
                                                <div class="d-inline-block align-middle status status-success mr-3">
                                                    <span class="profile-image rounded-circle d-block"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-admin.png'); background-size: cover;"></span>
                                                </div>
                                                <h5 class="mb-0 flex-1 text-dark fw-500">
                                                    Dr. Codex Lantern
                                                    <small class="m-0 l-h-n">
                                                        Chief of Surgery
                                                    </small>
                                                </h5>
                                                <span class="text-muted fs-xs opacity-70">
                                                    1 day
                                                </span>
                                            </div>
                                            <div
                                                class="pb-3 pt-2 border-top-0 border-left-0 border-right-0 text-muted">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt</p>
                                                <img src="/admin/img/demo/gallery/46.jpg" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="d-flex align-items-center demo-h-spacing py-3">
                                                <a href="javascript:void(0);"
                                                    class="d-inline-flex align-items-center text-dark">
                                                    <i class="fal fa-heart fs-xs mr-1"></i> <span>37 Likes</span>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="d-inline-flex align-items-center text-dark">
                                                    <i class="fal fa-comment fs-xs mr-1"></i> <span>1 Comment</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="card-body py-0 px-4 border-faded border-right-0 border-bottom-0 border-left-0">
                                            <div class="d-flex flex-column align-items-center">
                                                <!-- comment -->
                                                <div class="d-flex flex-row w-100 py-4">
                                                    <div
                                                        class="d-inline-block align-middle status status-sm status-success mr-3">
                                                        <span
                                                            class="profile-image profile-image-md rounded-circle d-block mt-1"
                                                            style="background-image:url('/admin/img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                    </div>
                                                    <div class="mb-0 flex-1 text-dark">
                                                        <div class="d-flex">
                                                            <a href="javascript:void(0);" class="text-dark fw-500">
                                                                Sarah McBrook
                                                            </a><span class="text-muted fs-xs opacity-70 ml-auto">
                                                                10 minutes
                                                            </span>
                                                        </div>
                                                        <p class="mb-0">
                                                            Nice shot! When are you going again?
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="m-0 w-100">
                                                <!-- comment end -->
                                                <!-- add comment -->
                                                <div class="py-3 w-100">
                                                    <textarea class="form-control border-0 p-0 bg-transparent" rows="2" placeholder="add a comment..."></textarea>
                                                </div>
                                                <!-- add comment end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- post picture - end -->
                                    <!-- post article -->
                                    <div class="card mb-g">
                                        <div class="card-body pb-0 px-4">
                                            <div
                                                class="d-flex flex-row pb-3 pt-2  border-top-0 border-left-0 border-right-0">
                                                <div class="d-inline-block align-middle status status-success mr-3">
                                                    <span class="profile-image rounded-circle d-block"
                                                        style="background-image:url('/admin/img/demo/avatars/avatar-admin.png'); background-size: cover;"></span>
                                                </div>
                                                <h5 class="mb-0 flex-1 text-dark fw-500">
                                                    Dr. Codex Lantern
                                                    <small class="m-0 l-h-n">
                                                        Chief of Surgery
                                                    </small>
                                                </h5>
                                                <span class="text-muted fs-xs opacity-70">
                                                    2 days
                                                </span>
                                            </div>
                                            <div
                                                class="pb-3 pt-2 border-top-0 border-left-0 border-right-0 text-muted">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt</p>
                                                <!-- URL post -->
                                                <div class="d-flex overflow-hidden rounded w-100 border">
                                                    <div class="row no-gutters">
                                                        <div class="col-2 col-sm-3"
                                                            style="background-image:url('/admin/img/demo/profile/article-healthyfood.png'); background-size: cover;">
                                                        </div>
                                                        <div class="col">
                                                            <div class="bg-faded flex-1 p-4 h-100">
                                                                <h6 class="text-dark fw-500">
                                                                    Healthy food
                                                                </h6>
                                                                <p class="m-0">sed do eiusmod tempor incididunt ut
                                                                    labore et dolore magna aliqua. Ut enim ad minim
                                                                    veniam, quis nostrud exercitation ullamco sed do
                                                                    eiusmod tempor incididunt ut labore et dolore magna
                                                                    aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center demo-h-spacing py-3">
                                                <a href="javascript:void(0);"
                                                    class="d-inline-flex align-items-center text-dark">
                                                    <i class="fal fa-heart fs-xs mr-1"></i> <span>1 Likes</span>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="d-inline-flex align-items-center text-dark">
                                                    <i class="fal fa-comment fs-xs mr-1"></i> <span>0 Comments</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="card-body py-0 px-4 border-faded border-right-0 border-bottom-0 border-left-0">
                                            <div class="d-flex flex-column align-items-center">
                                                <!-- add comment -->
                                                <div class="py-3 w-100">
                                                    <textarea class="form-control border-0 p-0 bg-transparent" rows="2" placeholder="add a comment..."></textarea>
                                                </div>
                                                <!-- add comment end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- post article - end -->
                                </div>
                                <div class="col-lg-6 col-xl-3 order-lg-2 order-xl-3">
                                    <!-- add : -->
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <a href="javascript:void(0);" class="d-flex flex-row align-items-center">
                                                <div class='icon-stack display-3 flex-shrink-0'>
                                                    <i
                                                        class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                                    <i
                                                        class="fas fa-graduation-cap icon-stack-1x opacity-100 color-primary-500"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <strong>
                                                        Add Qualifications
                                                    </strong>
                                                    <br>
                                                    Adding qualifications will help gain more clients
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card mb-g">
                                        <div class="card-body">
                                            <a href="javascript:void(0);" class="d-flex flex-row align-items-center">
                                                <div class='icon-stack display-3 flex-shrink-0'>
                                                    <i
                                                        class="fal fa-circle icon-stack-3x opacity-100 color-warning-400"></i>
                                                    <i
                                                        class="fas fa-handshake icon-stack-1x opacity-100 color-warning-500"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <strong>
                                                        Add Skills
                                                    </strong>
                                                    <br>
                                                    Gain more potential clients by adding skills
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- rating -->
                                    <div class="card mb-g">
                                        <div class="row row-grid no-gutters">
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <h2 class="mb-0 fs-xl">
                                                        Dr. Codex Lantern's Rating
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3 d-flex text-primary align-items-center fs-xl">
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fal fa-star mr-1"></i>
                                                    <span class="ml-auto">4/5 Stars</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <div class="fw-500 fs-xs">Staff</div>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar bg-primary-300 bg-primary-gradient"
                                                            role="progressbar" style="width: 80%" aria-valuenow="80"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <div class="fw-500 fs-xs">Punctuality</div>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar bg-primary-300 bg-primary-gradient"
                                                            role="progressbar" style="width: 100%"
                                                            aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <div class="fw-500 fs-xs">Helpfulness</div>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar bg-primary-300 bg-primary-gradient"
                                                            role="progressbar" style="width: 75%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <div class="fw-500 fs-xs">Knowledge</div>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar bg-primary-300 bg-primary-gradient"
                                                            role="progressbar" style="width: 95%" aria-valuenow="95"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <div class="fw-500 fs-xs">Bedside manners</div>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar bg-danger-300 bg-warning-gradient"
                                                            role="progressbar" style="width: 30%" aria-valuenow="30"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3 text-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn-link font-weight-bold">View all</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- skills -->
                                    <div class="card mb-g">
                                        <div class="row row-grid no-gutters">
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <h2 class="mb-0 fs-xl">
                                                        Current Project
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <h5 class="text-danger">
                                                        Xray improvement algorythm
                                                        <small class="mt-0 mb-3 text-muted">
                                                            Migration of new API to local servers
                                                        </small>
                                                        <span
                                                            class="badge badge-danger fw-n position-absolute pos-top pos-right mt-3 mr-3">Delayed</span>
                                                    </h5>
                                                    <div class="row fs-b fw-300">
                                                        <div class="col text-left">
                                                            Progress
                                                        </div>
                                                        <div class="col text-right">
                                                            26%
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs d-flex mb-2 mt-1">
                                                        <span class="progress-bar bg-danger-500 progress-bar-striped"
                                                            role="progressbar" style="width: 26%" aria-valuenow="26"
                                                            aria-valuemin="0" aria-valuemax="100"></span>
                                                    </div>
                                                    <div class="fw-300 mb-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                Budget
                                                            </div>
                                                            <div class="col text-right text-danger">
                                                                -$155,473.70
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <h5>
                                                        Radioactive Isotope Research
                                                        <small class="mt-0 mb-3 text-muted">
                                                            Accelerator based methods of Technetium99m production –
                                                            target preparation and processing and beam monitoring
                                                            technologies
                                                        </small>
                                                        <span
                                                            class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">A</span>
                                                    </h5>
                                                    <div class="row fs-b fw-300">
                                                        <div class="col text-left">
                                                            Progress
                                                        </div>
                                                        <div class="col text-right">
                                                            90%
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-xs d-flex mb-2 mt-1">
                                                        <span class="progress-bar bg-primary-500 progress-bar-striped"
                                                            role="progressbar" style="width: 90%" aria-valuenow="90"
                                                            aria-valuemin="0" aria-valuemax="100"></span>
                                                    </div>
                                                    <div class="fw-300 mb-0">
                                                        <div class="row">
                                                            <div class="col">
                                                                Budget
                                                            </div>
                                                            <div class="col text-right">
                                                                $1,325,987.30
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="p-3 text-center">
                                                    <div class="text-left fw-400 ">
                                                        <div class="text-secondary mb-1">Project Owners</div>
                                                        <div class="fs-sm d-flex align-items-center">
                                                            <a href="#" class="btn-m-s">
                                                                <img src="/admin/img/demo/avatars/avatar-a.png"
                                                                    class="profile-image-sm rounded-circle"
                                                                    alt="aa">
                                                            </a>
                                                            <a href="#" class="btn-m-s">
                                                                <img src="/admin/img/demo/avatars/avatar-b.png"
                                                                    class="profile-image-sm rounded-circle"
                                                                    alt="aa">
                                                            </a>
                                                            <a href="#" class="btn-m-s">
                                                                <img src="/admin/img/demo/avatars/avatar-c.png"
                                                                    class="profile-image-sm rounded-circle"
                                                                    alt="aa">
                                                            </a>
                                                            <a href="#" class="btn-m-s">
                                                                <img src="/admin/img/demo/avatars/avatar-e.png"
                                                                    class="profile-image-sm rounded-circle"
                                                                    alt="aa">
                                                            </a>
                                                            <a href="#" class="btn-m-s">
                                                                <img src="/admin/img/demo/avatars/avatar-h.png"
                                                                    class="profile-image-sm rounded-circle"
                                                                    alt="aa">
                                                            </a>
                                                            <a href="#" class="btn-m-s">
                                                                <img src="/admin/img/demo/avatars/avatar-k.png"
                                                                    class="profile-image-sm rounded-circle"
                                                                    alt="aa">
                                                            </a>
                                                            <a href="#" class="btn-m-s fs-xs">
                                                                <span data-hasmore="+7"
                                                                    class="rounded-circle profile-image-sm">
                                                                    <img src="/admin/img/demo/avatars/avatar-j.png"
                                                                        class="profile-image-sm rounded-circle"
                                                                        alt="aa">
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- BEGIN Colors -->
    <!-- BEGIN Color profile -->
    <!-- this area is hidden and will not be seen on screens or screen readers -->
    <!-- we use this only for CSS color refernce for JS stuff -->
    <p id="js-color-profile" class="d-none">
        <span class="color-primary-50"></span>
        <span class="color-primary-100"></span>
        <span class="color-primary-200"></span>
        <span class="color-primary-300"></span>
        <span class="color-primary-400"></span>
        <span class="color-primary-500"></span>
        <span class="color-primary-600"></span>
        <span class="color-primary-700"></span>
        <span class="color-primary-800"></span>
        <span class="color-primary-900"></span>
        <span class="color-info-50"></span>
        <span class="color-info-100"></span>
        <span class="color-info-200"></span>
        <span class="color-info-300"></span>
        <span class="color-info-400"></span>
        <span class="color-info-500"></span>
        <span class="color-info-600"></span>
        <span class="color-info-700"></span>
        <span class="color-info-800"></span>
        <span class="color-info-900"></span>
        <span class="color-danger-50"></span>
        <span class="color-danger-100"></span>
        <span class="color-danger-200"></span>
        <span class="color-danger-300"></span>
        <span class="color-danger-400"></span>
        <span class="color-danger-500"></span>
        <span class="color-danger-600"></span>
        <span class="color-danger-700"></span>
        <span class="color-danger-800"></span>
        <span class="color-danger-900"></span>
        <span class="color-warning-50"></span>
        <span class="color-warning-100"></span>
        <span class="color-warning-200"></span>
        <span class="color-warning-300"></span>
        <span class="color-warning-400"></span>
        <span class="color-warning-500"></span>
        <span class="color-warning-600"></span>
        <span class="color-warning-700"></span>
        <span class="color-warning-800"></span>
        <span class="color-warning-900"></span>
        <span class="color-success-50"></span>
        <span class="color-success-100"></span>
        <span class="color-success-200"></span>
        <span class="color-success-300"></span>
        <span class="color-success-400"></span>
        <span class="color-success-500"></span>
        <span class="color-success-600"></span>
        <span class="color-success-700"></span>
        <span class="color-success-800"></span>
        <span class="color-success-900"></span>
        <span class="color-fusion-50"></span>
        <span class="color-fusion-100"></span>
        <span class="color-fusion-200"></span>
        <span class="color-fusion-300"></span>
        <span class="color-fusion-400"></span>
        <span class="color-fusion-500"></span>
        <span class="color-fusion-600"></span>
        <span class="color-fusion-700"></span>
        <span class="color-fusion-800"></span>
        <span class="color-fusion-900"></span>
    </p>
    <!-- END Color profile -->
    <!-- END Colors -->
    <script src="/admin/js/vendors.bundle.js"></script>
    <script src="/admin/js/app.bundle.js"></script>
    <script>
        $("#js-login-btn").click(function(event) {

            // Fetch form to apply custom Bootstrap validation
            var form = $("#js-login")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
            // Perform ajax submit here...
        });
    </script>
</body>

</html>
