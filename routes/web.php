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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','PendudukController@index');
Route::get('/penduduk','PendudukController@index');
Route::get('/penduduk/tambah', 'PendudukController@tambah');
Route::post('/penduduk/store', 'PendudukController@store');
Route::get('/penduduk/edit/{id}', 'PendudukController@edit');
Route::put('/penduduk/update/{id}', 'PendudukController@update');
Route::get('/penduduk/hapus/{id}', 'PendudukController@delete');