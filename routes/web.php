<?php

use Illuminate\Support\Facades\Route;



Route::get('/stock', 'StockController@view')->name("create-stock-get");
Route::post('create-stock', 'StockController@tambah_data')->name("create-stock");
Route::delete('/delete-stock/{stock_id}', 'StockController@deleteStock')->name('delete-stock');

Route::get('/home', function(){
    return view('home');
});
Route::get('/about');
Route::get('/contact');
Route::get('/services', function(){
    return view('services');
});


