<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Fungsi  Route::resource di isinya ialah dimana Get,Post,delete,put jadi satu itu yang dinamakan resource
Route::resource('mahasiswacrud','MahasiswaCRUDController'); 