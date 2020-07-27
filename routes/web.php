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

Route::get('/inici', 'HomeController@index')->name('home');

Route::get('/obra','PageController@obra');

Route::get('/biografia','PageController@biografia');

Route::get('/actulitat','PageController@actualitat');

Route::get('/bibliografia','PageController@bibliografia');

Route::get('/contactar','PageController@contactar');
