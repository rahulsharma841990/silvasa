<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Auth;
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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $credentials = [
                    'email' => $request->input('email'),
                    'password' => $request->input('password')
                ];
        if(Auth::guard('web')->attempt($credentials)) {
            if(Auth::user()->role_id == 2){
                return redirect()->route('index');
            }else{
                return redirect()->route('administrator');
            }
        }else{
            Session::flash('login_fails' , 'wrong user credientals. ');
            return back();
        }
    }
}
