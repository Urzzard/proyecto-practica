@extends('bienvenida')
@section("principal")

<div class="tablas container">
    <table class="table table-success table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID Contratador</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nombre Completo</th>
                <th>Correo</th>
                
            </tr>
        </thead>
        @foreach ($vercontratador as $contratador)
        <tr>
            
            <th>{{$contratador["id"]}}</th>
            <th>{{$contratador["usuario"]}}</th>
            <th>{{$contratador["contraseña_usuario"]}}</th>
            <th>{{$contratador["nombrec_usuario"]}}</th>
            <th>{{$contratador["correo_usuario"]}}</th>
            
        </tr>
        @endforeach
    </table>
</div>
@endsection