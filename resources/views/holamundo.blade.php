@extends('layouts.plantilla')

@section('title','Crear Curso')
    
@section('content')
    <h1>Creación de Cursos</h1>
    <form action="{{route('cursos.store')}}" method="post">

        @csrf

        <label for="">
            Nombre: <br>
            <input type="text" name="name">
        </label><br>

         <label for=""><br>
            Descripción: <br>
            <textarea  name="descripcion" rows="5"></textarea>
         </label>

         <label for=""><br>
            Categoria: <br>
            <input type="text" name="categoria">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form><br>

    <a href="{{route('cursos.index')}}">Volver a Cursos</a>
@endsection
