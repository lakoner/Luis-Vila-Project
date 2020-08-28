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

Route::get('adminupayp1b4', 'Auth\LoginController@showLoginForm')->name('adminupayp1b4');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/obras','PageController@obras');

Route::get('/eat_art','PageController@eat_art');

Route::get('/biografia','PageController@biografia');

Route::get('/actualitat','PageController@actualitat');

Route::get('/noticia/{actualidad}','ActualidadController@show');

Route::get('/prensa','PageController@prensa');

Route::get('/contactar','PageController@contactar');

Route::resource('obra', 'ObraController')->middleware('auth');

Route::resource('actualidad', 'ActualidadController')->middleware('auth');

Route::resource('serie','SerieController')->middleware('auth');

Route::get('/filter', 'ObraController@filter')->name('obra.filter');

// Route::get('/filter', 'PageController@filter')->name('serie.filter');

Route::get('/pintura','PageController@pintura');





