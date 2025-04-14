<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogCountriesController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Rutas a las que se permitirá acceso
Route::get('/logCountries', 'App\Http\Controllers\LogCountriesController@index')->name('index');
Route::post('/logCountries', 'App\Http\Controllers\LogCountriesController@create')->name('create');
Route::post('/logCountriesEdit', 'App\Http\Controllers\LogCountriesController@update')->name('update');
Route::post('/logCountriesDelete', 'App\Http\Controllers\LogCountriesController@delete')->name('delete');