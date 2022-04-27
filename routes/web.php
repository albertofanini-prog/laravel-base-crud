<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/comics', 'ComicController@index');

// Route::get('/comics/{id}', 'ComicController@show');

Route::resource('comics', 'ComicController');