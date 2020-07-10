<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function search()
    {
        /**
         * The validator checks whether
         * the constraints being passed are valid
         */
        $validator = Validator::make( request()->all(), [
            'service' => 'required|min:3',
        ]);
       
        /**
         * Failure notification
         */
        if ( $validator->fails()) {
            toast($validator->messages()->all()[0],'error')->autoClose(3000);
             return back();
        }

        $service = request()->service;
        // $services = Service::where('service_name', 'like', "%$service%")
        // ->orWhere('service_descript', 'like', "%$service%")
        // ->paginate(10);

        $services = Service::search($service)->paginate(10);
        
        /**
         * After conducting a search operation, 
         * this data is sent to the results_page with the aim 
         * of displaying fields related to the search
         */
        return view('results_page', compact('services'));
    }

    public function show(Service $service)
    {
        /**
         *After results are displayed, the following single page
         *that dynamically displays individual items subject to the search 
         */
        

        $service = Service::where('id', $service->id)->first();
        return view('services.show', compact('service'));
    }
}

