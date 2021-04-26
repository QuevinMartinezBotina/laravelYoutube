@extends('layouts.plantilla')

@section('title','Cursos')
    
@section('content')
    <h1>Bienvenido a la pagina de cursos</h1><br>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ol>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
                <br>
                {{route('cursos.show', $curso)}}
            </li>
        @endforeach
    </ol>

    {{$cursos->links()}}
@endsection
