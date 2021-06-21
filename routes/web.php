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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/getProvince', 'RajaOngkirController@getProvince');

// Route::get('/', 'ViewController@index');

Route::get('/', 'ViewController@viewCekOngkir');

Route::post('/cek-ongkir', 'RajaOngkirController@checkOngkir');

Route::get('/getCity/{id}', 'RajaOngkirController@getCity');

Route::get('/city/{id}', 'ViewController@city');