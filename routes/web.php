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

Route::get('/', 'InicioController@index')->name('inicio');

Route::get('admin/permiso/', '/Admin/PermisoController@index')->name('permiso');
Route::group([
    'prefix'    => 'admin',
    'namespace' => 'Admin',
    'as'        => 'admin.'
    ], function () {
    Route::get('permiso', 'PermisoController@listar')->name('listar');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear');
    Route::get('permiso/guardar', 'PermisoController@guardar')->name('guardar');
});