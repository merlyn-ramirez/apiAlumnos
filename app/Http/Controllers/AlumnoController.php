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

    public function guardarAlumno(Request $request){
        $datos=$request->input();
        //dd($datos);
        $alumno=new Alumno();
        $alumno->nombre = $datos["nombre"];
        $alumno->numero_control = $datos["numero_control"];
        $alumno->fecha_nacimiento = $datos["fecha_nacimiento"];
        $alumno->sexo = $datos["sexo"];
        $alumno->especialidad = $datos["especialidad"];
        $alumno->save();

        //Alumno::create($datos); //esto guarda todo en una sola linea cuando los datos campos del formulario son iguales a los de la bd

        return redirect('/alumnos');
    }

    public function eliminarAlumno($id){
        $alumno=Alumno::find($id);//busco al alumno
        $alumno->delete();
        return redirect('/alumnos');
    }

    public function editarAlumno($id){
        $alumno=Alumno::find($id);//busco al alumno
        RETURN VIEW('EditarAlumno', compact('alumno'));//compact manda valores a la vista
    }

    public function actualizarAlumno($id, Request $request){
        $alumno=Alumno::find($id);
         $datos=$request->input();
        //dd($datos);
        
        $alumno->nombre = $datos["nombre"];
        $alumno->numero_control = $datos["numero_control"];
        $alumno->fecha_nacimiento = $datos["fecha_nacimiento"];
        $alumno->sexo = $datos["sexo"];
        $alumno->especialidad = $datos["especialidad"];
        $alumno->save();

        return redirect('/alumnos');
    }
}
