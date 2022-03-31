@extends('layouts.dashboard')
@section('titulo','Crear Parcelas')

@section('content')


    <h1 style="display:flex;justify-content: center ">Crear una parcela</h1>
<br>
<div style="display:flex;justify-content: center">
<form action="{{route('parcela.store')}}" method="POST">

        @csrf
        <div class="form-group">
        <label for="" >
            Nombre:
        <input type="text" class="form-control" name="name" value="{{old('name')}}">
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
            Tamaño de parcela:
                <input type="text" class="form-control" name="tamaño_de_parcela" value="{{old('tamaño_de_parcela')}}">
        </label>
        </div>
        @error('tamaño_de_parcela')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <div class="form-group">
        <label for="">
            Tipo de terreno:
                <input type="text" class="form-control"  name="tipo_de_terreno" value="{{old('tipo_de_terreno')}}">
        </label>
        </div>
        @error('tipo_de_terreno')
        <br>
        <small>*{{$message}}</small>
        <br>
         @enderror
        <br>
        <div class="form-group">
        <label for="">
            Precipitacion de la parcela:
                <input type="text" class="form-control"  name="precipitacion_de_la_parcela" value="{{old('precipitacion_de_la_parcela')}}">
        </label>
        </div>
        @error('precipitacion_de_la_parcela')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
            <br>
        <div class="form-group">
        <label for="">
            Hp de la parcela:
                <input type="text" class="form-control"  name="hp_de_la_parcela" value="{{old('hp_de_la_parcela')}}">
        </label>
        </div>
        @error('hp_de_la_parcela')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <button type="submit"> Crear Parcela</button>



    </form>

</div>
@endsection





