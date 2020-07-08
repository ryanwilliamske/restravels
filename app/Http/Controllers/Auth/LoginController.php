<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   protected function authenticated(Request $request, User $user) 
   {
    
        Alert::success('Success', 'Successfully Logged In');
        return redirect()->intended($this->redirectPath());
    }
    
}
