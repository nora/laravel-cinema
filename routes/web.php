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
            ->get('/{mov_id}/', 'ZasekiController@schedule')
            ->where('mov_id', '[0-9]+');
        Route::name('zaseki')
            ->get('/{mov_id}/{schedule_id}/', 'ZasekiController@zaseki')
            ->where('mov_id', '[0-9]+')
            ->where('schedule_id', '[0-9]+');
        Route::name('ticket')
            ->get('/{mov_id}/{schedule_id}/ticket/', 'ZasekiController@ticket')
            ->where('mov_id', '[0-9]+')
            ->where('schedule_id', '[0-9]+');
        # /reserve/comment
        Route::name('/comment')
            ->middleware('auth')
            ->post('comment', 'ZasekiController@comment');
    });