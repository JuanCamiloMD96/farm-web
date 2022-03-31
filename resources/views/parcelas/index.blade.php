@extends('layouts.dashboard')
@section('titulo','Listar Parcelas')

@section('content')
    <div class="container p-5">
        <h1>Parcelas</h1>
        <hr>
        <button class="btn btn-success"><a href="{{route('parcela.create')}}" style="color: black">crear parcela</a></button>
        <hr>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Identificación</th>
                <th scope="col">Nombre Parcela</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($parcelas as $parcela)
                <tr>
                    <td>{{$parcela->id}}</td>
                    <td>{{$parcela->name}}</td>
                    <td>
                        <a class="btn btn-primary" style="color: black" href="{{route('parcela.show', $parcela->id)}}">Ver</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection
