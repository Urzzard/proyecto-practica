@extends("layout")
@section("torax")

<table>
    <form method="post" action="/ingresar-cat">
        @csrf
        
        CATEGORIA<br>
        <input type="text" name="cat"/><br>
        @error('nombre_categoria')
            <span style="color: red">{{$message}}</span>
        @enderror
    
    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>

@endsection