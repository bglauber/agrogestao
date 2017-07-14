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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/veiculo', 'Admin\\VeiculoController');

Auth::routes();

Route::resource('admin/tipo-lubrificante', 'Admin\\TipoLubrificanteController');
Route::resource('admin/fabricante', 'Admin\\FabricanteController');
Route::resource('admin/fabricante', 'Admin\\FabricanteController');
Route::resource('admin/fabricante', 'Admin\\FabricanteController');
Route::resource('admin/fabricante', 'Admin\\FabricanteController');
Route::resource('admin/tipo-veiculo', 'Admin\\TipoVeiculoController');
Route::resource('admin/veiculo', 'Admin\\VeiculoController');
Route::resource('admin/tipo-veiculo', 'Admin\\TipoVeiculoController');
Route::resource('admin/fabricante', 'Admin\\FabricanteController');
Route::resource('admin/fabricante', 'Admin\\FabricanteController');
Route::resource('admin/fabricante', 'Admin\\FabricanteController');
Route::resource('admin/fabricante', 'Admin\\FabricanteController');
Route::resource('admin/veiculo', 'Admin\\VeiculoController');
Route::resource('admin/tipo-veiculo', 'Admin\\TipoVeiculoController');
Route::resource('admin/veiculo', 'Admin\\VeiculoController');