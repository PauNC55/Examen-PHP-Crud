@extends('layout')

@section('contenido')
 <h1>{{ $libro->titulo}}</h1>
Autor: {{ $libro->autor }}
<br>Editorial: {{$libro->editorial}}
<br>
<img src="{{$libro->imagen}}" >
@endsection