<?php

use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\MiCuentaController;
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

Route::get('mi-cuenta', [MiCuentaController::class, 'index'])->middleware('auth')->name('mi-cuenta');

Route::group(['prefix' => 'admin-backend', 'middleware'=>['auth', 'superadministrador']], function () {
    /*RUTAS DE MENU*/
    route::get('menu', [MenuController::class, 'index'])->name('menu'); 
    route::get('menu/crear', [MenuController::class, 'crear'])->name('menu.crear');
    route::get('menu/{id]/editar', [MenuController::class, 'editar'])->name('menu.editar');
    route::post('menu', [MenuController::class, 'guardar'])->name('menu.guardar');
    route::post('menu/guardar-orden', [MenuController::class, 'guardarOrden'])->name('menu.orden');
    route::put('menu/{id}', [MenuController::class, 'actualizar'])->name('menu.actualizar');
    route::delete('menu/{id]/eliminar', [MenuController::class, 'eliminar'])->name('menu.eliminar');
});