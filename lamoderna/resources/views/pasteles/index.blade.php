@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
    <br><br><br>
    <h1>Pasteles</h1>
    <a class="btn btn-success" href="{{route('pasteles.create')}}">Crear</a>
    <div class="m-3">
    <table class="table table-striped-columns">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Sabor</th>
                <th>Acciones</th>
            </tr>
            @foreach($pasteles as $pastel)
                <tr>
                    <td>{{$pastel->id}}</td>
                    <td>{{$pastel->nombre}}</td>
                    <td>{{$pastel->sabor}}</td>
                    <td><a href="{{route('pasteles.show', $pastel->id)}}" class="btn btn-primary">Ver mas</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection