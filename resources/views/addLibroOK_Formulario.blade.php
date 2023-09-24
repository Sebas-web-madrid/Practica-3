@extends('app')
@section('title', 'Respuesta Formulario añadir Libro')
@section('content')
    @if ($id > 0)
        <p>El libro se ha añadido correctamente</p>
    @else
        <p>Ha ocurrido un error al insertar el libro</p>
    @endif
@endsection



