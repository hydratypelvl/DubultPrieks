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
    return view('maintenance');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/index', function () {
    return view('index');
});
// Route::get('/index', function () {
//     return view('index');
// })->middleware('auth');



//ANKETU LAPAS
Route::post('/anketa', 'AnketaController@store')->middleware('auth');;
Route::get('/anketa', 'AnketaController@create')->middleware('auth');;
//Pieteikumu Lapas
Route::get('/pieteikumi', 'AnketaController@index')->middleware('auth');
Route::get('/pieteikumi/{id}', 'AnketaController@show')->middleware('auth');
Route::get('/pieteikumi/edit/{id}', 'AnketaController@edit')->middleware('auth');
Route::put('/pieteikumi/{id}', 'AnketaController@update')->middleware('auth');
Route::delete('/pieteikumi/{id}', 'AnketaController@destroy')->middleware('auth');

//DATUMU LAPAS
Route::get('/datumi', 'DateController@index');
Route::get('/datumi/create', 'DateController@create');
Route::post('/datumi', 'DateController@store');
Route::delete('/datumi/{id}', 'DateController@destroy');

// Auth::routes(['register' => false]); //REGISTRESANAS NONEMSANA
Auth::routes();  

Route::get('/home', 'HomeController@index')->name('home');
