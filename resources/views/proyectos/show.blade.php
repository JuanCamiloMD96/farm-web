@extends('layouts.dashboard')
@section('titulo','Listar Proyectos')

@section('content')
    <div class="container p-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Proyecto : <strong>{{$proyectos->name}}</strong> </h5>

            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Distancia de siembra: <strong>{{$proyectos->distancia_de_siembra}}</strong></li>
                <li class="list-group-item">Requerimientos climaticos: <strong>{{$proyectos->requerimientos_climaticos}}</strong></li>
                <li class="list-group-item">Edaficos del proyecto: <strong>{{$proyectos->edaficos_del_proyecto}}</strong></li>
                <li class="list-group-item">Precipitacion necesaria: <strong>{{$proyectos->precipitacion_necesaria}}</strong></li>
            </ul>
            <div class="card-body">
            <button class="btn btn-warning"><a href="{{route('proyecto.edit', $proyectos)}}" style="color:black" class="card-link">Editar</a></button>
            <button class="btn btn-info" ><a href="{{route('proyecto.index')}}" style="color:black" class="card-link ">Volver</a></button>
                <br><br>
            <form action="{{route('proyecto.delete', $proyectos)}}" method="POST">
                @csrf
                @method('delete')
                    <button type="submit" class="btn btn-danger " style="color:black">Eliminar</button>
                </form>

            </div>
        </div>
        </div>




@endsection
