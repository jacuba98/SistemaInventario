<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\EmpleadoController;

// Rutas Inventario
Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario.index');
Route::get('/inventario/create', [InventarioController::class, 'create'])->name('inventario.create');
Route::post('/inventario', [InventarioController::class, 'store'])->name('inventario.store');
Route::get('/inventario/{id}', [InventarioController::class, 'show'])->name('inventario.show');
Route::get('/inventario/{id}/edit', [InventarioController::class, 'edit'])->name('inventario.edit');
Route::put('/inventario/{id}', [InventarioController::class, 'update'])->name('inventario.update');
Route::delete('/inventario/{id}', [InventarioController::class, 'destroy'])->name('inventario.destroy');

// Rutas Empleados
//Route::resource('empleados', EmpleadoController::class);
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');
Route::get('/empleados/{id}', [EmpleadoController::class, 'show'])->name('empleados.show');
Route::get('/empleados/{id}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');
Route::put('/empleados/{id}', [EmpleadoController::class, 'update'])->name('empleados.update');
Route::delete('/empleados/{id}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');


Route::post('/empleados/search', [EmpleadoController::class, 'search'])->name('empleados.search');


// Nueva ruta para mostrar el historial
Route::get('/inventario/{id}/historial', [InventarioController::class, 'historial'])->name('inventario.historial');

Route::get('/historial', [HistorialController::class, 'index'])->name('historial.index');

Route::get('/export', [InventarioController::class, 'export'])->name('export');
//Route::get('/export', [InventarioController::class, 'export']->name('export')); 

Route::post('/inventario/search', [InventarioController::class, 'search'])->name('inventario.search');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
