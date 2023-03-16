@extends('layout')

@section('contenido')
    <fieldset>
        <legend>Datos de Producto</legend>
        <form action="{{route('productos.update', $producto->cod)}}" method="post">
            @csrf
            @method('put')
            Nombre: <input type="text" name="nombre" value="{{$producto->nombre}}" id=""><br />
            Nombre Corto: <input type="text" name="nombre_corto" value="{{$producto->nombre_corto}}" id=""><br />
            Descripción: <input type="text" name="descripcion" value="{{$producto->descripcion}}" id=""><br />
            PVP: <input type="text" name="PVP" value="{{$producto->PVP}}" id=""><br />
            Familia: <input type="text" name="familia" value="{{$producto->familia}}" id=""><br />
            <input type="submit" value="Aceptar Cambios">
        </form>


    </fieldset>
@endsection
