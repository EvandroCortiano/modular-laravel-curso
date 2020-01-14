@extends('curso::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('curso.name') !!}
    </p>

    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->title }} <small>(Orientador: {{ $curso->teacher }})</small> - {{ $curso->description }} <i>Investimento: {{ $curso->price }}</i></li>
        @endforeach
    </ul>
@stop
