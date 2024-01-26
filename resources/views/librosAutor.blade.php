@extends('plantilla')
@section('titulo', 'Listado de los libros de un autor')
@section('contenido')
<h1>Listado de los libros de {{$libros[0]->autor->nombre}}</h1>
<ul class="list-group">
@foreach ($libros as $libro)
<li class="list-group-item"> {{$libro->titulo}}</li>
@endforeach
<br>
<li><a class="btn btn-primary" href="{{ route('libros.show', $libro['id']) }}">Descargar</a>  <a class="btn btn-primary" href="{{ route('autores.index') }}">Volver atras</a></li>
</ul>
@endsection