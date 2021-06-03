@extends('bienvenida')
@section("principal")

<div class="tablas container">
    <table class="table table-success table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID Valoracion</th>
                <th>Puntaje</th>
                <th>ID Publicacion</th>
                <th>ID Contratador</th>
                
            </tr>
        </thead>
        @foreach ($vervalpubli as $valpubli)
        <tr>
            
            <th >{{$valpubli["id_val_publi"]}}</th>
            <th>{{$valpubli["puntaje"]}}</th>
            <th>{{$valpubli["id_publi"]}}</th>
            <th>{{$valpubli["id_contra"]}}</th>
            
        </tr>
        @endforeach
    </table>
</div>
@endsection