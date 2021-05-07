@extends("layout")
@section("torax")
    


<table border="1">
    <tr>
        <th>ID Publicacion</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>ID Profesional</th>
        
    </tr>
    @foreach ($updatepubli as $publi)
    <form method="post" action="/actualizar-publi">
        @csrf
    <tr>
        
        <th>{{$publi["id_publi"]}}</th>
        <th><input type="text" name="ptp" value="{{$publi["titulo_publi"]}}"/></th>
        <th><input type="text" name="pdp" value="{{$publi["des_publi"]}}"/></th>
        <th><input type="number" name="pip" value="{{$publi["id_profe"]}}"/></th>
        
        
    </tr>
    <td colspan="8"><input type="submit" name="submit" value="Actualizar"/></td>
    </form>
    @endforeach
</table>
@endsection