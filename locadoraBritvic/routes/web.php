<?php

use App\Http\Controllers\ClienteControlador;
use App\Http\Controllers\ReservaControlador;
use App\Http\Controllers\VeiculoControlador;
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
    return view('welcome');
});


//Associando routes com controller's 
Route::resource('clientes',ClienteControlador::class);
Route::resource('veiculos', VeiculoControlador::class);
Route::resource('reservas', ReservaControlador::class);

//Clientes
Route::get('delete/{id}',[ClienteControlador::class,'destroy']);
Route::get('editar/{id}',[ClienteControlador::class,'edit']);
Route::post('update/{id}',[ClienteControlador::class,'update']);

//Veiculos
Route::get('deleteVei/{id}',[VeiculoControlador::class,'destroy']);
Route::get('editarVei/{id}',[VeiculoControlador::class,'edit']);
Route::post('updateVei/{id}',[VeiculoControlador::class,'update']);

//Reservas
Route::get('deleteRes/{id}',[ReservaControlador::class,'destroy']);
Route::get('editarRes/{id}',[ReservaControlador::class,'edit']);
Route::post('updateRes/{id}',[ReservaControlador::class,'update']);

