<table>
    <tr>
        <th>Categoria</th>
    </tr>
    <form method="post" action="/ingresar-cat">
        @csrf
    <tr>
        <th><input type="text" name="cat"/></th>
    </tr>
    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>