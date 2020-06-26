
<!DOCTYPE html>
<html lang="en">

<head>
      <title>Log In Page</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading2"></div>
                <div class="card-body">
                <div class="card-header">{{ __('Login') }}</div>
                    <h2 class="title">Log In</h2>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="input-group">
                      

                        <div class="input-group">
                            <input id="email" class="input--style-3 form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                        <div class="input-group">
                            <input class="input--style-3  form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password" required>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                
                        </div>
                      
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">LogIn</button>
                           
                          
                        </div>
                        
                                <p class="loginhere">
                                Don't have an account? <a href="<?php echo e(route('register')); ?>" class="loginhere-link">Sign Up here</a>
                                    </p>
                                    <p class="loginhere">
                                   <!-- Forgot your passowrd!
                                    
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="loginhere-link">Reset here</a>
                                    @endif
                                     </p>    -->

                           
                    </form>
                     
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->