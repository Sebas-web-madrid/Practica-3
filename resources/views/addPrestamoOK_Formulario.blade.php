@extends('app')
@section('title', 'Respuesta Formulario añadir Préstamo')
@section('content')
    @if ($id > 0)
        <p>El Préstamo se ha añadido correctamente</p>
    @else
        <p>Ha ocurrido un error al insertar el Préstamo</p>
    @endif
@endsection



