@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
    <br><br><br>
    <div class="m-3 d-flex flex-column justify-content-center align-items-center">
        <form action="{{ route('pasteles.destroy', $pastel->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Borrar pastel" />
        </form>
        <a class="btn btn-warning" href="{{route('pasteles.edit', $pastel->id)}}">Modificar</a>
    </div>
    <div class="m-3 d-flex flex-column justify-content-center align-items-center">
        <h1>{{$pastel->nombre}}</h1>
        <div>{{$pastel->sabor}}</div>
        <div><img src="{{$pastel->imagen}}" style="width:500px; height:600px"></img></div>
    </div>
@endsection