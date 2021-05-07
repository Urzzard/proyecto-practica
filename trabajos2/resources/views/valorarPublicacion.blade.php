@extends("layout")
@section("torax")
  
<table>
    
    <form method="post" action="/valorar-publi">
        @csrf
        PUNTAJE<br>
        <input type="number" name="vpp"/><br>
        @error('puntaje')
            <span style="color: red">{{$message}}</span>
        @enderror

        <br>ID PUBLICACION<br>
        <input type="number" name="vpip"/><br>
        @error('id_publi')
            <span style="color: red">{{$message}}</span>
        @enderror

        <br>ID CONTRATADOR<br>
        <input type="number" name="vpic"/><br>
        @error('id_contra')
            <span style="color: red">{{$message}}</span>
        @enderror

    
    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>

@endsection