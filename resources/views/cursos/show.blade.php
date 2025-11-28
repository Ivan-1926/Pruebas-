<!-- Heredar el codigo de la plantilla -->
@extends('layouts.plantilla')

<!-- Modificar la seccion del titulo -->
@section('title','Curso' . $curso)

<!-- Personalizar el contenido de la pagina (content) -->
@section('content')
    <h1>Bienvenido al curso: {{$curso}}</h1>
@endsection