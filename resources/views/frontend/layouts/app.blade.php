<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/img/fabicon-100x100.png">

    <title>Home – Agence – Digital Agency Elementor Template Kit</title>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" media="all" href="{{ asset('assets/frontend/vendors/bootstrap/css/bootstrap.min.css') }}">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendors/fontawesome/css/all.min.css') }}">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendors/elementskit-icon-pack/assets/css/ekiticons.css') }}">
    <!-- progress bar CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendors/progressbar-fill-visible/css/progressBar.css') }}">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.min.css') }}">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendors/modal-video/modal-video.min.css') }}">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendors/fancybox/dist/jquery.fancybox.min.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendors/slick/slick-theme.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
    @livewireStyles

</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="{{ asset('assets/frontend/img/loader1.gif') }}" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <livewire:frontend.theme.navbar />
        <main id="content" class="site-main">
            @yield('content')
        </main>
        <!-- footer part -->
        <livewire:frontend.theme.footer />

        <!-- back to top -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/jquery/jquery.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/waypoint/jquery.waypoints.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/circle-progress/circle-progress.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/progressbar-fill-visible/js/progressBar.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/countdown-date-loop-counter/loopcounter.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/counterup/jquery.counterup.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/modal-video/jquery-modal-video.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/masonry/masonry.pkgd.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/slick/slick.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendors/slick-nav/jquery.slicknav.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/js/custom.js') }}"></script>
    @livewireScripts

</body>


</html>