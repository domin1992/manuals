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

Route::get('/', function () {
    return view('front.index');
});

Route::post('instrukcje', 'ManualController@validateEmail');
Route::get('instrukcje', ['middleware' => 'check-customer', 'uses' => 'ManualController@manuals']);
Route::get('{id}-{slug}', ['middleware' => 'check-customer', 'uses' => 'ManualController@manual']);