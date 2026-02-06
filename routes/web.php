<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');     

});


Auth::routes();

Route::get('your_file/{hex_email}','SaleController@show');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/home', 'HomeController@index')->name('home');


    Route::resource('sales','SaleController');

 

});

 
