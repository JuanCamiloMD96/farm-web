@extends('layouts.dashboard')
@section('titulo','Crear proyectos')

@section('content')
    <h1>Crear proyectos</h1>
    <form action="{{route('proyecto.store')}}" method="POST">

        @csrf

        <label for="">
            Nombre:
        <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Distancia de siembra:
                <input type="text" name="distancia_de_siembra" value="{{old('distancia_de_siembra')}}">
        </label>
        @error('distancia_de_siembra')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="">
            Requerimienos climaticos:
                <input type="text" name="requerimientos_climaticos" value="{{old('requerimientos_climaticos')}}">
        </label>
        @error('requerimientos_climaticos')
        <br>
        <small>*{{$message}}</small>
        <br>
         @enderror
        <br>
        <label for="">
            Edaficos del proyecto:
                <input type="text" name="edaficos_del_proyecto" value="{{old('edaficos_del_proyecto')}}">
        </label>
        @error('edaficos_del_proyecto')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
            <br>
        <label for="">
            Precipitacion necesaria:
                <input type="text" name="precipitacion_necesaria" value="{{old('precipitacion_necesaria')}}">
        </label>
        @error('precipitacion_necesaria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <button type="submit"> Crear proyecto</button>



    </form>
@endsection
