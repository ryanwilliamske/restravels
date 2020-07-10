<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspera Travels</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> -->

</head>

<body>
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand mr-auto" href="#">
            <img src="{{ asset('images/AST Logo.png') }}" alt="Aspera Travels Logo" width="50px" id="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarReponsive">
            <span class="navbar-toggler-icon"><img src="{{ asset('images/menu_lines.svg') }}" alt="Aspera Travels Logo" width="20px" id=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="{{ url('/landing') }}">Home </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/blogs') }}">Blogs<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/services') }}">Services</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                </li>

                @guest
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>

                </li>
                    @if (Route::has('register'))
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                </li>
                    @endif
                @else
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/upload') }}">Create A Blog</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/myblogs') }}">My Blogs</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<div class="event" id="event">
    <div class="container">



            @include('blogs.messages')







    </div>
</div>

<!--About section-->
<div class="container-fluid padding">

</div>

<!--Services Card-->
<div class="container-fluid">
    <div class="jumbotron" style="background-color: #51AECE">

            @yield('content')


    </div>
</div>
<br>
<br>
<br>
{{--<div class="container-fluid">--}}
{{--    <div class="jumbotron" >--}}

{{--        @yield('blogsdetails')--}}


{{--    </div>--}}

@include('inc.footer')
</body>

</html>
