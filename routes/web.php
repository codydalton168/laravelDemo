<?php
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


Route::get('/','index@home');


Route::get('/about', 'aboutController@indexPage');
Route::get('/pricing', 'pricingController@indexPage');





Route::get('/register', 'RegisterController@indexPage');
Route::post('/register', 'RegisterController@registerPage');

Route::get('login', 'LoginController@show');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');


/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/