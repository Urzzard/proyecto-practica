<table>
    <tr>
        <th>Puntaje</th>
        <th>Opinion</th>
    </tr>
    <form method="post" action="/ingresar-val">
    @csrf
    <tr><input type="number" name="pun"></tr>
    <tr><input type="text" name="opi"></tr>
    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>