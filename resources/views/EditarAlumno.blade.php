@extends('master') <!--incrusto todo el contenido de master-->

@section('titulo')
    <h1>Modificar alumnno</h1>
@stop

@section('contenido')

 <form action="{{ url('/actualizarAlumno') }}/{{ $alumno->id}}" method="POST">
        @csrf <!--Laravel envía un token por seguridad-->
        <div class="form-group mb-4">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required value="{{ $alumno->nombre}}">
        </div>
        <div class="form-group mb-4">
            <label for="">Numero de control:</label>
            <input type="text" class="form-control" name="numero_control" required value="{{ $alumno->numero_control}}">
        </div>
        <div class="form-group mb-4">
            <label for="">Fecha de nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" required  value="{{ $alumno->fecha_nacimiento}}">
        </div>
        <div class="form-group mb-4">
            <label for="">Sexo:</label>
            <select name="sexo">
                <option value="" selected>Selecciona una opción</option>
                @if($alumno->sexo==1)
                    <option value="1" selected>Femenino</option>
                    <option value="2">Masculino</option>
                    <option value="3">Otro</option>
                @elseif($alumno->sexo==2)
                    <option value="1">Femenino</option>
                    <option value="2" selected>Masculino</option>
                    <option value="3">Otro</option>
                @elseif($alumno->sexo==3)
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                    <option value="3" selected>Otro</option>
                @endif
            </select>
        </div>
       <div class="form-group mb-4">
            <label for="">Especialidad:</label>
            <select name="especialidad">
                <option value="">Selecciona tu especialidad</option>
                <option value="{{ $alumno->especialidad }}" selected> {{ $alumno->especialidad }}</option>
                <option value="PROGRAMACION">Programación</option>
                <option value="CONTABILIDAD">Contabilidad</option>
                <option value="ELECTRONICA">Electrónica</option>
                <option value="MANTENIMIENTO AUTOMOTRIZ">Mantenimiento Automotriz</option>
            </select>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Guardar cambios">
            <a href="{{url('/alumnos')}}" class="btn btn-danger">Regresar</a>
        </div>
    </form>

@stop