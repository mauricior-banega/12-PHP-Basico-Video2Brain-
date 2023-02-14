<?php

session_start();

//Recupero variables

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");

$resultado = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena' AND nombre='$nombre' AND apellido='$apellido' AND edad='$edad'");

/*OLD
$consulta = "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND nombre='".$nombre."' AND apellido='".$apellido."' AND edad=".$edad."";

$resultado = sqlite_query($conexion,$consulta);
*/


echo"

<table border=1 width=100%>
<tr>
	<td>Usuario</td>
	<td>Contraseña</td>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>Edad</td>
	<td></td>
</tr>

";

$data= array();

//Dentro del while recorremos cada valor de tabla "usuarios".Traeremos al form cada valor de los campos que cada usuario tenia cargado para poder editarlo y guardar posteriormente.
while ($fila = $resultado->fetchArray(1)){

echo"

<tr>
	<form action='actualizarusuario.php' method='post'>
	<td><input type='text' name='usuario' value='".$fila['usuario']."'></td>
	<td><input type='text' name='contrasena' value='".$fila['contrasena']."'></td>
	<td><input type='text' name='nombre' value='".$fila['nombre']."'></td>
	<td><input type='text' name='apellido' value='".$fila['apellido']."'></td>
	<td><input type='text' name='edad' value='".$fila['edad']."'></td>
	<td><input type='submit'</td>
	</form>
</tr>

";

}

echo "</table>";

$_SESSION['usuario'] = $usuario;

//Cerramos la conexion
$conexion->close();
//OLD   sqlite_close($conexion);

?>
