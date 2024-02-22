@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
    <br><br><br>
    <h1>Crear Pastel</h1>
    <div class="m-3">
        <form action="{{ route('pasteles.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre">
            </div>
            <div class="mb-3">
                <select name="sabor" class="form-select" aria-label="Default select example">
                    <option disabled>Sabores</option>
                    <option value="Vainilla">Vainilla</option>
                    <option value="Chocolate">Chocolate</option>
                    <option value="Cheesecake">Cheesecake</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="text" name="imagen" class="form-control" id="imagen">
                <div id="imagenHelp" class="form-text">Solamente la URL</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection