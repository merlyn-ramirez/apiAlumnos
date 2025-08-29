@extends('master')
@section('titulo') <h1>Registrar alumno</h1> @stop

@section('contenido')
    <form action="{{ url('/guardarAlumno') }}" method="POST">
        @csrf <!--Laravel envía un token por seguridad-->
        <div class="form-group mb-4">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="form-group mb-4">
            <label for="">Numero de control:</label>
            <input type="text" class="form-control" name="numero_control" required>
        </div>
        <div class="form-group mb-4">
            <label for="">Fecha de nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" required>
        </div>
        <div class="form-group mb-4">
            <label for="">Sexo:</label>
            <select name="sexo">
                <option value="1">Femenino</option>
                <option value="2">Masculino</option>
                <option value="3">Otro</option>
            </select>
        </div>
       <div class="form-group mb-4">
            <label for="">Especialidad:</label>
            <select name="especialidad">
                <option value="">Selecciona tu especialidad</option>
                <option value="PROGRAMACION">Programación</option>
                <option value="CONTABILIDAD">Contabilidad</option>
                <option value="ELECTRONICA">Electrónica</option>
                <option value="MANTENIMIENTO AUTOMOTRIZ">Mantenimiento Automotriz</option>
            </select>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Registrar">
            <a href="{{url('/alumnos')}}" class="btn btn-danger">Regresar</a>
        </div>
    </form>
@stop