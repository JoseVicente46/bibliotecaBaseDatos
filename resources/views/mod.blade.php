@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
<h1>Modificacion</h1>
<form name="form" action="{{ route('libros.update', $libro->id) }}" method="POST">
@csrf
@method("PUT")
<table class="table">
    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Precio</th>
            <th scope="col">Retroceder</th>
            <th scope="col">Modificar</th>
        </tr>
    </thead>

<tbody>
    <tr>
        <td><input class="form-control" name="titulo" value= "{{ $libro['titulo'] }}"></td>
        <td>
            <select class="form-select" name="id_autor">
            @foreach ($autores as $autor)
                @if($libro->id_autor == $autor->id)
                    <option value="{{$autor['id']}}" selected>{{ $autor["nombre"] }}</option>
                @else
                    <option value="{{$autor['id']}}">{{ $autor["nombre"] }}</option>
                @endif
            @endforeach  
            </select> 
        </td>
        <td><input class="form-control" name="editorial" value= "{{ $libro['editorial'] }}"></td>
        <td><input class="form-control" name="precio" value= "{{ $libro['precio'] }}"></td>
        <td><a class="btn btn-primary" href="{{ route('libros.index')}}">Retroceder</a></td>
        <td><button type=submit class="btn btn-primary" >Confirmar</button></td>
    </tr>
</tbody>
</table>
</form>
@endsection