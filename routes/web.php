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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return 'test';
    //return view('homefr');
});


Route::get('/register/fr', 'HomeController@registerfr')->name('registerfr');

Route::get('/register/ar', 'HomeController@registerar')->name('registerar');

Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');

Route::group(['middleware'=>'auth'], function() {

    Route::get('/dashboard', 'UsersController@index')->name('dashboard');
    Route::get('/add-web', 'UsersController@add_web')->name('add_web');

});


/**
* middleware for login
**/
Route::group(['middleware'=>'NoneAuth'], function() {
    Route::get('/login/ar', 'HomeController@loginar')->name('loginar');
    Route::get('/login/fr', 'HomeController@loginfr')->name('loginfr');
});


