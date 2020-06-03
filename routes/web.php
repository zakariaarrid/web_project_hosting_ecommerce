<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ar', function () {
    return view('home');
});
Route::get('/fr', function () {
    return view('homefr');
});


Route::get('/login/fr', 'HomeController@loginfr')->name('loginfr');

Route::post('/log', 'Auth\LoginController@authenticate')->name('log');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/register/fr', 'HomeController@registerfr')->name('registerfr');

Route::get('/register/ar', 'HomeController@registerar')->name('registerar');

Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');

Route::group(['middleware'=>'auth'], function() {

    Route::get('/dashboard', 'UsersController@index')->name('dashboard');
    Route::get('/add-web', 'UsersController@add_web')->name('add_web');
    Route::get('/profil', 'UsersController@profil')->name('profil');
    Route::patch('/update/{id}', 'UsersController@update')->name('update');
    Route::post('/insert_domaine', 'UsersController@insert_domaine')->name('insert_domaine');
    Route::post('/delete', 'UsersController@delete')->name('insert_domaine');
    Route::post('/abonnement', 'UsersController@abonnement')->name('abonnement');
    Route::get('/pricing', 'UsersController@pricing')->name('pricing');

});


/**
* middleware for login
**/
Route::group(['middleware'=>'NoneAuth'], function() {
    Route::get('/login/ar', 'HomeController@loginar')->name('loginar');
    Route::get('/login/fr', 'HomeController@loginfr')->name('loginfr');
});


