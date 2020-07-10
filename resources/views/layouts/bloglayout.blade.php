<!DOCTYPE html>
<html>
<head>
    @section('head')
        <meta charset="utf-8">
        <title>Bloger</title>
        <!-- Description, Keywords and Author -->
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your,Keywords">
        <meta name="author" content="ResponsiveWebInc">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link href="{{asset('css/blogcss/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font awesome CSS -->
        <link href="{{asset('css/blogcss/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('css/blogcss/style.css')}}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


        <!-- Favicon -->
        <link rel="shortcut icon" href="#">
    @show
</head>

<body>

<div class="wrapper">

    <!-- header -->
    <header>
        <!-- navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            @if (Route::has('register'))

                                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                        @else



                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->fname }} {{Auth::user()->lname }} <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                    <li><a href="/upload">Create a Blog</a></li>
                                    <li><a href="/myblogs">My Blogs</a></li>

                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>


    <div class="event" id="event">
        <div class="container">
            <div class="default-heading">
                <!-- heading -->
                @include('blogs.messages')

                @yield('content')

            </div>


        </div>
    </div>
    <!-- events end -->


    <footer>
        <div class="container">
            <p><a href="#">Home</a> | <a href="#work">works</a> | <a href="#team">Team</a> | <a href="#contact">Contact</a></p>
            <div class="social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            <!-- copy right -->
            <!-- This theme comes under Creative Commons Attribution 4.0 Unported. So don't remove below link back -->
            <p class="copy-right">Copyright &copy; 2014 <a href="#">Your Site</a> | Designed By : <a href="http://www.indioweb.in/portfolio">IndioWeb</a>, All rights reserved. </p>
        </div>
    </footer>

</div>


<!-- Javascript files -->
<!-- jQuery -->
<script src="{{asset('js/blogjs/jquery.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/blogjs/bootstrap.min.js')}}"></script>
<!-- Respond JS for IE8 -->
<script src="{{asset('js/blogjs/respond.min.js')}}"></script>
<!-- HTML5 Support for IE -->
<script src="{{asset('js/blogjs/html5shiv.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/blogjs/custom.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.select2').select2();
    })
</script>
</body>
</html>
