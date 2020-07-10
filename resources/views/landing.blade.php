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


@include('inc.navbar')

<!--Welcome header "Jumbotron"-->
<div class="container-fluid">
  <div class="row jumbotron mb-5">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
      <p class="h1">Aspera Travels</p>
      <p class="lead">Experience the best trips in safety and in style</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
      <img src="{{ asset('images/Car_family.png') }}" alt="Aspera Travels Logo" width="800px" id="">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-4">
      <p class="h6">Scroll for more</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
      <img src="{{ asset('images/scroll_arrows.png') }}" alt="Aspera Travels Logo" width="20px" id="">
    </div>
  </div>
</div>

<!--About section-->
<div class="container-fluid mt-5">
  <div class="row jumbotron pl-5 pb-0 mb-0">
    <div class="col-lg-3 col-xl-3 pl-3">
      <img src="{{ asset('images/Car_road.svg') }}" alt="Aspera Travels Logo" width="300px" id="">
    </div>
    <div class="col-lg-3 col-lg-3 pt-5 ml-5">
      <p class="h1">Fast and Effective</p>
      <img src="{{ asset('images/Speedometer.svg') }}" alt="Aspera Travels Logo" width="700px" id="">
    </div>
    <div class="col-lg-3 col-lg-3 pt-5 ml-5 text-center">
      <button type="button" class="btn btn-outline-primary">About us</button>
      <p class="lead">Our services are swift and will never let you down</p>
    </div>
  </div>
</div>

<!--Services Card-->
<div class="container-fluid mt-4">
    <div class="row jumbotron justify-content-end">
    <div class="col mt-5">
      <p class="lead justify-content-start">Our packages are wholesome and for the entire family</p>
      <button type="button" class="btn btn-outline-primary">Sign Up</button>
    </div>
      <div class="card-deck">
      <div class="card" style="max-width: 18rem;">
        <img src="{{ asset('images/Car_hire.png') }}" class="card-img-top" width="162px" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Car Hire</h5>
          <p class="display-6">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
        </div>
      </div>
      <div class="card" style="max-width: 18rem;">
        <img src="{{ asset('images/Travel.png') }}" class="card-img-top" width="162px" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Tours and Travel</h5>
          <p class="display-6">This card has supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
      <div class="card" style="max-width: 18rem;">
        <img src="{{ asset('images/Adventure.png') }}" class="card-img-top" width="162px" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Adventure</h5>
          <p class="display-6">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer  -->
<div class="container-fluid mt-4 px-5">
  <div class="row">
    <div class="col-4">
      <h6> <a href="https://www.facebook.com/">Facebook</a> </h6>
      <h6> <a href="https://twitter.com/home">Twitter</a> </h6>
      <h6> <a href="https://www.linkedin.com/feed/">LinkedIn</a> </h6>
      <h6> <a href="https://www.instagram.com/">Instagram</a> </h6>
    </div>
    <div class="col-4">
      <h6> Email us for any inquirees you have about us </h6>
      <h6> info@asperatravels.co.ke </h6>
      <h6> Contact us </h6>
      <h6> 0712345678 </h6>
    </div>
    <div class="col-4">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Subscribe here</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
