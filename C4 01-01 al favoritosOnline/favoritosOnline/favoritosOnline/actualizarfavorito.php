<?php

/*
Explico lo que realiza "actualizarfavorito.php"
-Lo que realiza es realmente ACTUALIZAR los datos cargados ya habiendose seleccionado el enlace de Actualizar en "formactualizar". Toma el valor de los campos hayan sido estos editados o no y los introduce como valores nuevos en la tabla mediante UPDATE.

*/

session_start();

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");
//OLD   $conexion = sqlite_open('favoritos.db');

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$comentario = $_POST['comentario'];
$valoracion = $_POST['valoracion'];

/* Pudo haber sido con GET segun el video
$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];
*/

$tituloantiguo = $_SESSION['titulo']; //Recuperamos la variable de sesion para poder trabajar con ella. Es decir que UPDATE la use para saber a que pagina de titulo especifico actualizar con los nuevos datos. (Explico en formactualizar.php)

$resultado = $conexion->query("UPDATE favoritos SET titulo='$titulo', direccion='$direccion', categoria='$categoria', comentario='$comentario', valoracion='$valoracion' WHERE titulo='$tituloantiguo'");

/* 1º INTENTO | NO FUNCIONA - PERO NO ACTUIALIZA IR PROBANDO
$resultado = $conexion->query("UPDATE favoritos SET titulo='$titulo' AND direccion='$direccion' AND categoria='$categoria' AND comentario='$comentario' AND valoracion='$valoracion' WHERE titulo='$tituloantiguo'");
*/

/*EJEMPLOS CORRECTOS

$resultado = $conexion->query("SELECT * FROM favoritos WHERE usuario='$usuario' AND contrasena='$contrasena' AND titulo='$titulo' AND direccion='$direccion' AND categoria='$categoria' AND comentario='$comentario' AND valoracion='$valoracion'");

$resultado = $db->query('UPDATE Discos SET Artista="Queen" WHERE Artista="Queeen"');

*/

/* 	OLD
	$consulta = "UPDATE FROM favoritos SET .....  WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

	$resultado = sqlite_query($conexion,$consulta);
*/


//Cerramos la conexion
$conexion->close();
//OLD   sqlite_close($conexion);

//Redirige a principal.php
echo'


<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php">
	</head>
</html>

';

?>
