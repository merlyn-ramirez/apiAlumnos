<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\AlumnoController; //importamos el controlador



Route::get('/inicio', function () {
    return view('welcome');
});
 //rutas del proyecto
route::get('/consulta',[AlumnoController::class, 'consulta']); 
//creo una ruta para que me lleve al controlador (consulta) y ejecuta una función que se llama consulta
route::get('/calcularCalificacion', [AlumnoController::class, 'calcular']);

//rutas del CRUD Alumno
route::get('/alumnos',[AlumnoController::class,'getAlumnos']);
route::get('/registrarAlumno',[AlumnoController::class,'registrarAlumno']); //lleva a la función registraAlumno del AlumnoController
route::post('/guardarAlumno', [AlumnoController::class,'guardarAlumno']);
route::get('/alumno/{id}',[AlumnoController::class, 'eliminarAlumno']);
route::get('/editarAlumno/{id}',[AlumnoController::class,'editarAlumno']);
route::post('/actualizarAlumno/{id}',[AlumnoController::class,'actualizarAlumno']);