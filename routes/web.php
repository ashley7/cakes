<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if (Auth::guest())

        return view('auth.login');

    return redirect("home");

});

Auth::routes();

Route::get('your_file/{hex_email}','SaleController@show');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('sales','SaleController@store');

});

 
