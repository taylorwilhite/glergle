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
    $glerks = auth()->user()->glerks;
    return view('welcome', compact('glerks'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/glerks', 'GlerkController@index');
Route::post('/glerks', 'GlerkController@store');
