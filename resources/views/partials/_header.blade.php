<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Your Trusted Software Development Partner!">
    <meta name="keywords" content="software development, tailored software solutions, custom solutions, innovative technologies, web applicatioon development, web application, training">
    <meta name="author" content="AP Digital">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>apDigital | Welcome | {{ Route::currentRouteName(); }}</title>

    <link rel="preload" as="style" href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css'>
    <link rel="preload" as="style" href='https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css'>
    <link rel="preload" as="style" href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css'>
    <link rel="preload" as="style" href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'>
    <link rel="preload" as="style" href='https://fonts.googleapis.com/css?family=Audiowide|Average%20Sans|Mada'>
    <link rel="preload" as="style" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="preload" as="style" href="{{ asset('css/app.css') }}">
    <link rel="preload" as="style" href="{{ asset('css/foundation-icons.css') }}">
    <link rel="preload" as="script" href="https://code.jquery.com/jquery-2.1.4.min.js">
    <link rel="preload" as="script" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js">
    <link rel="preload" as="script" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js">
    <link rel="preload" as="script" href="{{ asset('js/app.js') }}">    
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
<link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Average%20Sans|Mada">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- optional CDN for Foundation Icons ^^ -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/foundation-icons.css') }}">
<style>

.panel {
  background: rgba(0, 0, 0, 1.0);
  width: 50vw;
  height: 100vh;
  position: fixed;

}

.panel-1 {
  left: 0;
}

.panel-2 {
  right: 0;
}


</style>

</head>



<body class="{{ Route::currentRouteName(); }}">
    <input type="hidden" value="{{ Route::currentRouteName(); }}" id="currentPage" />

    <div class="off-canvas position-left" id="offCanvasLeftOverlap" data-off-canvas data-transition="overlap">
        <ul class="dropdown vertical medium-horizontal menu" data-dropdown-menu>
            @include('partials._navigation_left')
            @include('partials._navigation_right')
            @if (Route::has('login'))
<li>
    @auth
    @else
<li class="login">
    <a class="changePage" data-link="/login">Log in</a>
    <!-- <a class="changePage" data-link="/login" href="{{ route('login') }}" class="">Log in</a> -->

</li>

@if (Route::has('register'))
<li>
     <a class="changePage" data-link="/register">Register</a>

    <!-- <a href="{{ route('register') }}" class="">Register</a> -->
</li>
@endif
@endauth

@endif

        </ul>
    </div>

    <header>
        <!-- Start Top Bar -->
        <div class="grid-container fluid">
            <div class="top-bar">
            </div>
            <div class="grid-x main-bar">
                <div class="cell auto">
                    <nav id="main-navigation">
                        <ul class="dropdown vertical medium-horizontal menu left" data-dropdown-menu>
                            @include('partials._navigation_left')
                        </ul>
                    </nav>
                </div>
                <div class="cell auto"><a class="logo changePage" data-link="/">
                        <svg width="60px" height="60px" viewBox="0 0 100 85" version="1.1" id="svg1" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <defs id="defs1" />
                            <g
                                id="layer2"
                                style="display:inline"
                                transform="translate(-74.749998,-59.04191)">
                                <path
                                    style="fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:0.5;stroke-miterlimit:4.2;stroke-dasharray:none;stroke-opacity:1;paint-order:fill markers stroke"
                                    d="M 105,96.000002 74.999998,145 V 103 L 105,60.000001 Z"
                                    id="path1" />
                                <path
                                    style="display:inline;fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:0.5;stroke-miterlimit:4.2;stroke-dasharray:none;stroke-opacity:1;paint-order:fill markers stroke"
                                    d="M 108,95.500003 138,145 V 102.5 L 108,60.000001 Z"
                                    id="path1-9" />
                                <path
                                    style="fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:0.5;stroke-miterlimit:4.2;stroke-dasharray:none;stroke-opacity:1;paint-order:fill markers stroke"
                                    d="M 159,60.000001 172,78.000002 159,101 Z"
                                    id="path3" />
                                <path
                                    style="display:inline;fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:0.5;stroke-miterlimit:4.2;stroke-dasharray:none;stroke-opacity:1;paint-order:fill markers stroke"
                                    d="M 143,85.000002 V 145 l 14,-28 V 60 Z"
                                    id="path1-9-4" />
                            </g>
                        </svg>

                    </a></div>
                <div class="cell auto">
                    <ul class="dropdown vertical medium-horizontal menu right" data-dropdown-menu>
                        @include('partials._navigation_right')
                    </ul>

                    <div class="title-bar" data-responsive-toggle="main-navigation" data-hide-for="medium">
                        <button class="menu-icon" type="button" data-toggle="offCanvasLeftOverlap"><img src="{{ asset('images/menu-burger-horizontal.svg') }}" /></button>
                    </div>

                    <!-- <input type="search" id="siteSearch" placeholder="Search..."><button type="submit" class="button search ">Search</button> -->
                </div>
            </div>
        </div>
        <!-- End Top Bar -->

    </header>