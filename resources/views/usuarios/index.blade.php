@extends('layouts.admin')

@section('content')
    <div class="content" style="margin-left: 20px">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Trabajadores...</h1>
            <a href="{{ url('/usuarios/create') }}" class="btn btn-primary">
                <i class="bi bi-file-plus"></i>Agregar nuevo usuario
            </a>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Usuarios registrados en la aplicación</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
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
                @push('scripts')
                    <script>
                        $(function() {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Pagina _START_ a _END_ de _TOTAL_ Usuarios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 usuarios",
                                    "infoFiltered": "(Filtrado de _MAX_ total usuarios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ usuarios registrados",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true,
                                "lengthChange": true,
                                "autoWidth": true,
                                buttons: [{
                                        extend: 'collection',
                                        text: 'Reportes',
                                        orientation: 'landscape',
                                        buttons: [{
                                            text: 'Copiar',
                                            extend: 'copy',
                                        }, {
                                            extend: 'pdf'
                                        }, {
                                            extend: 'csv'
                                        }, {
                                            extend: 'excel'
                                        }, {
                                            text: 'Imprimir',
                                            extend: 'print'
                                        }]
                                    },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                @endpush
            </div>
        </div>
    </div>
@endsection
