@extends('layout') <!-- Para agregar la plantilla  --> 

@section('title', 'Portafolio')

@section('content')  <!-- Seccion a insertar en la plantilla -->
    <h1>Portafolio</h1>
    
    <ul>
     <!--   @foreach($portafolio as $portafolioItem)
            <li> {{ $portafolioItem['title'] }} </li>
        @endforeach
     -->

        @forelse($portafolio as $portafolioItem)
            <li> {{ $portafolioItem['title'] }} </li>
        @empty
            <li> No hay proyectos para mostrar </li>
        @endforelse

    </ul>
@endsection