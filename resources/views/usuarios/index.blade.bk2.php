@extends('layouts.admin')
@section('content')
<div class="content" style="margin-left: 20px">
    <h1>Trabajadores...</h1>
    <div class="col-md-12">
        <div class="card bg-primary collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Usuarios registrados en la aplicación</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <div class="col-md-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Primary</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Contenido de la tabla omitido por brevedad -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                        <!-- Contenido del pie de tabla omitido por brevedad -->
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <table border="1">
                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>P00</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Gerencia General</th>
                                        <th>fecha_ingreso</th>
                                        <th>Gestion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $contador = 0; ?>
                                    @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td><?php echo $contador = $contador + 1; ?></td>
                                        <td>{{ $usuario->id }}</td>
                                        <td>{{ $usuario->primer_nombre }}</td>
                                        <td>{{ $usuario->primer_apellido }}</td>
                                        <td>{{ $usuario->telefono }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>{{ $usuario->gerencia_general }}</td>
                                        <td>{{ $usuario->fecha_ingreso }}</td>
                                        <td>{{ null }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
