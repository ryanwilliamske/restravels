@extends('layouts.app')

 @section('extra-css')

    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}"> 

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    
@endsection




   @section('content')

<div class="container mt-5 mb-6">


  <form action=" {{ route('profile.show') }} " method="post">
    @csrf
    <div class="container">
    
      <div class="row gutters-sm">


        <!-- Provides a display of different profile options-->
        @include('profile_partials.tabOptions')
        
        <div class="col-md-8">
        
          <div class="card">
            
            <div class="card-body tab-content">
              <!--Profile Information-->
              <div class="tab-pane active" id="profile">
                <h6>YOUR PROFILE INFORMATION</h6>
                <hr>

                  @include('profile_partials.yourInfo', compact('user_details'))

              </div>
              
                  <!--Account Settings-->

                  @include('profile_partials.accountSettings', compact('user_details'))

                  <!--Security Settings-->
                  @include('profile_partials.securitySettings')

                  <!--Notification Settings-->
                  @include('profile_partials.notificationSettings')
              
                  <!--Billing Settings-->
                  @include('profile_partials.billingSettings')
              
                </form>
                  <!-- View Your blogs -->
                  @include('profile_partials.yourBlogs', compact('blogs'))

          </div>
       </div>
     </div>

   
       
   @endsection

    

    @section('extra-js')

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="{{ asset('js/algolia.js') }}"></script>
        <script src="{{ asset('js/binding-and-stick.js') }}"></script>
    
    @endsection