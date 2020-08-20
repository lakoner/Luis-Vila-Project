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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/obras','PageController@obras');

Route::get('/eat_art','PageController@eat_art');

Route::get('/biografia','PageController@biografia');

Route::get('/actualitat','PageController@actualitat');

Route::get('/prensa','PageController@prensa');

Route::get('/contactar','PageController@contactar');

Route::resource('obra', 'ObraController');

Route::resource('actualidad', 'ActualidadController');



