<section class="page-header parallax parallax-3"
    style="background-image:url('/website/demo_files/images/1200x800/17-min.jpg')">
    <div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

    <div class="container">

        <h1>@yield('title', 'My App')</h1>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="#">{{ $bc_1 }}</a></li>
            <li class="active">@yield('title', 'My App')</li>
        </ol>

    </div>
</section>
