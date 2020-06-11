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

Route::get('/', function () {
    return view('Main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/backoffice','BackOfficeController@index')->name('backoffice');

Route::get('/profile','UserController@index')->name('profile');

// vou deixar este codigo em baixo só para teste -- KA
Route::get('/app', function(){
    return view('layouts.app');
});
