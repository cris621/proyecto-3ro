<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\GeneraOrdenesController;



Route::post('/import', [ImportController::class, 'import'])->name('import');
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

//Route::get('/info', [Test Controller::class, 'info'])->name('info');
//Route::post('/info', [Test Controller::class, 'store'])->name('info');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users/{usu_id}/cont', [UsersController::class, 'editcont'])->name('users.cont');


    Route::resource('cursos',CursosController::class);
    Route::resource('users',UsersController::class);


    Route::get('/genera_ordenes',[GeneraOrdenesController::class, 'index'])->name('genera_ordenes.index');
    Route::post('/generarOrdenes',[GeneraOrdenesController::class, 'generarOrdenes'])->name('generarOrdenes');


    Route::post('/eliminarOrdenes',[GeneraOrdenesController::class, 'eliminarOrdenes'])->name('eliminarOrdenes');
   
   
    Route::get('/genera_ordenes.show/{secuencial}',[GeneraOrdenesController::class, 'show'])->name('genera_ordenes.show');
    
    Route::get('/genera_ordenes.xls/{secuencial}',[GeneraOrdenesController::class, 'xls'])->name('genera_ordenes.xls');
 
});

require __DIR__.'/auth.php';
