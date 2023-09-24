<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/addLibro', [LibrosController::class,'addLibroFormulario'])->name('addLibro');
Route::get('/formAddLibro', [LibrosController::class,'showFormularioAddLibro'])->name('formAddLibro');
Route::get('/mostrarLibros', [LibrosController::class,'showMostrarTodosLibros'])->name('mostrarLibros');
Route::get('/deleteLibro/{id}', [LibrosController::class,'deleteLibro'])->name('deleteLibro');
Route::get('/updateLibroForm/{id}', [LibrosController::class,'updateLibroForm'])->name('updateLibroForm');
Route::post('/updateLibro', [LibrosController::class,'updateLibro'])->name('updateLibro');

Route::get('/addPrestamo', [PrestamosController::class,'addPrestamoFormulario'])->name('addPrestamo');
Route::get('/formAddPrestamo', [PrestamosController::class,'showFormularioAddPrestamo'])->name('formAddPrestamo');
Route::get('/mostrarPrestamos', [PrestamosController::class,'showMostrarTodosPrestamos'])->name('mostrarPrestamos');
Route::get('/deletePrestamo/{id}', [PrestamosController::class,'deletePrestamo'])->name('deletePrestamo');
Route::get('/updatePrestamoForm/{id}', [PrestamosController::class,'updatePrestamoForm'])->name('updatePrestamoForm');
Route::post('/updatePrestamo', [PrestamosController::class,'updatePrestamo'])->name('updatePrestamo');

Route::get('/primerComponente', function () {
    return view('primerComponente');
})->name('primerComponente');

Route::get('/pruebas', [LibrosController::class,'showPrueba']);
Route::post('/showPrestamos', [LibrosController::class,'showPrestamos'])->name('showPrestamos');
