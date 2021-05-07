@extends("layout")
@section("torax")

<table border="1">
    <tr>
        <th>ID Contratador</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Nombre Completo</th>
        <th>Correo</th>
        
    </tr>
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

@endsection