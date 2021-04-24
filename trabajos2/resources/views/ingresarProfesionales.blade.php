<table>
    <tr>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Nombre Usuario</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Edad</th>
        <th>Categoria</th>
        <th>Puntuacion</th>
        <th>Descripcion</th>
    </tr>
    <form method="post" action="/ingresar-profe">
        @csrf
    <tr>
        <th><input type="text" name="pusu"/></th>
        <th><input type="text" name="ppas"/></th>
        <th><input type="text" name="pnom"/></th>
        <th><input type="text" name="pema"/></th>
        <th><input type="number" name="ptel"/></th>
        <th><input type="number" name="peda"/></th>
        <th><input type="number" name="pcat"/></th>
        <th><input type="number" name="ppun"/></th>
        <th><input type="text" name="pdes"/></th>
    </tr>
    <tr><td colspan="5"><input type="submit" name="submit" value="guardar"/></td></tr>
    </form>
</table>