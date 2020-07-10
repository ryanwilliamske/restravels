@extends('layouts.app')

@section('extra-css')
    <!-- Search bar css modifier -->
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/individual-service.css') }}">
    
@endsection

@section('content')
<div id="prod" class="container mb-5 ">


  <!-- Left Column / Headphones Image -->
  <div class="left-column">
    <img data-image="black" src="{{ asset('images/black.png')}}" alt="">
    <img data-image="blue" src="{{asset('images/blue.png')}}" alt="">
    <img data-image="red" class="active" src="{{ asset('images/red.png')}}"  alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
    <h1> {{ $service->service_name }}</h1>
     <p> {{ $service->service_descript }} </p>
    </div>
 
    <!-- Product Configuration -->
    <div class="product-configuration">
 
      <!-- Product Color -->
      <div class="product-color">
        <span>Color</span>
 
        <div class="color-choose">
          <div>
            <input data-image="red" type="radio" id="red" name="color" value="red" checked>
            <label for="red"><span></span></label>
          </div>
          <div>
            <input data-image="blue" type="radio" id="blue" name="color" value="blue">
            <label for="blue"><span></span></label>
          </div>
          <div>
            <input data-image="black" type="radio" id="black" name="color" value="black">
            <label for="black"><span></span></label>
          </div>
        </div>
 
      </div>
 
      <!-- Cable Configuration -->
      <div class="cable-config">
        <span>Cable configuration</span>
 
        <div class="cable-choose">
          <button>Straight</button>
          <button>Coiled</button>
          <button>Long-coiled</button>
        </div>
 
        <a href="#">How to configurate your headphones</a>
      </div>
    </div>
 
    <!-- Product Pricing -->
    <div class="product-price">
        <span> {{ $service->service_price }}  </span>
      <a href="#" class="cart-btn">Add to cart</a>
    </div>
  </div>
</div>
<div class="space">

</div>

    

@endsection

@section('extra-js')

        <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="{{ asset('js/algolia.js') }}"></script>
        <script src=" {{ asset('js/individual-service.js') }}"></script>
@endsection
