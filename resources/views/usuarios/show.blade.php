@extends('layouts.dashboard')
@section('titulo','Listar Proyectos')

@section('content')

<div class="container p-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Nombre : <strong>{{$usuarios->name}}</strong> </h5>

        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Tipo de cargo: <strong>{{$usuarios->tcargo}}</strong></li>
        </ul>
        <div class="card-body">
          <button class="btn btn-warning"><a href="{{route('usuario.edit', $usuarios)}}" style="color:black" class="card-link">Editar</a></button>
          <button class="btn btn-info" ><a href="{{route('usuario.index')}}" style="color:black" class="card-link ">Volver</a></button>
            <br><br>
          <form action="{{route('usuario.delete', $usuarios)}}" method="POST">
            @csrf
            @method('delete')
                <button type="submit" class="btn btn-danger " style="color:black">Eliminar</button>
            </form>

        </div>
      </div>
    </div>

@endsection
