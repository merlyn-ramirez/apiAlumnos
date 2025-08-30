<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController; //importamos el controlador

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //rutas del CRUD Alumno
route::get('/alumnos',[AlumnoController::class,'getAlumnos']);
route::get('/',[AlumnoController::class,'getAlumnos']);
route::get('/registrarAlumno',[AlumnoController::class,'registrarAlumno']); //lleva a la función registraAlumno del AlumnoController
route::post('/guardarAlumno', [AlumnoController::class,'guardarAlumno']);
route::get('/alumno/{id}',[AlumnoController::class, 'eliminarAlumno']);
route::get('/editarAlumno/{id}',[AlumnoController::class,'editarAlumno']);
route::post('/actualizarAlumno/{id}',[AlumnoController::class,'actualizarAlumno']);

});

require __DIR__.'/auth.php';
