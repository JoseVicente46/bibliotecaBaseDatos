@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
<h1>Listado de libros</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Editorial</th>
            <th scope="col">Precio</th>
            <th scope="col">Borrar</th>
            <th scope="col">Modificar</th>
        </tr>
    </thead>
@foreach ($libros as $libro)
<tbody>
    <tr>
        <td>{{ $libro["titulo"] }}</td>
        <td>{{ $libro["editorial"] }}</td>
        <td>{{ $libro["precio"] }}</td>
        <td><a class="btn btn-primary" href="{{ route('libros.destroy', $libro['id']) }}">X</a></td>
        <td><a class="btn btn-primary" href="{{ route('libros.show', $libro['id']) }}">&#9998</a></td>
    </tr>
</tbody>
@endforeach</table>
{{ $libros->links() }}
@endsection