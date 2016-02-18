@extends('examples.layout')

@section('content')
<h1>Ejemplo de Uso de vistas</h1>
<p>
    @if(isset($user))
        Bienvenido {{ $user }}
    @else
        Bienvenido Anónimo
    @endif
</p>
@endsection

@section('title')
    Curso de Laravel 5 en DWES
@endsection