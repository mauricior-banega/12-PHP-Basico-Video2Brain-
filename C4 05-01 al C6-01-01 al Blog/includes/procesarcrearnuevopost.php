<?php

session_start();

$usuario = $_SESSION['usuario'];

$tituloform = $_POST['titulopost'];
$subtituloform = $_POST['subtitulopost'];
$textoform = $_POST['contenidopost'];

$postutc = date('U');
$postanio = date('Y');
$postmes = date('m');
$postdia = date('d');
$posthora = date('H');
$postminuto = date('i');
$postsegundo = date('s');

//procesado

$conexion = new SQLite3('../database/blogs.db'); //OJO, HAY QUE AGREGAR ../

$resultado = $conexion->query("INSERT INTO posts VALUES ('$postutc','$postanio','$postmes','$postdia','$posthora','$postminuto','$postsegundo','$usuario','$tituloform','$subtituloform','','$textoform','','','')");

$conexion->close();

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';

?>
