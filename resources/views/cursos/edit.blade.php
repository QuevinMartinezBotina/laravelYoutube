@extends('layouts.plantilla')

@section('title','Editar Curso')
    
@section('content')
    <h1>Edición de Cursos</h1>
    <form action="{{route('cursos.update',$curso)}}" method="post">
        
        @csrf
        
        @method('put')

        <label for="">
            Nombre: <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label><br>
        
        <label for=""><br>
            Descripción: <br>
            <textarea  name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>
        
        <label for=""><br>
            Categoria: <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        
        <button type="submit">Actualizar Formulario</button>
    </form>
    <br>
    <a href="{{route('cursos.index')}}">Volver a Cursos</a>
@endsection
