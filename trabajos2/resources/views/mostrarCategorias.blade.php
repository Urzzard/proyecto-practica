@extends('home')
@section("principal")

<style>
    .cate{
        margin: 20px;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .cate a{
        background: #56B0E8;
        border-radius: 20px;
        text-decoration: none;
        font-size: 25px;
        color: black;
        margin-bottom: 30px;
        padding: 20px 0px 20px 0px;
        width: 30%;
    }
</style>

    <div class="contenedor-cate container">
        <div class="cate ">
        @foreach ($vercategoria as $categoria)
            <a href="" class=" text-center">{{$categoria["nombre_categoria"]}}</a>
        
        @endforeach
        </div>
    </div>

@endsection