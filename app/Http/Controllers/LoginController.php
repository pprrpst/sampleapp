<?php

namespace App\Http\Controllers;


//use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
//        $this->middleware('guest')->except('logout');
        $this->middleware('guest')->except('postLogout');
    }


    public function getLogin() {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $this->validateLogin($request);

//        if ($this->hasTooManyLoginAttempts($request)) {
//            $this->fireLockoutEvent($request);
//
//            return $this->sendLockoutResponse($request);
//        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

//        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function attemptLogin(Request $request)
    {
        $credentials = array_merge(
            $this->credentials($request),
            ["unavailable" => 0]
        );

        return $this->guard()->attempt(
//            $this->credentials($request), $request->filled('remember')
            $credentials
        );
    }

//	public function logout(\Illuminate\Http\Request $request)
  	public function postLogout(\Illuminate\Http\Request $request)
	{
//		$this->guard()->logout();
		
		$request->session()->invalidate();
		
		return redirect('/home');
	}

    public function username()
    {
        return 'userid';
    }

}
