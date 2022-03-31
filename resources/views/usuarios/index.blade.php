@extends('layouts.dashboard')
@section('titulo','Ver proyectos')

@section('content')
<div class="container p-5">
    <h1>Usuarios</h1>
    <hr>
    <button class="btn btn-success" ><a href="{{route('usuario.create')}}" style="color: black">crear usuario</a></button>
    <hr>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Identificación</th>
            <th scope="col">Nombre del usuario</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>
                    <a class="btn btn-primary" style="color: black" href="{{route('usuario.show', $usuario->id)}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
