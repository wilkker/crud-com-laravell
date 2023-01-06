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



//operações das séries
Route::get('/series' ,'App\Http\Controllers\SeriesController@index');
Route::get('/series/criar' ,'App\Http\Controllers\SeriesController@create');
Route::post('/series/criar' ,'App\Http\Controllers\SeriesController@store');
Route::delete('/series/remover/{id}' ,'App\Http\Controllers\SeriesController@destroy');

//operações das temporadas

Route::get('/series/{id}/temporadas' , 'App\Http\Controllers\TemporadasController@index');


//operações das temporadas

Route::get('/temporadas/{temporada}/episodios' , 'App\Http\Controllers\EpisodiosController@index');

//editar serie
Route::get('/series/editarserie' ,'App\Http\Controllers\SeriesController@edit');


