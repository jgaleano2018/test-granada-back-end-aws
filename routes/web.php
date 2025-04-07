<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logCountries', 'LogCountriesController@index');
Route::get('/logCountries/{id}', 'LogCountriesController@show');
Route::post('/logCountries', 'LogCountriesController@create');
Route::put('/logCountries/{id}', 'LogCountriesController@update');
Route::delete('/logCountries/{id}', 'LogCountriesController@delete');
