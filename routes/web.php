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


//route CRUD
Route::get('/','BerandaController@index');

Route::get('/profil','ProfilController@index');

Route::get('/projek','ProjekController@index');

Route::get('/projek/view/{slug}','ProjekController@detail');