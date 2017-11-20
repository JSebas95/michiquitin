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
Route::get('/consultas/planes','cartera\ConsultasController@planes');
Route::get('/consultas/mayor','cartera\ConsultasController@mayor');
Route::get('/consultas/mdeudas','cartera\ConsultasController@mdeudas');
Route::get('/consultas/mpagos','cartera\ConsultasController@mpagos');
Route::get('/deuda/mora/{id}','cartera\DeudaController@mora');


Route::get('deuda/setCliente', 'cartera\DeudaController@setCliente');
Route::get('/downloadPDF/{id}','cartera\PagoController@downloadPDF');
Route::resource('deuda', 'cartera\DeudaController');
Route::resource('pago', 'cartera\PagoController');
Route::resource('plan_de_pago', 'cartera\Plan_de_pagoController');
Route::resource('consultas', 'cartera\ConsultasController');


