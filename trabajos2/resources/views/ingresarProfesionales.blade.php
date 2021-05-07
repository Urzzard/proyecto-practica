@extends("layout")
@section("torax")

<table>
    
    <form method="post" action="/ingresar-profe">
        @csrf
        USUARIO<br>
        <input type="text" name="pusu"/><br>
        @error('usuario')
            <span style="color: red">{{$message}}</span>
        @enderror

        <br>CONTRASEÑA<br>
        <input type="text" name="ppas"/><br>
        @error('contraseña_usuario')
        <span style="color: red">{{$message}}</span>
        @enderror

        <br>NOMBRE COMPLETO<br>
        <input type="text" name="pnom"/><br>
        @error('nombrec_usuario')
        <span style="color: red">{{$message}}</span>
        @enderror

        <br>CORREO<br>
        <input type="text" name="pema"/><br>
        @error('correo_usuario')
        <span style="color: red">{{$message}}</span>
        @enderror

        <br>TELEFONO<br>
        <input type="number" name="ptel"/><br>
        @error('telefono')
        <span style="color: red">{{$message}}</span>
        @enderror

        <br>EDAD<br>
        <input type="number" name="peda"/><br>
        @error('edad')
        <span style="color: red">{{$message}}</span>
        @enderror

        <br>ID CATEGORIA<br>
        <input type="number" name="pcat"/><br>
        @error('id_categoria')
        <span style="color: red">{{$message}}</span>
        @enderror

        <br>DESCRIPCION PROFESIONAL<br>
        <input type="text" name="pdes"/><br>
        @error('descripcion_profesional')
        <span style="color: red">{{$message}}</span>
        @enderror

    
    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>

@endsection