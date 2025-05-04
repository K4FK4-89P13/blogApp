@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label><br>
        @error('name')
            <span>{{$message}}</span>
        @enderror

        <label for="">
            Correo:
            <br>
            <input type="text" name="correo">
        </label><br>
        @error('correo')
            <span>{{$message}}</span>
        @enderror

        <label for="">
            Mensaje:
            <br>
            <Textarea name="mensaje" role="4"></Textarea>
        </label><br>
        @error('mensaje')
            <span>{{$message}}</span>
        @enderror

        <br>
        <button type="submit">Enviar Mensaje</button>
        
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection