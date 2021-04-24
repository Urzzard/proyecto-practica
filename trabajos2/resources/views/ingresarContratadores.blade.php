<table>
    <tr>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Nombre Usuario</th>
        <th>Correo</th>
    </tr>
    <form method="post" action="/ingresar-contra">
        @csrf
    <tr>
        <th><input type="text" name="usu"/></th>
        <th><input type="text" name="pass"/></th>
        <th><input type="text" name="nom"/></th>
        <th><input type="text" name="ema"/></th>
    </tr>
    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>