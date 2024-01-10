<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

Route::get('your_file/{hex_email}','SaleController@show');

Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('sales','SaleController');

});

 
