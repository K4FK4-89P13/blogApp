@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>Crear Curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label for="">Nombre: 
            <input type="text" class="border-solid" name="name" value="{{old('name')}}">
        </label><br>
        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <label for="">Descripción: 
            <textarea class="border-solid" name="description" rows="5">{{old('description')}}</textarea>
        </label><br>
        @error('descripcion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <label for="">Categría: 
            <input type="text" class="border-solid" name="categoria" value="{{old('categoria')}}">
        </label><br>
        @error('categoria')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <button type="submit">Crear Curso</button>
    </form>
@endsection
