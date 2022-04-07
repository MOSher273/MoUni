<?php

Auth::routes();
Route::get('/', function () {
    $quotes = App\Quote::all();
    return view('index',compact('quotes'));
});
Route::get('/api-data', function () {return view('second');});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('quote/add', 'HomeController@addQuote');
Route::post('quote/add', 'HomeController@insertQuote');
Route::get('quote/delete/{id}', 'HomeController@deleteQuote');


