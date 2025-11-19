@extends('layouts.master')

@section('content')

    <div class="row m-4">

        <div class="col-sm-4">


            <img src="/images/mp-logo.png" style="height:200px" />

        </div>
        <div class="col-sm-8">

            <h3><strong>Nombre: </strong>{{ $proyecto['nombre'] }}</h3>
            <h4><strong>Dominio: </strong>
                <a href="http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}">
                    http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}
                </a>
            </h4>
            <h4>Metadatos
                @foreach ($proyecto['metadatos'] as $i => $dato)
                    <li>{{ $i }}: {{ $dato }}</li>
                @endforeach
            </h4>
            <p>
                @if ($proyecto['metadatos']['calificacion'] >= 5)
                    aprobado
                    <br>
                    <button style="background-color: red" type="button" id="suspender">Suspender proyecto</button>
                @endif
                @if ($proyecto['metadatos']['calificacion'] < 5)
                    suspenso
                    <br>
                    <button style="background-color: blue" type="button" id="aprobar">Aprobar proyecto</button>
                @endif
            </p>
            <ul class="actions">
                <li><a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getEdit'],['id' => $id])}}"
                        class="button alt">Editar proyecto</a></li>

                <li><a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getIndex']) }}"
                        class="button alt">volver al inicio</a></li>
            </ul>

        </div>
    </div>
@stop
