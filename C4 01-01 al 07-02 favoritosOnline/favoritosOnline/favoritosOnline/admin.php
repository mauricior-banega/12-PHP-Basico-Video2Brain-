<?php
/*
Explico lo que realiza "admin.php"
-Lo que realiza es checkear los permisos, y luego mostrar dos enlaces con accesos a ver los logueos 'verlogs.php' y para gestionar los usuarios 'gestionusuarios.php'. Pero sino es administrador derivara a "index.php".
*/
session_start();

$codigo = $_SESSION['permisos'];

if($codigo == 1){

echo "Pulsa <a href='verlogs.php'>AQUI</a> para ver los logs <br/>";

echo "Pulsa <a href='gestionusuarios.php'>AQUI</a> para gestionar a los usuarios";

}

else {

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=index.php">
	</head>
</html>

';

}

?>
