<?php

namespace App\Http\Controllers\Auth;

use \APP\Models\user;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = RouteServiceProvider::HOME;


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
     * Where to redirect users after login.
     *
     * @param App\Http\Requests\LoginRequest
     */
    public function  login(Request $request)
    {
        /*ログイン処理*/

        /*dd($credentials);*/

        
        $credentials = $request->only('email','password');

        /*dd($credentials);*/

        if(Auth::attempt($credentials)){
            
            dd($credentials);

            $request->session() -> regenerate();

            return redirect('home');

        }

            /*dd($credentials);*/
            return redirect('/');

    }    




}