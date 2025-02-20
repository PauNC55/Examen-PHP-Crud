@extends('layout')

@section('contenido')

<h1>Préstamos del usuario</h1>
@forelse ($datos as $socio)
{{ $socio->libro->titulo }} ({{ $socio->libro->editorial }})<br>


<a href="{{route('historial', $socio->libro->id)}}">Historial de préstamos del libro </a><br>
@empty
No tiene historial este socio
@endforelse 
@endsection