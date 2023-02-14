<?php

$utcact = $_POST['utcact'];
$titulo = $_POST['titulopostactualizar'];
$subtitulo = $_POST['subtitulopostactualizar'];
$texto = $_POST['contenidopostactualizar'];

$conexion = new SQLite3('../database/blogs.db'); //OJO, HAY QUE AGREGAR ../

$resultado = $conexion->query("UPDATE posts SET titulo = '$titulo', subtitulo='$subtitulo', texto='$texto' WHERE utc='$utcact'");


$conexion->close();


echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';

?>
