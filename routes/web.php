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


Auth::routes();


Route::get('/', function () {
    return view('auth/login');
});


Route::get('home', 'HomeController@index');

Route::middleware(['login','web'])->group(function () {
    Route::any('index','IndexController@index');



});

Route::resource('category','CategoryController');
Route::resource('project','ProjectController');
