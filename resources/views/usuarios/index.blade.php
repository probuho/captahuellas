@extends('layouts.admin')

@section('content')
    <div class="content">

        <h1>Trabajadores...</h1>

        @foreach ($usuarios as $usuario)
            <h1>{{$usuario->id}}</h1>
            <h1>{{$usuario->primer_nombre}}</h1>
            <h1>{{$usuario->primer_apellido}}</h1>
            <h1>{{$usuario->telefono}}</h1>
        @endforeach

    </div>
@endsection
