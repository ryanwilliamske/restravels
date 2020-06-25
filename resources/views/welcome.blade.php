<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ '/css/footer'}}" />

    <style>
    /* Please help to insert the correct bg-img path the images are in public/img folder */
    .footer-class-container {
        /* border: 1px solid black; */
        background-color: #0099FF;
        background-image: url(/images/wave.svg);
        background-repeat: no-repeat;
        width: 100vw;


    }

    .footer-class {
        display: grid;
        grid-template-columns: 1fr 3fr;
        gap: 1em;

    }

    .footer-info>* {
        margin: 10px;
        margin-left: 10%;
        /* margin: auto; */
        padding: 5px, 10px;
    }

    .footer-info a:visited {
        color: greenyellow;
    }

    .footer-info a:hover {
        color: hotpink;
        cursor: pointer;
        text-decoration: underline;
    }

    .footer-info a:link {
        text-decoration: none;
        color: black;
    }

    .logo-footer>h3 {
        padding: 50px;

    }

    .social-links>i {
        padding: 5px 10px;
    }

    @media only screen and (max-width: 550px) {
        .footer-class {
            grid-template-columns: 1fr;
        }


    }
    </style>
    <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>

    </div>
    <!-- I created a new blade file called footer.blade.php to host it. The one below is for testing -->
    <footer>
        <div class="footer-class-container">
            <div class="footer-class">
                <div class="logo-footer" style="text-align: center;">
                    <h1>Aspera <br> Tours</h1>

                </div>
                <div class="footer-info" data-aos="zoom-out-right" data-aos-duration="2000">
                    <h2>Find us at</h2>
                    <div class="icon-1">
                        <span><i class="fa fa-lg fa-map-marker"></i></span>
                        <span>Muthithi Road Westlands, Nairobi</span>
                    </div>
                    <div class="icon-2">
                        <span><i class="fa fa-lg fa-phone-square"></i></span>
                        <a href="tel:+254 721 921 504">+254 721 921 504</a>
                    </div>
                    <div class="icon-3">
                        <span><i class="fa fa-lg fa-phone-square"></i></span>
                        <a href="tel:+254 725 394 512">+254 725 394 512</a>
                    </div>
                    <div class="icon-4">
                        <img src="/images/envelope.svg" alt="xsd" height="20px" width="18px" />
                        <a href="mailto:info@asperatoureandtravel.com">info@asperatoureandtravel.com</a>

                    </div>
                    <div class="icon-5">
                        <img src="/images/www.svg" alt="xsd" height="15px" />
                        <a href="http://www.asperatoursandtravel.com">www.asperatoursandtravel.com</a>
                    </div>

                </div>
            </div>
            <div style="width: 90%; margin: auto;">
                <hr>
            </div>
            <div class="social-links" style="text-align: center;">
                <i class="fa fa-3x fa-facebook-official"></i>
                <i class="fa fa-3x fa-twitter-square"></i>
                <i class="fa fa-3x fa-telegram"></i>
            </div>
            <div style="width: 90%; margin: auto;">
                <hr>
            </div>
            <div class="copyright" style="text-align: center; padding: 30px;">
                <span><i class="fa fa-lg fa-copyright"></i>Copyright2020: Rest team</span>
            </div>
        </div>
    </footer>
    <!-- Footer animation and icons dependency -->
    <script src="https://use.fontawesome.com/452826394c.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>