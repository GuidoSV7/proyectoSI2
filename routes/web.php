<?php

use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnicoController;



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
    return view('auth/login');
});


Route::get('/dashboard', [TecnicoController::class,'index'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', [TecnicoController::class, 'index'])->middleware(['auth'])->name('tecnicos.index');
Route::get('/tecnicos/create', [TecnicoController::class, 'create'])->middleware(['auth'])->name('tecnicos.create');
Route::get('/tecnicos/{tecnico}/edit', [TecnicoController::class, 'edit'])->middleware(['auth'])->name('tecnicos.edit');
Route::get('/tecnicos/lista', [TecnicoController::class, 'lista'])->middleware(['auth'])->name('tecnicos.lista');


Route::get('/solicitudes/create', [SolicitudController::class, 'create'])->middleware(['auth'])->name('solicitudes.create');
Route::get('/solicitudes/{solicitud}/asignar', [SolicitudController::class, 'asignar'])->middleware(['auth'])->name('solicitudes.asignar');
Route::get('/solicitudes/lista', [SolicitudController::class, 'lista'])->middleware(['auth'])->name('solicitudes.lista');
Route::get('/solicitudes/disponibles', [SolicitudController::class, 'lista_disponibles'])->middleware(['auth'])->name('solicitudes.disponibles');
Route::get('/solicitudes/en-proceso', [SolicitudController::class, 'lista_en_proceso'])->middleware(['auth'])->name('solicitudes.en-proceso');
Route::get('/solicitudes/finalizados', [SolicitudController::class, 'lista_finalizados'])->middleware(['auth'])->name('solicitudes.finalizados');
Route::get('/solicitudes/solicitudes-asignadas', [SolicitudController::class, 'solicitudes_asignadas'])->middleware(['auth'])->name('solicitudes.solicitudes-asignadas');

Route::get('/solicitudes/{solicitud}/estado', [SolicitudController::class, 'cambiar_estado'])->middleware(['auth'])->name('solicitudes.cambiar-estado');
Route::get('/solicitudes/{solicitud}/edit', [SolicitudController::class, 'edit'])->middleware(['auth'])->name('solicitudes.edit');

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
