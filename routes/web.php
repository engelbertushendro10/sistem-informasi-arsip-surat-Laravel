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

// Route::get'/', function () {
//     return view('welcome');
// });

//Route::get('/', function(){
    //Route::get('/', 'loginController');
    //rout
//     return view('auth/login');
// });
Route::get('/',  'AuthController@loginForm')->name('login');
Route::post('/login',  'AuthController@login');

//Route::get('/logout',  'AuthController@logout');


//Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('home', 'HomeController@index');
    Route::resource('user', 'UserController');
    Route::get('cariuser','UserController@cari');
    Route::resource('jenis-surat', 'JenisSuratController');
    Route::get('surat/laporan', 'SuratController@laporan');
    Route::get('suratkeluar/laporan', 'SuratkeluarController@laporan');
    Route::resource('surat', 'SuratController');
    Route::resource('suratkeluar', 'suratkeluarController');
    Route::resource('disposisi', 'DisposisiController');
    Route::get('laporan/cetak', 'SuratController@cetak');
    Route::get('laporansk/cetak', 'SuratkeluarController@cetak');
    Route::resource('agenda', 'AgendaController');
    Route::get('search','suratController@cari');
    Route::get('searchsk','suratkeluarController@cari');
    Route::get('searcdisposisi','disposisiController@cari');

    // 
    Route::get('/pesan','NotifController@index');
    Route::get('/pesan/sukses','NotifController@sukses');
    Route::get('/pesan/peringatan','NotifController@peringatan');
    Route::get('/pesan/gagal','NotifController@gagal');
});
