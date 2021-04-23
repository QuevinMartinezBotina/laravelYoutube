@extends('layouts.plantilla')

@section('title','Editar Curso')
    
@section('content')
    <h1>Edición de Cursos</h1>
    <form action="{{route('cursos.update',$curso)}}" method="post">
        
        @csrf
        
        @method('put')

        <label for="">
            Nombre: <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>
        @error('name')
            <br>
            *{{$message}}
        @enderror
        
        <label for=""><br>
            Descripción: <br>
            <textarea  name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
            *{{$message}}
        @enderror

        <label for=""><br>
            Categoria: <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            *{{$message}}
        @enderror

        <br>
        
        <button type="submit">Actualizar Formulario</button>
    </form>
    <br>
    <a href="{{route('cursos.index')}}">Volver a Cursos</a>
@endsection
