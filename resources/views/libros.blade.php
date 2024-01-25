@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')

<h1>Listado de libros</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Precio</th>
            <th scope="col">Borrar</th>
            <th scope="col">Modificar</th>
        </tr>
    </thead>
@foreach ($libros as $libro)
<tbody>
    <tr>
        <td>{{ $libro->titulo }}</td>
        <td>{{ $libro->autor->nombre }}</td>
        <td>{{ $libro->editorial }}</td>
        <td>{{ $libro->precio }}</td>
        <td><form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Borrar libro" />
        </form></td>
        <td><a class="btn btn-primary" href="{{ route('libros.show', $libro['id']) }}">&#9998</a></td>
    </tr>
</tbody>
@endforeach</table>
{{ $libros->links() }}

<h1>Inserta un libro</h1>
<form name="form" action="{{ route('libros.store') }}" method="POST">
@csrf
@method("POST")
<table class="table">
    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Precio</th>
            <th scope="col">Insertar</th>
        </tr>
    </thead>

<tbody>
    <tr>
        <td><input class="form-control" name="titulo"></td>
        <td>
            <select class="form-select" name="autor">
            @foreach ($autores as $autor)
                <option value="{{$autor['id']}}">{{ $autor["nombre"] }}</option>
            @endforeach  
            </select> 
        </td>
        <td><input class="form-control" name="editorial"></td>
        <td><input class="form-control" name="precio"></td>
        <td><button type=submit class="btn btn-primary" >Confirmar</button></td>
    </tr>
</tbody>
</table>
</form>
@endsection