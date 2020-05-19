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
    return abort(404);
});

Route::get('/login/fr', 'HomeController@loginfr')->name('loginfr');

Route::get('/register/fr', 'HomeController@registerfr')->name('registerfr');

Route::get('/register/ar', 'HomeController@registerar')->name('registerar');

Route::get('/login/ar', 'HomeController@loginar')->name('loginar');

Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');


