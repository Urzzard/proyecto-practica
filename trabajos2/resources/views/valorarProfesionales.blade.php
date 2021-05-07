@extends("layout")
@section("torax")

<table>
    
    <form method="post" action="/valorar-pro">
    @csrf
        PUNTAJE<br>
        <input type="number" name="pun"><br>
        @error('puntaje')
            <span style="color: red">{{$message}}</span>
        @enderror

        <br>OPINION<br>
        <input type="text" name="opi"><br>
        @error('opinion')
            <span style="color: red">{{$message}}</span>
        @enderror

        <br>ID PROFESIONAL<br>
        <input type="number" name="vprip"><br>
        @error('id_pro')
            <span style="color: red">{{$message}}</span>
        @enderror

        <br>ID CONTRATADOR<br>
        <input type="number" name="vpric"><br>
        @error('id_cont')
            <span style="color: red">{{$message}}</span>
        @enderror

    
    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>

@endsection