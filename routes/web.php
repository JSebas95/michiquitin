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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');  

Route::get('/deuda/hcliente','cartera\DeudaController@hcliente');
Route::get('/pago/hpago','cartera\PagoController@hpago');
Route::get('deuda/setCliente', 'cartera\DeudaController@setCliente');
Route::resource('deuda', 'cartera\DeudaController');
Route::resource('pago', 'cartera\PagoController');
Route::resource('plan_de_pago', 'cartera\Plan_de_pagoController');
Route::get('/downloadPDF/{id}','cartera\PagoController@downloadPDF');

