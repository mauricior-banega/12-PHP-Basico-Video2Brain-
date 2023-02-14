<?php

$codigoutc = $_GET['utc'];

$conexion = new SQLite3('../database/blogs.db'); //OJO, HAY QUE AGREGAR ../

$resultado = $conexion->query("DELETE FROM posts WHERE utc='$codigoutc'");

$conexion->close();

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';

?>
