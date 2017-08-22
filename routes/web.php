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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logements', 'LogementController@index')->name('logement.index');
Route::get('/logements/create', 'LogementController@create')->name('logement.create');
Route::post('/logements', 'LogementController@store')->name('logement.store');

Route::get('/communes', 'CommunesController@index')->name('commune.index');
Route::post('/commune', 'CommunesController@storeCommune')->name('commune.store');

Route::get('/type-logement', 'TypeLogementsController@index')->name('typeLogement.index');
Route::post('/type-logement', 'TypeLogementsController@store')->name('typeLogement.store');
