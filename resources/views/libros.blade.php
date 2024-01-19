@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
<h1>Listado de libros</h1>
<ul class="list-group">
@forelse ($libros as $libro)
<li class="list-group-item">{{ $libro["titulo"] }} ({{ $libro["autor"] }})</li>
@empty
<li class="list-group-item">No se encontraron libros</li>
@endforelse </ul>
@endsection