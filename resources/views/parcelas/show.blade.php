@extends('layouts.dashboard')
@section('titulo','Listar Parcelas')

@section('content')

<div class="container p-5">
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Nombre : <strong>{{$parcelas->name}}</strong></h5>

    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Tamaño Parcela: {{$parcelas->tamaño_de_parcela}}</li>
        <li class="list-group-item">Terreno: {{$parcelas->tipo_de_terreno}}</li>
        <li class="list-group-item">Precipitación: {{$parcelas->precipitacion_de_la_parcela}}</li>
        <li class="list-group-item">PH: {{$parcelas->hp_de_la_parcela}}</li>
    </ul>
    <div class="card-body">
        <button class="btn btn-warning"><a href="{{route('parcela.edit', $parcelas)}}" style="color:black" class="card-link">Editar</a></button>
        <button class="btn btn-info" ><a href="{{route('parcela.index')}}" style="color:black" class="card-link ">Volver</a></button>
        <br><br>
      <form action="{{route('parcela.delete', $parcelas)}}" method="POST">
        @csrf
        @method('delete')
            <button type="submit" class="btn btn-danger " style="color:black">Eliminar</button>
        </form>

    </div>
  </div>
</div>


@endsection
