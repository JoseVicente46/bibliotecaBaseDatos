@extends('plantilla')
@section('titulo', 'Listado de cortos')
@section('contenido')
<div id="padre">
@forelse ($cortos as $cortos)
<div class="hijo">
<h1>{{ $cortos["titulo"] }}</h1>
<h6>{{ $cortos["director"] }}</h6>
<p>{{ $cortos["sinapsis"] }}</p>
<a href="{{route('cortosId',$cortos['id'])}}" class="btn btn-primary">Detalles</a>
</div>
@empty
@endforelse </div>
@endsection