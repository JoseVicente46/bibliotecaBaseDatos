@extends('plantilla')
@section('titulo', 'Listado de los libros de un autor')
@section('contenido')
<h1>Listado de los libros de {{$libros[0]->autor->nombre}}</h1>
<ul class="list-group">
@foreach ($libros as $libro)
<li class="list-group-item"><a class="btn btn-primary btn-sm" target="_blanck" href="{{ route('libros.apiLista', $libro->id) }}">{{$libro->titulo}}</a></li>

@endforeach
<br>
<li>
    <a class="btn btn-primary" target="_blanck" href="{{ route('autores.apiLista', $libros[0]->autor->id) }}">Descargar</a>  
    <a class="btn btn-primary" href="{{ route('autores.index') }}">Volver atras</a>
</li>
</ul>
@endsection