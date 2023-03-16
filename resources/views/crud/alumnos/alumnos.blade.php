@extends('layout')

@section('contenido')
    <a href="{{route("alumnos.create")}}">Añadir alumno</a>
    <tabla filas_serializado="{{$alumnos}}" campos_serializado="{{$campos}}" nombre="{{$nombre}}" />
@endsection
