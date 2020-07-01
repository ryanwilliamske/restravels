@extends('layouts.app')

@section('title', 'Search Results')


@section('extra-css')
    <!-- Search bar css modifier -->
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}"> 
    
@endsection


@section('content')
    
     <div class="search-results-container container">

 
         <h1 class="d-flex justify-content-center mb-5"> Search Results </h1>

         <p class="results-count"> {{ $services->total() }} result(s) for "{{ request()->service }}" </p>
         <table class="table" >
            <thead>
                <tr>
                <th scope="col">Service Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
         
            @forelse ($services as $service)
                <tr>
                <th scope="row"> <a href="{{ route('services.show', $service->id)  }}"> {{ $service->service_name }} </a> </th>

                 <td> <a href="{{ route('services.show', $service->id) }}">{{ \Illuminate\Support\Str::limit($service->service_descript, 80) }} </a> </td> 
                <td> {{ $service->service_price }} </td> 
                </tr>
                @empty
                    <div style="tex-align: left">No items found</div>
            @endforelse


                  </tbody>
        </table>
         
        
        {{ $services->appends( request()->input())->links() }}

</div>

@endsection

@section('extra-js')

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="{{ asset('js/algolia.js') }}"></script>
    
    
@endsection