@extends('layouts.template_01')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Lista de Proyectos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
               <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto->idProyecto }}</td>
                <td>{{ $proyecto->nombreProyecto }}</td>
                <td>{{ $proyecto->descripcionProyecto }}</td>
                <td>
                    <a href="{{ route('proyectos.show', $proyecto->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este proyecto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection