<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>pergikeliling.com</title>

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/vaficon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/vaficon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/vaficon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/vaficon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/vaficon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/vaficon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/vaficon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/vaficon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/vaficon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('img/vaficon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/vaficon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/vaficon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/vaficon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/vaficon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('img/vaficon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.0&appId=397589920715820&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>


<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <img src="{{asset('img/general/main-logo.png')}}" class="main-logo" height="200">
        </div>

        <ul class="list-unstyled CTAs">
            @guest
                <li>
                    <a href="{{ route('login') }}" class="download">
                        <i class="glyphicon glyphicon-user"></i>
                        MASUK
                    </a>
                </li>
            @endguest

            @auth


                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" class="download">
                        <i class="glyphicon glyphicon-user"></i>
                        KELUAR
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endauth
        </ul>

        {{ menu('main-menu','my_menu') }}

        <div class="social">
            <ul>
                <li>
                    <a href="https://www.facebook.com/Pergi-Keliling-718357488361564" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/pergikeliling/" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/pergikeliling" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCBG7OUQ4qhNeM9prXkh715Q" target="_blank">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Page Content Holder -->
    <div id="app">

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                        <span></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="bs-example bs-example-form navbar-btn" data-example-id="simple-input-groups">
                                <div class="input-group">
                                    <input class="form-control search-for-help"
                                           placeholder="type here"
                                           aria-describedby="basic-addon2"
                                    >
                                    <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">Cari Sekarang</button>
                                        </span>
                                </div>
                            </form>
                        </li>
                        <li class="menus"><a href="/">Beranda</a></li>
                        <li class="menus"><a href="/recent-post">Artikel Terbaru</a></li>
                        <li class="menus"><a href="{{route('directory')}}">Ulasan</a></li>
                        <li class="menus"><a href="https://www.youtube.com/channel/UCBG7OUQ4qhNeM9prXkh715Q" target="_blank">Video</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="menus"><a href="/">Beranda</a></li>
                <li class="menus"><a href="/page/about">Tentang Kami</a></li>
                <li class="menus"><a href="/page/advertise-with-us">Pemasangan Iklan</a></li>
                <li class="menus"><a href="/">Kontak</a></li>
            </ul>
        </div>
    </div>
</div>


<script src="{{mix('js/app.js')}}"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('.navbar-header').toggleClass('on');
            $('#sidebar, #app').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            $(this).find('i').toggleClass('glyphicon-align-left').toggleClass('glyphicon-align-right');
        });

        $('.dropdown').on('click', function (e) {
            $(this).find('#dropdown').toggleClass('in')
        })
    });
</script>
</body>
</html>
