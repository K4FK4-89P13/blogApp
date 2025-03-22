@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>Editar Curso</h1>

    <form action="{{route('cursos.update', $curso->id)}}" method="POST">

        @csrf
        @method('put')

        <label for="">Nombre: 
            <input type="text" class="border-solid" name="name" value="{{old('name', $curso->name)}}">
        </label><br>
        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <label for="">Descripción: 
            <textarea class="border-solid" name="description" rows="5">{{old('description', $curso->description)}}</textarea>
        </label><br>
        @error('descripcion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <label for="">Categría: 
            <input type="text" class="border-solid" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label><br>
        @error('categoria')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <button type="submit">Editar Curso</button>
    </form>
@endsection
