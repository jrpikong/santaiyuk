<!doctype html>
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

    </head>
    <body>



    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
              <img src="{{asset('img/general/logo-ergi-keliling-596.png')}}" class="main-logo">
            </div>

            <ul class="list-unstyled CTAs">
              @guest
                <li>
                  <a href="{{ route('login') }}" class="download">
                    <i class="glyphicon glyphicon-user"></i>
                    LOGIN
                  </a>
                </li>
              @endguest
            </ul>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#">Food & Drinks</a>
                </li>
                <li>
                    <a href="#">Activities</a>
                </li>
                <li>
                    <a href="#">Travelling</a>
                </li>
                <li>
                    <a href="#">Product</a>
                </li>
                <li>
                    <a href="#">news</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Hotel & Ticket Bookings</a>
                </li>

                <li>
                    <a href="#">Sobat Santai</a>
                </li>
            </ul>
            <div class="social">
              <ul>
                <li>
                  <a>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/santai.yuk/" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/santai_yukk" target="_blank">
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
                                            <button class="btn btn-primary" type="button">Seacrh Now</button>
                                        </span>
                                    </div>
                                </form>
                            </li>
                            <li class="menus"><a href="#">Recent Post</a></li>
                            <li class="menus"><a href="#">Trending</a></li>
                            <li class="menus"><a href="#">Review With Us</a></li>
                            <li class="menus"><a href="#">Videos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
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
        });
    </script>
    </body>
</html>
