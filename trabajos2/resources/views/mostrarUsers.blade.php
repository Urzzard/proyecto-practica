@extends('home')
@section('principal')


<style>
    .perfil{
        background: #CFD7E8;
        margin: 30px 0px 0px 0px;
        border-radius: 20px;
        padding: 20px;
    }
</style>

    @foreach ($verperfil as $usuario)
        <div class="perfil container">
            <div>
                <hgroup>
                    <h1>{{$usuario["name"]}}</h1>
                    <p>E-mail: {{$usuario["email"]}}</p>
                    <p>Tipo: {{$usuario["nombre_tipo"]}}</p>
                </hgroup>
            </div>
        </div>
    @endforeach


@endsection