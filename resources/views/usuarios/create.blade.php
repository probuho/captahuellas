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
                    <form method="post" action="{{url('usuario')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="card-body" style="...">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="p00">P00</label> <b>*</b>
                                            <input type="number" name="p00" class="form-control" id="id" maxlength="6"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="primer_nombre">Primer Nombre</label> <b>*</b>
                                            <input type="text" name="primer_nombre" id="primer_nombre" maxlength="50" required>
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
                                            <label for="primer_apellido">Primer Apellido</label> <b>*</b>
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
                                            <label for="Direccion">Dirección</label>
                                            <input type="text" name="Direccion" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="telefono">Telefono</label> <b>*</b>
                                            <input type="tel" name="telefono" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="correo">Correo</label>
                                            <input type="email" name="correo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="correo_corporativo">Correo laboral</label> <b>*</b>
                                            <input type="email" name="correo_corporativo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="huella_dactilar">Huella dactilar</label>
                                            <input id="file" type="file" name="huella_dactilar" class="form-control">
                                            {{-- <center><output id="list"></output></center><br>
                                            <script>
                                                function archivo(evt) {
                                                    var files = evt.target.files;
                                                    //obtenemos la imagen del campo "file".
                                                    for (var i = 0, f; f = files[i]; i++) {
                                                        //solo admitimos imagenes.
                                                        if (!f.type.match('image.*')) {
                                                            continue;
                                                        }
                                                        var reader = new FileReader();
                                                        reader.onload = (function(theFile) {
                                                            return function(e) {
                                                                //insertamos la imagen
                                                                document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="', e
                                                                    .target.result, '"width="50%" title="', escape(theFile.name), '"/>'
                                                                ].join('');
                                                            };
                                                        })(f);
                                                        reader.readAsDataURL(f);
                                                    }

                                                }
                                                document.getElementById('file').addEventListener('change', archivo, false);
                                            </script> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fecha_ingreso">Fecha de registro</label>
                                            <input type="date" name="fecha_ingreso" class="form-control">
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
    </div>
    </div>
@endsection()
