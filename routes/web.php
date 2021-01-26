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
    return view('index');
});

Route::prefix('public')->group(function () {
    Route::get('/get-kecamatan/{id_kab}', 'AdministrativeAreaController@getKecamatan');
    Route::get('/get-kelurahan/{id_kab}/{id_kec}', 'AdministrativeAreaController@getKelurahan');
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'KosController@index');
    Route::resource('kos', 'KosController')->parameters(['kos' => 'kos']);
    Route::resource('fasilitas', 'FasilitasController')->parameters(['fasilitas' => 'fasilitas']);

    Route::get('kos/{kos}/kamar', 'KosController@kamar');
    Route::get('kos/{kos}/kamar/create', 'KamarController@create');
    Route::post('kos/{kos}/kamar/store', 'KamarController@store');
    Route::get('kos/{kos}/kamar/{kamar}/edit', 'KamarController@edit');
    Route::get('kos/{kos}/kamar/{kamar}', 'KamarController@show');
    Route::put('kos/{kos}/kamar/{kamar}', 'KamarController@update');
    Route::delete('kos/{kos}/kamar/{kamar}/destroy', 'KamarController@destroy');
});
