<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::redirect('/', '/films');
Route::resource('/films', 'FilmsController');
Route::get('/setpublic/{id}', 'HomeController@setPublic')->name('setpublic');

Route::group(['prefix' => 'api'], function() {
    Route::get('/genres', 'HomeController@genres');
    Route::get('/genre/{id}', 'HomeController@genre');
    Route::get('/film/{id}', 'HomeController@film');
    Route::get('/films', 'HomeController@films');
});

