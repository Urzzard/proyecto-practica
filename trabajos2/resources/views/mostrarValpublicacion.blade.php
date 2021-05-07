@extends("layout")
@section("torax")

<table border="1">
    <tr>
        <th>ID Valoracion</th>
        <th>Puntaje</th>
        <th>ID Publicacion</th>
        <th>ID Contratador</th>
        
    </tr>
    @foreach ($vervalpubli as $valpubli)
    <tr>
        
        <th>{{$valpubli["id_val_publi"]}}</th>
        <th>{{$valpubli["puntaje"]}}</th>
        <th>{{$valpubli["id_publi"]}}</th>
        <th>{{$valpubli["id_contra"]}}</th>
        
    </tr>
    @endforeach
</table>

@endsection