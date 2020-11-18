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

Route::get('/', function(){
    return view('auth/login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('home', 'HomeController@index');
    Route::resource('user', 'UserController');
    Route::resource('jenis-surat', 'JenisSuratController');
    Route::get('surat/laporan', 'SuratController@laporan');
    Route::resource('surat', 'SuratController');
    Route::resource('disposisi', 'DisposisiController');
    Route::get('laporan/cetak', 'SuratController@cetak');
    Route::resource('agenda', 'AgendaController');
});
