@extends("layout")
@section("torax")

<table border="1">
    <tr>
        <th>ID Profesional</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Nombre Completo</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Edad</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        
    </tr>
    @foreach ($verprofesional as $profesional)
    <tr>
        
        <th>{{$profesional["id"]}}</th>
        <th>{{$profesional["usuario"]}}</th>
        <th>{{$profesional["contraseña_usuario"]}}</th>
        <th>{{$profesional["nombrec_usuario"]}}</th>
        <th>{{$profesional["correo_usuario"]}}</th>
        <th>{{$profesional["telefono"]}}</th>
        <th>{{$profesional["edad"]}}</th>
        <th>{{$profesional["id_categoria"]}}</th>
        <th>{{$profesional["descripcion_profesional"]}}</th>
        
    </tr>
    @endforeach
</table>

@endsection