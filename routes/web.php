<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\ParcelasController;
use App\Http\Controllers\UsersController;

Route::get('/dashboard', function(){
    return view('layouts.dashboard');
});

//rutas para parcelas
Route::get('parcelas',[ParcelasController::class, 'index'])->name('parcela.index');
Route::get('parcelas/create',[ParcelasController::class, 'create'])->name('parcela.create');
Route::post('parcelas', [ParcelasController::class,'store'])->name('parcela.store');
Route::get('parcelas/{parcelas}',[ParcelasController::class, 'show'])->name('parcela.show');
Route::get('parcelas/{parcelas}/edit',[ParcelasController::class, 'edit'])->name('parcela.edit');
Route::put('parcelas/{parcelas}', [ParcelasController::class,'update'])->name('parcela.update');
Route::delete('parcelas/{parcelas}',[ParcelasController::class, 'delete'])->name('parcela.delete');

//rutas para proyectos
Route::get('proyectos',[ProyectosController::class, 'index'])->name('proyecto.index');
Route::get('proyectos/create',[ProyectosController::class, 'create'])->name('proyecto.create');
Route::post('proyectos', [ProyectosController::class,'store'])->name('proyecto.store');
Route::get('proyectos/{proyectos}',[ProyectosController::class, 'show'])->name('proyecto.show');
Route::get('proyectos/{proyectos}/edit',[ProyectosController::class, 'edit'])->name('proyecto.edit');
Route::put('proyectos/{proyectos}', [ProyectosController::class,'update'])->name('proyecto.update');
Route::delete('proyectos/{proyectos}',[ProyectosController::class, 'delete'])->name('proyecto.delete');

//rutas usuarios
Route::get('usuarios',[UsersController::class, 'index'])->name('usuario.index');
Route::get('usuarios/create',[UsersController::class, 'create'])->name('usuario.create');
Route::post('usuarios', [UsersController::class,'store'])->name('usuario.store');
Route::get('usuarios/{usuarios}',[UsersController::class, 'show'])->name('usuario.show');
Route::get('usuarios/{usuarios}/edit',[UsersController::class, 'edit'])->name('usuario.edit');
Route::put('usuarios/{usuarios}', [UsersController::class,'update'])->name('usuario.update');
Route::delete('usuarios/{usuarios}',[UsersController::class, 'delete'])->name('usuario.delete');


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
