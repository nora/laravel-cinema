<?php
/*
Route::get('/', function () {
    return view('index');
});
*/
Auth::routes();

Route::get('/', 'MovieController@top')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
