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
                <img src="{{ asset('storage/AST Logo.png') }}" alt="Aspera Travels Logo" width="50px" id="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarReponsive">
                <span class="navbar-toggler-icon"><img src="{{ asset('storage/menu_lines.svg') }}" alt="Aspera Travels Logo" width="20px" id=""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link " href="{{ url('/landing') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/services') }}">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/sign_in') }}">Sign In</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/sign_up') }}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <div class="avatar mx-auto white py-3">
                        <img src="/images/user.svg" class="rounded-circle" alt="woman avatar" style="width: 243px; background-color:#f8fafc">
                    </div>
                    @foreach($user as $user)
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->fname}}<br>{{ $user->lname}}</h5>
                        <h5 class="card-text">Email</h5>
                        <p class="h6">{{ $user->email}}</p>
                        <h5 class="card-text">Address</h5>
                        <p class="h6">Phenom Estate<br>{{$user->city}}, Kenya</p>
                        <h5 class="card-text">Award</h5>
                        <p class="h6">Globe Trotter</p>
                        <a href="#" class="btn btn-primary btn-block">Edit Profile</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col">
                        <div class="card px-lg-5 px-rg-5 py-3 mb-3" style="width: 100%">
                            <p class="h1">Destinations</p>
                            <div class="row">
                                <div class="col">
                                    <p class="lead">Last <br>Visit</p>
                                </div>
                                <div class="col-6">
                                    <p class="h2" id="destination">{{ $country }}, {{$city}}</p>
                                    <p class="lead" id="time">12-02-2019 to 25-02-2019</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-primary" id="morebtn">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card px-lg-5 py-3 mb-3" style="width: 100%">
                            <p class="h1">Experiences</p>
                            <div class="row">
                                <div class="col">
                                    <!-- FIX Test the experience array -->
                                    <p></p>
                                    <p class="h2" id="exp">{{ $experience }}</p>
                                </div>
                                <div class="col">
                                    <p class="lead" id="lvl">Level 6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card px-lg-5 py-3 mb-3" style="width: 100%">
                            <p class="h1">Ongoing Contracts</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h2">You have no ongoing contracts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        if (document.getElementById("exp").textContent == "None") {
            document.getElementById("lvl").textContent = "Level 1";
            document.getElementById("destination").textContent = "None"
            document.getElementById("time").textContent = null;
        } else {
            var arr = [1, 2, 3, 4, 5, 6];
            var txt = arr[Math.floor(Math.random() * arr.length)];
            document.getElementById("lvl").textContent = "Level " + txt;
            console.log(txt);
        }
    </script>
</body>