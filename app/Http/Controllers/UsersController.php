<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class UsersController extends Controller
{
    public function index() {

        return view('dashboard.index');
    }

    /*****add site web*****/

    public function add_web() {
        return view('dashboard.add-web');
    }

    /*****edit profil*****/

    public function profil() {

        $user = Auth::user();

        return view('dashboard.profil',compact('user')) ;

    }

    /*****update profil*****/


    public function update(Request $request) {
        $user = Auth::user();
        if($user->update(array_filter($request->all()))){
            Session::flash('edit_user','La modification est faite avec succès');
        }
        return redirect()->route('profil');

    }

    /***** insert domaine name *****/

    public function insert_domaine(Request $request) {

        return $request ;

    }

}
