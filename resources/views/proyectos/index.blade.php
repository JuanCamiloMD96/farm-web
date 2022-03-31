@extends('layouts.dashboard')
@section('titulo','Ver proyectos')

@section('content')

        <div class="container p-5">
            <h1>Proyectos</h1>
            <hr>
            <button class="btn btn-success" ><a href="{{route('proyecto.create')}}" style="color: black">crear proyecto</a></button>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Identificación</th>
                    <th scope="col">Nombre Proyecto</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{$proyecto->id}}</td>
                        <td>{{$proyecto->name}}</td>
                        <td>
                            <a class="btn btn-primary" style="color: black" href="{{route('proyecto.show', $proyecto->id)}}">Ver</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



@endsection
