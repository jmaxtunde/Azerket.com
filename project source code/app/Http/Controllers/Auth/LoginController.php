<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	/**
     * Get needed authorization credential from request
     *
     * @param \illuminate\Http\Request $request
	 * @return array
     */
	protected function credentials(Request $request)
	{
		if(is_numeric($request->get('email')))
		{
			return ['callPhoneNumber'=>$request->get('email'),'password'=>$request->get('password'),'confirmation_token'=>null];
		}
		elseif(filter_var($request->get('email'),FILTER_VALIDATE_EMAIL))
		{
			return ['email'=>$request->get('email'),'password'=>$request->get('password'),'confirmation_token'=>null];
		}
	}
}

