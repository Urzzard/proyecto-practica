@extends("layout")
@section("torax")
<table>
    
    <form method="post" action="/ingresar-contra">
        @csrf
    
        USUARIO <br>
        <input type="text" name="usu"/><br>
        @error('usuario')
            <span style="color: red">{{$message}}</span>
        @enderror
        <br>CONTRASEÑA<br>
        <input type="text" name="pass"/><br>
        @error('contraseña_usuario')
            <span style="color: red">{{$message}}</span>
        @enderror
        <br>NOMBRE COMPLETO<br>
        <input type="text" name="nom"/><br>
        @error('nombrec_usuario')
            <span style="color: red">{{$message}}</span>
        @enderror
        <br>CORREO<br>
        <input type="text" name="ema"/><br>
        @error('correo_usuario')
            <span style="color: red">{{$message}}</span>
        @enderror
    
    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>
@endsection