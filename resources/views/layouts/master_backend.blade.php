<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Backend</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/img/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/nalika-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/morrisjs/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/metisMenu/metisMenu-vertical.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/calendar/fullcalendar.print.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">
    <script src="{{ asset('backend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!-- Alert -->
    @include('sweetalert::alert')

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{ url('/dashboard') }}"><img class="main-logo" src="{{ asset('backend/img/logo/logo.png') }}"
                        alt="" /></a>
                <strong><img src="{{ asset('backend/img/logo/logosn.png')}}" alt="" /></strong>
            </div>
            <div class="nalika-profile">
                <div class="profile-dtl">
                    <a href="#"><img src="{{ asset('backend/img/notification/4.jpg')}}" alt="" /></a>
                    <h2><span class="min-dtn">{{ Auth::user()->name }}</span></h2>
                    <h2><span class="min-dtn">{{ Auth::user()->email }}</span></h2>
                </div>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="{{ url('/dashboard') }}">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ url('admin/user/index') }}">
                                <i class="icon nalika-user"></i>
                                <span class="mini-click-non">User</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ url('admin/category/index') }}">
                                <i class="icon nalika-pie-chart icon-wrap"></i>
                                <span class="mini-click-non">Category</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ url('admin/product/index') }}">
                                <i class="icon nalika-forms icon-wrap"></i>
                                <span class="mini-click-non">Product</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <!-- Content -->
    <div class="all-content-wrapper">

        @yield('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{ asset('backend/img/logo/logo.png')}}"
                                alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="icon nalika-menu-task"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
                                                <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control" name="search" id="search">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="icon nalika-user"></i>
                                                        <span class="admin-name">Profile</span>
                                                        <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="{{ route('profile.edit') }}"><span
                                                                    class="icon nalika-user author-log-ic"></span> My
                                                                Profile</a>
                                                        </li>

                                                        <li>
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <a href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();"><span
                                                                        class="icon nalika-unlocked author-log-ic"></span>
                                                                    Log Out</a>
                                                            </form>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('con')

        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>@ 2023 , <a href="https://colorlib.com/wp/templates/">made with 💖</a> by Infromation
                                Technology Program PSC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/wow.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-price-slider.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('backend/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <script src="{{ asset('backend/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/js/metisMenu/metisMenu-active.js') }}"></script>
    <script src="{{ asset('backend/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('backend/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('backend/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('backend/js/calendar/fullcalendar-active.js') }}"></script>
    <script src="{{ asset('backend/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('backend/js/flot/flot-active.js') }}"></script>
    <script src="{{ asset('backend/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
</body>

</html>