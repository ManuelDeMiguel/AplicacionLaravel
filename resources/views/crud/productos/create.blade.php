@extends('layout')

@section('contenido')
    <fieldset>
        <legend>Datos de Producto</legend>
        <form action="{{route('productos.store')}}" method="post">
            @csrf
            @method('POST')
            Código: <input type="text" name="cod" id=""><br />
            Nombre: <input type="text" name="nombre" id=""><br />
            Nombre Corto: <input type="text" name="nombre_corto" id=""><br />
            Descripción: <input type="text" name="descripcion" id=""><br />
            PVP: <input type="text" name="PVP" id=""><br />
            Familia: <input type="text" name="familia" id=""><br />
            <input type="submit" value="Guardar Producto">
        </form>


    </fieldset>
@endsection
