
@include('sessionstart')
@extends('layouts.app')
@section('content')
<style>

    .fila-nav{
        display: flex;
        justify-content: space-between;
        padding: 20px 10px 10px 10px;
        box-shadow: 1px 3px 0px #CFD7E8;
    }

    .fila-nav input{
        width: 30%;
    }

    .fila-nav a{
        background: #6A9EFF;
        padding: 10px 15px 10px 15px;
        width: 20%;
        border-radius: 10px;
        color: black;
    }

    .principal{
        min-height: 750px;
    }

    .foot{
        background: #56B0E8;
        padding: 10px;
        color: white;
    }
    
</style>
        <div class="fila-nav container-xl">
            <p></p>
            <input type="text" name="busqueda" placeholder="&#xf002 Search" class="">
            <div>
                <a href="verperfil" class=" text-center">VER PERFIL</a>
                <a href="/mostrar-cat" class=" text-center">VER CATEGORIAS</a>
                <a href="/mostrar-profe" class=" text-center">VER PROFESIONALES</a>
            </div>
        </div>

    <div class="principal container">
        <section>
            @yield('principal')
        </section>
    </div>
    <div class="foot container-xl text-center">
        © Empresa Internacional <br>
        Huánuco - Perú 2021<br>
    </div>
@endsection
