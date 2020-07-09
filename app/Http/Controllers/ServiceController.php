<?php

namespace App\Http\Controllers;
use App\Serve;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    function save(Request $req)
    {
    		$this->validate($req, [
		'service_name' => 'required',
		 'service_descript' => 'required',
		 'service_price' => 'required',
		 'service_type' => 'required',
		 
	]);

  

    	($req->input());
    	$serve = new Serve;
    	$serve->service_name= $req->service_name;
    	$serve->service_descript= $req->service_descript;
    	$serve->service_price= $req->service_price;
    	$serve->service_type= $req->service_type;
    	echo $serve->save();
    	return view('services_form')->with('success', 'Data Added');;
    }
    
    public function index(){
    	$servicestuff = Services::all()->toArray();
    	return view('services_admin', compact('servicestuff'));

    }

}
