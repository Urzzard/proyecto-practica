@extends("layout")
@section("torax")

<table border="2px">
    <tr>
        <th>ID Categoria</th>
        <th>Categoria</th>
    </tr>
    @foreach ($vercategoria as $categoria)
    <tr>
        
        <th>{{$categoria["id_categoria"]}}</th>
        <th>{{$categoria["nombre_categoria"]}}</th>
        
    </tr>
    @endforeach
</table>

@endsection