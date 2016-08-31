<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8" />

    <title>Заголовок</title>
    <meta content="" name="description" />

    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.6.3/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/libs/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/libs/animate/animate.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/media.css') }}" />
</head>

<body>

<div class="container-fluid ">
    <nav class="navbar navbar-default">
        <div class="container-fluid width-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="{{url('/')}}"><img src="{{ asset('/images/sysimg/logo.png') }}" alt="Лого сайту ALCOPROGER" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="row width-container">
        @yield('content')
    </div>
    <div class="col-xs-3 sidebar">
        <div>
            <input type="text" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></button>
        </div>
    </div>
</div>

<div class="hidden"></div>

<!--[if lt IE 9]>
<script src="/libs/html5shiv/es5-shim.min.js"></script>
<script src="/libs/html5shiv/html5shiv.min.js"></script>
<script src="/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="/libs/respond/respond.min.js"></script>
<![endif]-->

<script src="{{ asset('/libs/jquery/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('/libs/modernizr/modernizr.js') }}"></script>
<script src="{{ asset('/libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/libs/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('/libs/plugins-scroll/plugins-scroll.js') }}"></script>
<script src="{{ asset('/libs/animate/animate-css.js') }}"></script>

<script src="{{ asset('/libs/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('/libs/imagefill/jquery-imagefill.js') }}"></script>
<script src="{{ asset('/libs/masonry/masonry.pkgd.min.js') }}"></script>

<script src="{{ asset('/js/common.js') }}"></script>
<script src="{{ asset('/admin/js/common.js') }}"></script>
<script src="{{ asset('/libs/tinyme/tinymce.min.js') }}"></script>
</body>
</html>
