<div class="container mt-5 mb-5">
    <p class="results-count"> {{ $services->total() }} result(s) for "{{ request()->service }}" </p>
    @foreach ($services as $service)
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white p-3 rounded mt-2 mb-4">
            
                <div class="row">

                    <div class="col-md-3">
                        <a href="{{ route('services.individual-service', ['service' => $service->id]) }}">
                            <img class="img-thumbnail" src=" {{ asset('/images/emoji.png') }}" alt="">
                        </a>
                    </div>

                    <div class="col-md-6 border-right">
                        <div class="listing-title">

                            <a href="{{ route('services.individual-service', ['service' => $service->id]) }} "> 
                                <h5> {{ $service->service_name }}</h5> 
                            </a>

                        </div>

                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings"><span class="mr-1 rating-number">4</span>
                                <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="mr-2 text-black-50 number-ratings">(12342 ratings)</span>
                            </div>
                        
                        </div>

                        <div class="description">
                            <a style="text-decoration: none; color: black;" href="{{ route('services.individual-service', ['service' => $service->id]) }}"> 
                                <p> {{ \Illuminate\Support\Str::limit($service->service_descript, 80)  }}  </p> 
                            </a>
                        </div>

                        <div class="tags mb-2"><span>Available</span></div>
                    </div>

                    <div class="d-flex col-md-3">
                        <div class="d-flex flex-column justify-content-start user-profile w-100">
                            <div class="d-flex user">
                                <div class="about ml-1">
                                    <h1 class="d-block text-black font-weight-bold">Price</h1>
                                </div>
                            </div>
                            
                            <div class="currency mt-5 mb-1 ml-3">
                                <span>{{  $service->service_price }} </span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach 
            <!-- Stop Here -->
           
       
        </div>
    </div>
   
</div>
