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


// Route::get('/','App\Http\Controllers\PageController@pageRouteAndCallApi');

Route::group(['middleware' => 'Language'], function() {

    Route::get('/','App\Http\Controllers\PageController@pageRouteAndCallApi');

    Route::get('/change-language/{lang}', 'App\Http\Controllers\PageController@langChange');

});
Route::get('/movie','App\Http\Controllers\PageController@movieAndCallApi');
Route::get('/watch/{slug}', 'App\Http\Controllers\PageController@watchAndCallApi');