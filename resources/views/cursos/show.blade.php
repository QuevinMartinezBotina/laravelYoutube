@extends('layouts.plantilla')

@section('title','Curso '.$curso->name)
    
@section('content')
    
    <h1>Bienvenido al curso <strong>{{$curso->name}}</strong> </h1>
    <p>Categoria: {{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>

    <form action="{{route('cursos.destroy',$curso)}}" method="post">
        
        @csrf{{-- token --}}

        @method('delete')
        <br>

        <button type="submit">Eliminar Curso</button>
    </form>
    
@endsection
