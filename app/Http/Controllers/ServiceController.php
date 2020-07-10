<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function search()
    {
        request()->validate([
            'service' => 'required|min:3',
        ]);

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

