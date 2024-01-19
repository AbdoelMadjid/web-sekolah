<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head> @include('website.inc.header') </head>

<body class="smoothscroll enable-animation">
    <div id="wrapper">
        @include('website.inc.top-bar')
        @include('website.inc.navbar')
        @yield('content-web')
        @include('website.inc.footer')
    </div>
    <a href="#" id="toTop"></a>
    <div id="preloader">
        <div class="inner">
            <span class="loader"></span>
        </div>
    </div>
    @include('website.inc.javascript')
</body>

</html>
