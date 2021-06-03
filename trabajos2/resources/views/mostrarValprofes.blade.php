@extends('bienvenida')
@section("principal")

<div class="tablas container">
    <table class="table table-success table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID Valoracion</th>
                <th>Puntaje</th>
                <th>Opinion</th>
                <th>ID Profesional</th>
                <th>ID Contratador</th>
                
            </tr>
        </thead>
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
</div>
@endsection