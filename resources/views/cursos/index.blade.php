@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <h1>Lista de Cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li> <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a> </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection
