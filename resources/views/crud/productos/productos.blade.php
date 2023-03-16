@extends('layout')

@section('contenido')
    <a href="{{route("productos.create")}}">Añadir alumno</a>
    <table class="bg-white">
        <caption>Listado de productos</caption>
        <tr>
            <th>Nombre</th>
            <th>Nombre Corto</th>
            <th>Descripción</th>
            <th>PVP</th>
            <th>Familia</th>
            <th colspan="2"></th>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->nombre_corto}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->PVP}}</td>
                <td>{{$producto->familia}}</td>
                <td><a href="{{route("productos.edit", $producto->cod)}}">Editar</a></td>
                <td>
                    <form action="{{route("productos.destroy", $producto->cod)}}" method="post">
                        @csrf
                        @method("delete")
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach


    </table>





@endsection
