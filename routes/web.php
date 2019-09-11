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

//Route::get('admin/permiso/', '/Admin/PermisoController@index')->name('permiso');
Route::group([
    'prefix'    => 'admin',
    'namespace' => 'Admin',
    'as'        => 'admin.'
    ], function () {
    Route::get('permiso', 'PermisoController@listar')->name('listar_permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::get('permiso/guardar', 'PermisoController@guardar')->name('guardar_permiso');
    Route::get('menu', 'MenuController@listar')->name('listar_menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
});