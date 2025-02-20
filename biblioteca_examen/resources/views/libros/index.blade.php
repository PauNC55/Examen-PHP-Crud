@extends('layout')

@section('contenido')

@forelse ($libros as $libro)
<a href="{{route('libros.show', $libro->id)}}">
    {{ $libro["titulo"] }} ({{ $libro["autor"] }})<br>
</a>

@empty
No se encontraron libros
@endforelse 
@endsection