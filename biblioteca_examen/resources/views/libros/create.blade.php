@extends('layout')

@section('contenido')

<form action="{{ route('libros.store') }}" method="POST">
@csrf
<div class="column" >
<div class="form-group" >
<label for="titulo">Título:</label>
<input type="text" class="form-control" name="titulo"id="titulo">
</div>
<div class="form-group">
<label for="editorial">Editorial:</label>
<input type="text" class="form-control" name="editorial"id="editorial">
</div>
<div class="form-group">
<label for="autor">Autor:</label>
<input type="text" class="form-control" name="autor"id="autor">
</div>
<div class="form-group">
<label for="imagen">URL imagen:</label>
<input type="text" class="form-control" name="imagen"id="imagen">
</div>
<div class="form-group">
</div>
<input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
</div>
</form>
@endsection