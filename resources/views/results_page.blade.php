@extends('layouts.app')

@section('title', 'Search Results')


@section('extra-css')
    <!-- Search bar css modifier -->
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/search-results.css') }}">
@endsection


@section('content')

    <!--
        We'll display two outlooks, page not found and a results
        page all based on an if else condition
    -->
    
    @if ( count($services) > 0 )
    
        @include('services.service-partials.service-results', compact('services'))

    @else

        <!-- Incase Service Is not found -->
        @include('errors-partials.result-not-found')
            
    @endif
   
        
        {{ $services->appends( request()->input())->links() }}

</div>

@endsection

@section('extra-js')

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="{{ asset('js/algolia.js') }}"></script>
        <script src="{{ asset('js/search-results.js') }}"></script>

@endsection

