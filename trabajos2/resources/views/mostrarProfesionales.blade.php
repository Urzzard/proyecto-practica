@extends('layout')
@section("primero")

<style>
    .profes{
        background: #6A9EFF;
        border-radius: 20px;
        margin: 20px 20px 40px 20px;
        padding: 20px 0px 20px 40px;
    }
    .profes a{
        font-size: 30px;
        text-decoration: none;
        font-weight: bold;
        color: black;
    }

    .profes p{
        font-size: 14px;
        margin: 0px;
    }
    .contenedor-profe{
        min-height: 900px;
    }
</style>
    <div class="contenedor-profe container">
    @foreach ($verprofesional as $profesional)
    
    <hgroup class="profes">
        <a href="">{{$profesional["nombrec_usuario"]}}</a>
        <h5>{{$profesional["usuario"]}}</h5>
        <p>Correo: {{$profesional["correo_usuario"]}}</p>
        <p>Telf: {{$profesional["telefono"]}}</p>
        <p>Edad: {{$profesional["edad"]}}</p>
        <p>{{$profesional["descripcion_profesional"]}}</p>
    </hgroup>
    @endforeach
    </div>
@endsection