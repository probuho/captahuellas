@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3" style="margin-left: 20px">
        <h1>Agregar nuevo...</h1>
    </div>
    <div class="content" style="margin-left: 20px">
        <div class="row">
            <div class="col-md-11">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Agregar nuevo trabajador</b></h3>
                    </div>
                    <form action="{{ url('usuario') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="card-body" style="...">
                                <div class="row">
                                    {{-- P00 --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="p00">P00</label><b>*</b>
                                            <input type="number" name="p00" class="form-control" id="p00"
                                                maxlength="6" pattern="[0-9]*" required>
                                            <small>Coloque 6 caracteres numericos</small>
                                        </div>
                                    </div>
                                    {{-- Primer nombre --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="primer_nombre">Primer nombre</label> <b>*</b>
                                            <input type="text" name="primer_nombre" class="form-control"
                                                id="primer_nombre">
                                        </div>
                                    </div>
                                    {{-- Segundo Nombre --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="segundo_nombre">Segundo Nombre</label>
                                            <input type="text" name="segundo_nombre" class="form-control"
                                                id="segundo_nombre">
                                        </div>
                                    </div>
                                    {{-- Primer apellido --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="primer_apellido">Primer Apellido</label><b>*</b>
                                            <input id="primer_apellido" name="primer_apellido" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    {{-- Segundo apellido --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="segundo_apellido">Segundo Apellido</label>
                                            <input id="segundo_apellido" name="segundo_apellido" type="text" class="form-control">
                                        </div>
                                    </div>
                                    {{-- Direccion --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="direccion">Dirección</label><b>*</b>
                                            <input id="direccion" name="direccion" type="text" class="form-control" required>
                                            <small>Direccion corta</small>
                                        </div>
                                    </div>
                                    {{-- Telefono --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="telefono">Telefono</label><b>*</b>
                                            <input id="telefono" name="telefono" type="tel" class="form-control" required>
                                            <small>Ejemplo: 416XXXXXXX</small>
                                        </div>
                                    </div>
                                    {{-- Correo personal --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="email">Correo</label>
                                            <input id="email" name="email" type="email" class="form-control">
                                            <small>opcional</small>
                                        </div>
                                    </div>
                                    {{-- Correo Laboral --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="correo_corporativo">Correo laboral</label><b>*</b>
                                            <input id="correo_corporativo" name="correo_corporativo" type="email" class="form-control">
                                            <small>Ejemplo: usuario@cantv.com.ve o usuario.ejemplo@movilnet.com.ve</small>
                                        </div>
                                    </div>
                                    {{-- Campo foto --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="foto">foto</label>
                                            <input id="foto" type="file" name="foto" class="form-control"
                                                accept="image/*">
                                            <center><output id="foto">
                                                <div id="previewContainer">
                                                    <script>
                                                        document.addEventListener('DOMContentLoaded', function() {
                                                            var foto = document.getElementById('foto');
                                                            var previewContainer = document.getElementById('previewContainer');
                                                            foto.addEventListener('change', function(e) {
                                                                var file = e.target.files[0];
                                                                if (file) {
                                                                    var reader = new FileReader();
                                                                    reader.onload = function(e) {
                                                                        var img = document.createElement('img');
                                                                        img.src = e.target.result;
                                                                        // Ajusta el tamaño de la imagen
                                                                        img.style.maxWidth = '100px'; // Ajusta el ancho máximo según tus necesidades
                                                                        img.style.maxHeight = '100px'; // Ajusta el alto máximo según tus necesidades
    
                                                                        // Limpia el contenedor de vista previa antes de añadir la nueva imagen
                                                                        previewContainer.innerHTML = '';
                                                                        previewContainer.appendChild(img);
                                                                    };
                                                                    reader.readAsDataURL(file);
                                                                }
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </output></center>
                                        </div>
                                    </div>
                                    {{-- Campo fecha ingreso --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fecha_ingreso">Fecha de Ingreso</label>
                                            <input id="fecha_ingreso" type="date" name="fecha_ingreso" class="form-control">
                                        </div>
                                    </div>
                                    {{-- Campo GG --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="gerencia_general">Gerencia General</label>
                                            <select name="gerencia_general" id="gerencia_general" class="form-control">
                                                <option value="GGSTI">Gerencia General de Soporte TI</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <a href="" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            // Función para validar campos de texto
                            function validarTexto(event) {
                                var input = event.target;
                                var regex = /^[a-zA-Z]+$/; // Expresión regular para permitir solo letras y espacios
                                if (!regex.test(input.value)) {
                                    input.value = input.value.replace(/[^a-zA-Z\s]+/, ''); // Elimina caracteres no válidos
                                }
                            }

                            // Agrega el evento 'input' a los campos de texto
                            var camposTexto = document.querySelectorAll('input[type="text"]');
                            camposTexto.forEach(function(campo) {
                                campo.addEventListener('input', validarTexto);
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
