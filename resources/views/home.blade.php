@extends('dopetrope.master')


@section('menu')
    @parent
    <p>¡Hola {{ $nombre ?? 'colega' }}!</p>
@endsection


@section('content')
    <p>Este apartado aparecerá en la sección "content".</p>
    <ol>
        @if (count($users) === 1)
            <li>Solo hay un usuario!</li>
        @elseif (count($users) > 1)
            <li>Hay muchos usuarios</li>
            @include('users.userList', ['users' => $users])
        @else
            <li>No hay ningún usuario :(</li>
        @endif
    </ol>
@endsection
