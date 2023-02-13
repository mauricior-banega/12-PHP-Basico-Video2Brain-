<?php
/*
Explico lo que realiza "eliminarusuario.php"
-Lo que realiza es justamente elliminar los usuarios cargados en la tabla. Lo realiza al tocar en Eliminar (enlace).

*/
session_start();

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];


$resultado = $conexion->query("DELETE FROM usuarios WHERE  usuario='$usuario' AND contrasena='$contrasena' AND nombre='$nombre' AND apellido='$apellido' AND edad='$edad'");

/*OLD
$consulta = "DELETE FROM usuarios WHERE  usuario='".$usuario."' AND contrasena='".$contrasena."' AND nombre='".$nombre."' AND apellido='".$apellido."' AND edad='".$edad."'";

$resultado = sqlite_query($conexion,$consulta);
*/

$conexion->close();

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=gestionusuarios.php">
	</head>
</html>

';

?>
