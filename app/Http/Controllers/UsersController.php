<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index() {

        return view('dashboard.index');
    }

    /*****add site web*****/

    public function add_web() {
        return view('dashboard.add-web');
    }


}
