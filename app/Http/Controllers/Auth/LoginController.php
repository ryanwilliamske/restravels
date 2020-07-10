<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;


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

   protected function authenticated(Request $request, User $user) {

        return redirect()->intended($this->redirectPath())->with('success', 'Successfully Logged In');
    }
    
}
