<?php
//https://github.com/santillanlc/proyectoAlumnosLaravel

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno; //importa el modelo

class AlumnoController extends Controller
{
    //
    public function consulta()
    {
        $nombre="Juan";
        $edad=18;
        $numero_control="0234117823634";
        return view("ConsultaAlumnos", compact('nombre', 'edad', 'numero_control'));
    }

    public function calcular()
    {
        $calificaciones[0]=8;
        $calificaciones[1]=10;
        $calificaciones[2]=5;
        $calificaciones[3]=6;
        $calificaciones[4]=7.5;

        $nombre="Merlyn";

        return view("Boleta", compact('nombre', 'calificaciones'));

    }

    public function getAlumnos(){
       // $alumnos=Alumno::all(); //del modelo alumno traeme todos los registros
         $alumnos=Alumno::orderBy('id','desc')->get();  //trae los alumnos ordenados descendentemente, esto se maneja con el blade de laravel
        return view("ConsultarAlumnos", compact('alumnos')); //el compact es para pasar las variables a la vista
    }

    public function registrarAlumno(){
        return view('RegistrarAlumno');
    }
}
