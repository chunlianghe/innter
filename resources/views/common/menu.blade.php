<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    {{--<link rel="shortcut icon" href="assets/images/favicon.ico">--}}
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

    <title>Oshara</title>

    {{--css bootstrmp 4.0 --}}
    {{--<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">--}}
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- App css -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/css/core.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/css/components.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/css/pages.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/css/menu.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/css/responsive.css') }}" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('public/assets/js/modernizr.min.js') }}"></script>

</head>

<body class="fixed-left">


<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{url('index')}}" class="logo">
                <img class="logo-nor" src="https://oshara.ca/public/assets/images/site/logo.svg" height="34px"
                     alt="Oshara Inc">
            </a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title">Dashboard</h4>
                    </li>
                </ul>

                <!-- Right(Notification and Searchbox -->
                <ul class="nav navbar-nav navbar-right">

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    {{--</li>--}}

                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">Navigation</li>

                    <li>
                        <a href="{{url('index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i>
                            <span> Dashboard </span> </a>
                    </li>
                    <li>
                        <a href="{{url('project')}}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Projects </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('category')}}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Categories </span>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Left Sidebar End -->
