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

/* Profil */
Route::get('/profil', 'ProfilController@index');
Route::get('/show/{user}', 'ProfilController@show');
Route::get('/createProfil', 'ProfilController@create');
Route::post('/addProfil', 'ProfilController@store');
Route::get('/profil/{id}/edit', 'ProfilController@edit');
Route::put('/update/{id}', 'ProfilController@update');
Route::post('/search', 'ProfilController@search');

/* Post */
Route::get('/createPoste', 'PosteController@create');
Route::post('/addPoste', 'PosteController@store');