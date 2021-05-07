@extends("layout")
@section("torax")


<table>
    <form method="post" action="/realizar-publi">
        @csrf
        TITULO DE PUBLICACION<br>
        <input type="text" name="ptp"/><br>
        @error('titulo_publi')
            <span style="color: red">{{$message}}</span>
        @enderror
        <br>DESCRIPCION<br>
        <input type="text" name="pdp"/><br>
        @error('des_publi')
            <span style="color: red">{{$message}}</span>
        @enderror
        <br>ID DEL PROFESIONAL<br>
        <input type="number" name="pip"/><br>
        @error('id_profe')
            <span style="color: red">{{$message}}</span>
        @enderror

    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>

@endsection