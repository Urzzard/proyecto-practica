@extends("layout")
@section("torax")

<table border="1">
    <tr>
        <th>ID Valoracion</th>
        <th>Puntaje</th>
        <th>Opinion</th>
        <th>ID Profesional</th>
        <th>ID Contratador</th>
        
    </tr>
    @foreach ($vervalpro as $valpro)
    <tr>
        
        <th>{{$valpro["id_valoracion"]}}</th>
        <th>{{$valpro["puntaje"]}}</th>
        <th>{{$valpro["opinion"]}}</th>
        <th>{{$valpro["id_pro"]}}</th>
        <th>{{$valpro["id_cont"]}}</th>
        
    </tr>
    @endforeach
</table>

@endsection