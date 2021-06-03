@extends('layout')
@section('primero')
    
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

            .corpo{
                background: #a9d8f5;
                margin: 50px 0px 0px 0px;
            }
            .cont1{
                margin: 0px 0px 150px 0px;
                padding: 20px;
            }
            .cont2{
                padding: 0px 0px 0px 50px;
            }
            .cont3{
                padding: 0px 0px 20px 50px;
            }

            .caja1, .caja2, .caja3{
                background: #a9d8f5;
                margin: 10px;
                padding: 10px;
            }

            .nav-bienve{
                margin: 20px 0px 0px 0px;
            }

            .nav-bienve a{
                background: #6A9EFF;
                padding: 10px;
                text-decoration: none;
                border-radius: 5px; 
                color: white;
            }

            .tablas{
                background: white
            }

        </style>

        <div class="contenedor-prin container-xl">
            <div class="navegador row">
                <div class="logo-in col">
                    <a href="/bienve" class="display-6">APPSERVICES</a>
                    <input type="text" class="">
                </div>
                <div class="col">
                    <p class="col text-center">¿Tienes una cuenta registrada?</p>
                    <div class="nav-bienve col text-center">
                        <a href="/inicio">INICIAR SESION</a>
                        <a href="/inicio">REGISTRARSE</a>
                    </div>
                    
                </div>
            </div>

            <div class="corpo container">
                <p class="cont1 row display-2">¿Necesitas ayuda en tu negocio?</p>
                <p class="cont2 row display-6">Profesionales talentosos en un solo lugar!!!</p>
                <p class="cont3 row display-6">Encuentra a la personas que necesitas para impulsar tu negocio</p>
            </div>

            <div class="caja-multi row text-center">
                <div class="caja1 col">
                    <a href="" class="caja1">PROGRAMACION</a>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae fugiat maxime quidem amet error. Eos adipisci ab accusamus. Quas debitis, sunt commodi dolores illo autem nisi iste! Quaerat, iusto vel.</p>
                </div>
                <div class="caja2 col">
                    <a href="" class="caja2">DISEÑO</a>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae fugiat maxime quidem amet error. Eos adipisci ab accusamus. Quas debitis, sunt commodi dolores illo autem nisi iste! Quaerat, iusto vel.</p>
                </div>
                <div class="caja3 col">
                    <a href="" class="caja3">MARKETING</a>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae fugiat maxime quidem amet error. Eos adipisci ab accusamus. Quas debitis, sunt commodi dolores illo autem nisi iste! Quaerat, iusto vel.</p>
                </div>
            </div>

            <div>
                <a href="/mostrar-profe">Ver Profesionales</a>
                <a href="/ingreso-profe">Agregar Profesionales</a>
            </div>

            <br>
            <nav>
                <a href="/mostrar-cat">Ver Categorias</a>
                <a href="/ingreso-cat">Agregar Categorias</a>
            </nav>
            <br>
            <nav>
                <a href="/mostrar-contra">Ver Contratadores</a>
                <a href="/ingreso-contra">Agregar Contratadores</a>
            </nav>
            <br>
            <nav>
                <a href="/mostrar-publi">Ver Publicacion</a>
                <a href="/realizo-publi">Agregar Publicacion</a>
            </nav>
            <br>
            <nav>
                <a href="/mostrar-valpubli">Ver Valoracion de Publicacion</a>
                <a href="/valoro-publi">Agregar Valoracion de Publicacion</a>
            </nav>
            <br>
            <nav>
                <a href="/mostrar-valpro">Ver Valoracion de Profesional</a>
                <a href="/valoro-pro">Agregar Valoracion de Profesional</a>
            </nav>    
            <br>
            <section>
                @yield('principal')
            </section>
        </div>
@endsection