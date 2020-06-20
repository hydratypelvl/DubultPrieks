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
    return view('index');
});
//ANKETU LAPAS
Route::post('/anketa', 'AnketaController@store');
Route::get('/anketa', 'AnketaController@create');

Route::get('/pieteikumi', 'AnketaController@index')->middleware('auth');

//DATUMU LAPAS
Route::get('/datumi', 'DateController@index');
Route::get('/datumi/create', 'DateController@create');
Route::post('/datumi', 'DateController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
