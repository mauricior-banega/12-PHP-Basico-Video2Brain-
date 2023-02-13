<?php

session_start();

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");
//OLD   $conexion = sqlite_open('favoritos.db');

$usuarioantiguo = $_SESSION['usuario'];

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$tituloantiguo = $_SESSION['titulo']; //Explicacion sobre el uso de esto en formactualizar.php donde aplica misma lógica.

$resultado = $conexion->query("UPDATE usuarios SET usuario='$usuario', contrasena='$contrasena', nombre='$nombre', apellido='$apellido', edad='$edad' WHERE usuario='$usuarioantiguo'");

/*OLD
$consulta = "UPDATE usuarios SET usuario='".$usuario."', contrasena='".$contrasena."', nombre='".$nombre."', apellido='".$apellido."', edad='".$edad."' WHERE usuario='".$usuarioantiguo."'";

$resultado = sqlite_query($conexion, $consulta);
*/


//Cerramos la conexion
$conexion->close();
//OLD   sqlite_close($conexion);

echo'
<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=gestionusuarios.php">
	</head>
</html>
';

?>
