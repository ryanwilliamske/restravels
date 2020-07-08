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
            <img src="{{ asset('storage/Car_family.png') }}" alt="Aspera Travels Logo" width="900px" id="">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-5">
                <p class="h6">Scroll for more</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <img src="{{ asset('storage/scroll_arrows.png') }}" alt="Aspera Travels Logo" width="20px" id="">
            </div>
        </div>
    </div>

    <!--About section-->
    <div class="container-fluid padding">
      <div class="row jumbotron pl-5 pb-0 mb-0">
        <div class="col-lg-3 col-xl-3 pl-3">
            <img src="{{ asset('storage/Car_road.svg') }}" alt="Aspera Travels Logo" width="300px" id="">
        </div>

        <div class="col-lg-3 col-lg-3 pt-5 ml-5">
            <p class="h1">Fast and Effective</p>
            <img src="{{ asset('storage/Speedometer.svg') }}" alt="Aspera Travels Logo" width="700px" id="">
        </div>

      <div class="col-lg-3 col-lg-3 pt-5">
        <button type="button" class="btn btn-outline-primary">About us</button>
        <p class="lead">Our services are swift and will never let you down</p>
      </div>
      

    </div>
  </div>

  <!--Services Card-->
  <div class="container-fluid">
    <div class="row jumbotron" style="background-color: #51AECE">
      <div class="card">

      </div>
    </div>
  </div>

  <!--The code below enables for customer support-->
  
  <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/699bd557f23f6ee6af1ea5b78a1eeca2bc411659d76438f1095a232152139ca2.js"></script>
@endsection


@section('extra-js')

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="{{ asset('js/algolia.js') }}"></script>
    
    
@endsection
