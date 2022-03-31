@extends('layouts.dashboard')
@section('titulo','Modificar proyectos')

@section('content')

    <h1 style="display:flex;justify-content: center ">Modificar un usuario</h1>
    <br>

    <div style="display:flex;justify-content: center">

    <form action="{{route('usuario.update', $usuarios)}}" method="POST">

        @csrf
        @method('put')

        <div class="form-group">
        <label for="">
            Nombre:
        <input type="text" class="form-control" name="name" value="{{old('name', $usuarios->name)}}">
        </label>
        </div>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <br>
        <div class="form-group">
        <label for="">
            Tipo de cargo:
                <input type="text" class="form-control" name="tcargo" value="{{old('tcargo', $usuarios->tcargo)}}">
        </label>
        </div>
        @error('tcargo')
        <br>
        <small>*{{$message}}</small>
        <br>
         @enderror

        <br>


        <br>
        <button type="submit"> Modificar usuario</button>



    </form>
    </div>
@endsection
