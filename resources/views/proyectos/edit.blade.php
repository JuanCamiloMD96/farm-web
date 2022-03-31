@extends('layouts.dashboard')
@section('titulo','Modificar proyectos')

@section('content')
<h1 style="display:flex;justify-content: center ">Modificar proyectos</h1>
<br>

<div style="display:flex;justify-content: center">

<form action="{{route('proyecto.update', $proyectos)}}" method="POST">

    @csrf
    @method('put')
    <div class="form-group">
    <label for="">
        Nombre:
    <input type="text" class="form-control" name="name" value="{{old('name', $proyectos->name)}}">
    </label>
    </div>
    @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <div class="form-group">
    <label for="">
        Distancia de siembra:
            <input type="text" class="form-control" name="distancia_de_siembra" value="{{old('distancia_de_siembra', $proyectos->distancia_de_siembra)}}" >
    </label>
    </div>
    @error('distancia_de_siembra')
    <br>
    <small>*{{$message}}</small>
    <br>
     @enderror

    <br>
    <div class="form-group">
    <label for="">
        Requerimientos climaticos:
            <input type="text" class="form-control" name="requerimientos_climaticos" value="{{old('requerimientos_climaticos', $proyectos->requerimientos_climaticos)}}">
    </label>
     </div>
    @error('requerimientos_climaticos')
    <br>
    <small>*{{$message}}</small>
    <br>
     @enderror

    <br>
    <div class="form-group">
    <label for="">
        Edaficos del proyecto:
            <input type="text" class="form-control" name="edaficos_del_proyecto" value="{{old('edaficos_del_proyecto', $proyectos->edaficos_del_proyecto)}}">
    </label>
    </div>
    @error('edaficos_del_proyecto')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
        <br>
    <div class="form-group">
    <label for="">
        Precipitacion necesaria:
            <input type="text" name="precipitacion_necesaria" class="form-control"  value="{{old('precipitacion_necesaria', $proyectos->precipitacion_necesaria)}}">
    </label>
     </div>
    @error('precipitacion_necesaria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <button type="submit"> Modificar proyecto</button>



</form>
</div>

@endsection
