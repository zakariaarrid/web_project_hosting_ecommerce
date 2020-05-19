<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /***
     * login fr
     */
    public function loginfr(){
        return view('login.login_fr');
    }

    /***
     * login ar
     */
    public function loginar() {
        return view('login.login_ar');
    }

    /***
     * register fr
     */
    public function registerfr() {
        return view('register.register_fr');
    }

    /***
     * register ar
     */
    public function registerar() {
        return view('register.register_ar');
    }

}
