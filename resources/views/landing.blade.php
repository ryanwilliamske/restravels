@extends('layouts.app')

 @section('extra-css')

    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}"> 

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

      
@endsection

@section('content')
    <!--Welcome header "Jumbotron"-->
    <div class="container-fluid">
        <div class="row jumbotron mb-0">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                <p class="h1">Aspera Travels</p>
                <p class="lead">Experience the best trips in safety and in style</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
            <img src="{{ asset('images/Car_family.png') }}" alt="Aspera Travels Logo" width="900px" id="">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-5">
                <p class="h6">Scroll for more</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <img src="{{ asset('images/scroll_arrows.png') }}" alt="Aspera Travels Logo" width="20px" id="">
            </div>
        </div>
    </div>

    <!--About section-->
    <div class="container-fluid padding">
      <div class="row jumbotron pl-5 pb-0 mb-0">
        <div class="col-lg-3 col-xl-3 pl-3">
            <img src="{{ asset('images/Car_road.svg') }}" alt="Aspera Travels Logo" width="300px" id="">
        </div>

        <div class="col-lg-3 col-lg-3 pt-5 ml-5">
            <p class="h1">Fast and Effective</p>
            <img src="{{ asset('images/Speedometer.svg') }}" alt="Aspera Travels Logo" width="700px" id="">
        </div>

      <div class="col-lg-3 col-lg-3 pt-5">
        <button type="button" class="btn btn-outline-primary">About us</button>
        <p class="lead">Our services are swift and will never let you down</p>
      </div>
      

    </div>
  </div>

  <div class="container-fluid mt-4">
    <div class="row jumbotron justify-content-end">
    <div class="col mt-5">
      <p class="lead justify-content-start">Our packages are wholesome and for the entire family</p>
      @if (Auth::guest())
        <form action="{{ route('register') }}" method="get">
      
        <button type="submit" class="btn btn-outline-primary">Sign Up</button>
      </form>
      @endif
      

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

  <!--The code below enables for customer support-->
  
  
@endsection


@section('extra-js')

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="{{ asset('js/algolia.js') }}"></script>
    
    
@endsection