@extends('layout')

@section('contenido')

<h1>SOCIOS</h1>
@forelse ($socio as $socio)
{{ $socio->nombre }} ({{ $socio->email }})<br>
Préstamo: <a href="{{route('prestamo', $socio->id)}}">Clic aquí</a><br>

@empty
No se encontraron socios
@endforelse 
@endsection