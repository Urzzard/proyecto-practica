@extends('layout')
@section("primero")
<style>
    .contenedor-prin{
                min-height: 900px;
            }

            .navegador{
                background: #56B0E8;
                padding: 10px 0px 10px 0px;
            }

            .logo-in{
                margin: 20px 0px 0px 0px;
                display: flex;
                justify-content: space-around;
            }

            .logo-in a{
                text-decoration: none;
                color: black;
            }

            .logo-in input{
                height: 35px;
                width: 60%;
                margin: 10px 0px 0px 0px;
            }

            .nav-inicio{
                margin: 20px 0px 0px 0px;
            }

            .nav-inicio a{
                background: #6A9EFF;
                padding: 10px;
                text-decoration: none;
                border-radius: 5px; 
                color: white;
            }
</style>

<div class="contenedor-prin container-xl">
    <div class="navegador row">
        <div class="logo-in col">
            <a href="/inicio" class="display-6">LABURO</a>
            <input type="text" class="">
        </div>
        <div class="col">
            <div class="nav-inicio col text-center">
                <a href="">VER PERFIL</a>
                <a href="/mostrar-cat">VER CATEGORIAS</a>
                <a href="/mostrar-profe">VER PROFESIONALES</a>
                <a href="/">CERRAR SESION</a>
            </div>
        </div>
    </div>
</div>