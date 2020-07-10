<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand mr-auto ml-5" href="#">
            <img src="{{ asset('images/AST Logo.png') }}" alt="Aspera Travels Logo" width="70px" id="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarReponsive">
            <span class="navbar-toggler-icon"><img src="{{ asset('images/menu_lines.svg') }}" alt="Aspera Travels Logo" width="20px" id=""></span>
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
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/sign_up') }}">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>