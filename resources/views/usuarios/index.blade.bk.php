@extends('layouts.admin')

@section('content')
<div class="content" style="margin-left: 20px">
    <h1>Trabajadores...</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Usuarios registrados en la aplicación</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nro</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Gerencia General</th>
                        <th>Fecha de Ingreso</th>
                        <th>Gestión</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->primer_nombre }}</td>
                        <td>{{ $usuario->primer_apellido }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->gerencia_general }}</td>
                        <td>{{ $usuario->fecha_ingreso }}</td>
                        <td>
                            <!-- Aquí puedes agregar botones o acciones para gestionar cada usuario -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection