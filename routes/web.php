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

Route::get('/test1_controller','Product_controller@perhitungan');

Route::get('/test2_controller','Product_controller@array');
Route::get('/test3','Product_controller@testing');

Route::get('/test4','Barang_controller@produk');


Route::get('/test5','Barang_controller@customer');

// Route::get('/test6','Barang_controller@diskon');


Route::get('/test7/{id}','Barang_controller@viewdata');


Route::get('/test8','Barang_controller@view');

Route::get('/test9','Barang_controller@delete');

Route::get('/form','Barang_controller@form');

Route::post('/insert','Barang_controller@insert');