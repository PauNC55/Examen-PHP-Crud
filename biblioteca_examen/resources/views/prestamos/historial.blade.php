@extends('layout')

@section('contenido')

<h1>Libro prestado</h1>
@forelse ($datos as $libro)
{{ $libro->socio->nombre }} ({{ $libro->socio->email }})<br>
<a href="{{route('prestamo', $libro->socio->id)}}">Historial de préstamos del libro </a><br>

@empty
No tiene historial este libro
@endforelse 
@endsection