<?php

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

// main index
Route::get('/', 'CallendarController@index');
Route::get('/events-json','EventController@show');
Route::post('/save-event','EventController@store');