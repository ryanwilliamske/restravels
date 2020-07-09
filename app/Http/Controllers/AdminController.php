<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    //
    public function index(){
    	$userstuff = User::all()->toArray();
        return view('/clients_admin', compact('userstuff'));
        
//new changes, admin auth
return view('admin_dash');
    }

   
}
