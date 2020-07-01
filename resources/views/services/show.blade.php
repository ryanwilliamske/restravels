@extends('layouts.app')

@section('extra-css')
    <!-- Search bar css modifier -->
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}"> 
    
@endsection

@section('content')


    <h1>  <small> You are currently viewing Product: </small> {{ $service->service_name }}   </h1>
    
@endsection

@section('extra-js')

        <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="{{ asset('js/algolia.js') }}"></script>

@endsection
