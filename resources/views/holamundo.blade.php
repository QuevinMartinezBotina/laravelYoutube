@extends('layouts.plantilla')

@section('title','Crear Curso')
    
@section('content')
    <h1>Creación de Cursos</h1>
    <form action="{{route('cursos.store')}}" method="post">

        @csrf

        <label for="">
            Nombre: <br>
            <input type="text" name="name"  value="{{old('name')}}">
        </label>
        @error('name')
        <br>
            *{{$message}}
        @enderror
        <br>

         <label for=""><br>
            Descripción:<br>
            <textarea  name="descripcion" rows="5">{{old('descripcion')}}</textarea>
         </label>
           @error('descripcion')
        <br>
            *{{$message}}
        @enderror
        <br>

         <label for=""><br>
            Categoria: <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
            @error('categoria')
        <br>
            *{{$message}}
        @enderror
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form><br>

    <a href="{{route('cursos.index')}}">Volver a Cursos</a>
@endsection
