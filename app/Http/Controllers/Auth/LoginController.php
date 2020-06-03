<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    //protected $redirectTo = RouteServiceProvider::HOME;

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
     * @param Request $request
     * @return array
     *
     * override logout function redirect to homefr
     */
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login/fr');
    }

    public function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['id_verified' => 1]);
    }
    public function authenticate(Request $request)
    {

            $field = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            $request->merge([$field => $request->email]);

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'id_verified' => '1']))
                return redirect()->route('dashboard');
            else {
                return back()->with('error','Mots de passe ou email incorrect');
            }


    }

    public function redirectTo()
    {
        return '/@dashboard';
    }

}
