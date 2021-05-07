@extends("layout")
@section("torax")
    


<table border="1">
    <tr>
        <th>ID Publicacion</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>ID Profesional</th>
        <th>&nbsp;</th>
        
    </tr>
    @foreach ($verpublicacion as $publicacion)
    <tr>
        
        <th>{{$publicacion["id_publi"]}}</th>
        <th>{{$publicacion["titulo_publi"]}}</th>
        <th>{{$publicacion["des_publi"]}}</th>
        <th>{{$publicacion["id_profe"]}}</th>
        <td><a href="/actualizar-publi/{{$publicacion["id_publi"]}}">actualizar</a></td>
        
    </tr>
    @endforeach
</table>
@endsection