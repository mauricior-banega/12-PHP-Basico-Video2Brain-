<?php

session_start();

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");
//OLD   $conexion = sqlite_open('favoritos.db');

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];

$resultado = $conexion->query("DELETE FROM favoritos WHERE usuario='$usuario' AND contrasena='$contrasena' AND titulo='$titulo' AND direccion='$direccion' AND categoria='$categoria' AND comentario='$comentario' AND valoracion='$valoracion'");

/* OLD -> REEMPLAZO DE CODIGO
$consulta = "DELETE FROM favoritos WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

$resultado = sqlite_query($conexion,$consulta);
*/

//Cerramos sesion
$conexion->close();


//Regreso/Actualizacion: Al tocar en enlace Eliminar, se dirige a eliminarfavorito.php. Alli realiza el DELETE de los campos implicados y al terminar se indica que se regrese a la pagina oroginal automaticamente. Al igual que en crearfavorito.php.
echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php">
	</head>
</html>

';

?>
