@extends('plantilla')
@section('titulo', 'Listado de cortos por ID')
@section('contenido')
<div id="padre">
@forelse ($cortos as $cortos)
@if($cortos["id"]  ==  $id)
    <div class="hijo">
    <h1>{{ $cortos["titulo"] }}</h1>
    <h6>{{ $cortos["director"] }}</h6>
    <p>{{ $cortos["sinapsis"] }}</p>
    <a href="{{route('cortos')}}" class="btn btn-primary">Volver</a>
    </div>
@endif
@empty
@endforelse </div>
@endsection