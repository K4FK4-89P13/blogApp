@extends('layouts.plantilla')

@section('title', 'Curso | ' . $curso->name)

@section('content')
    <a href="{{route('cursos.index')}}"><- Volver a Cursos</a><br>
    <a href="{{route('cursos.edit', $curso->id)}}">Editar Curso</a>
    
    <h2 class="text-xl font-bold">{{$curso->name}}</h2>
    <p><b>Categoría: </b> {{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>
    
    <form action="{{route('cursos.destroy', $curso->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar Curso</button>
    </form>
@endsection
