@extends('layouts.plantilla')

@section('title','Formulario de Contacto')
    
@section('content')
    <h1>Deajanos un Mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">

            @csrf

            <label for="">Nombre:
                <br>
                <input type="text" name="name">
            </label>
            <br>
            @error('name')
                 {{$message}}
            @enderror

             <label for="">
                 Correo:
                <br>
                <input type="text" name="correo">
            </label>
            <br>
            @error('correo')
                 {{$message}}
            @enderror

             <label for="">
                 Mensaje:
                <br>
                 <textarea name="mensaje" id="" cols="30" rows="4"></textarea>
            </label>
            <br>
            
            @error('mensaje')
                 {{$message}}
            @enderror
            <br>

            <button type="submit">Enviar</button>
       

    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif

@endsection
