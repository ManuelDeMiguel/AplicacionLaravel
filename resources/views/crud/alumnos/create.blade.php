@extends('layout')

@section('contenido')
    <fieldset>
        <legend>Datos de Alumno</legend>
        <form action="{{route('alumnos.store')}}" method="post">
            @csrf
            @method('POST')
            Nombre: <input type="text" name="nombre" id=""><br />
            Apellido: <input type="text" name="apellido" id=""><br />
            Dirección: <input type="text" name="direccion" id=""><br />
            DNI: <input type="text" name="dni" id=""><br />
            <input type="submit" value="Guardar Alumno">
        </form>


    </fieldset>
@endsection
