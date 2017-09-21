<?php
/*
Route::get('/', function () {
    return view('index');
});
*/
Auth::routes();

Route::get('/', 'MovieController@top')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('reserve')->namespace('Reserve')
    ->group(function () {
        Route::name('index')
            ->get('/{id}', 'ZasekiController@index')
            ->where('id', '[0-9]+');
        # /reserve/comment
        Route::name('/comment')
            ->middleware('auth')
            ->post('comment', 'ZasekiController@comment');
    });