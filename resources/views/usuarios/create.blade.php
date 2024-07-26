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
                    <form action="{{ url('usuario')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="card-body" style="...">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="p00">P00</label> <b style="color: red">*</b>
                                            <input type="number" name="p00" class="form-control" id="id" maxlength="6" required>
                                            <small>Coloque 6 caracteres numericos</small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="primer_nombre">Primer nombre</label> <b style="color: red">*</b>
                                            <input type="text" name="primer_nombre" class="form-control" id="primer_nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="segundo_nombre">Segundo Nombre</label>
                                            <input type="text" name="segundo_nombre" class="form-control" id="segundo_nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="primer_apellido">Primer Apellido</label> <b style="color: red">*</b>
                                            <input type="text" name="primer_apellido" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="segundo_apellido">Segundo Apellido</label>
                                            <input type="text" name="segundo_apellido" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="direccion">Dirección</label> <b style="color: red">*</b>
                                            <input type="text" name="direccion" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="telefono">Telefono</label> <b style="color: red">*</b>
                                            <input type="tel" name="telefono" class="form-control" required>
                                            <small>Ejemplo: 416XXXXXXX</small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="correo">Correo</label>
                                            <input type="email" name="correo" class="form-control">
                                            <small>Campo opcional</small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="correo_corporativo">Correo laboral</label> <b style="color: red">*</b>
                                            <input type="email" name="correo_corporativo" class="form-control">
                                            <small>Ejemplo: usuario@cantv.com.ve o usuario.ejemplo@movilnet.com.ve</small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="huella_dactilar">Huella dactilar</label>
                                            <input id="huella_dactilar" type="file" name="huella_dactilar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <input id="foto" type="file" name="foto" class="form-control" onchange="previewImage(event)">
                                            <img id="preview" style="margin-top: 10px; max-width: 200px;">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fecha_nac">Fecha de Nacimiento</label>
                                            <input type="date" name="fecha_nac" class="form-control">
                                        </div>
                                    </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()

<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
