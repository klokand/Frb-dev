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

/*
Route::get('/', function () {
    return view('home');
});
*/
Route::get('/',function(){
	return view('web_home');
});
Route::get('/web_home',function(){
	return view('web_home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
