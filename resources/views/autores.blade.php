@extends('plantilla')
@section('titulo', 'Listado de Autores')
@section('contenido')

<h1>Listado de autores</h1>

<form action= "{{ route('autores.lista') }}" method="GET">
    @csrf
    <select class="form-select" name="autor">
        @foreach ($autores as $autor)
            <option value="{{$autor['id']}}">{{ $autor["nombre"] }}</option>
        @endforeach
    </select>
    <br>
    <button class="btn btn-primary" type="submit" >Listar libros</button>
</form>
@endsection