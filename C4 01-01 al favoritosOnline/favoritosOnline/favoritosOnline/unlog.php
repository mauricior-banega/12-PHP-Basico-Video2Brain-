<?php
/*
Explico lo que realiza "unlog.php"
-Lo que realiza es desloguear la sesión y redireccionar a "index.php". Se accede mediante el enlace en principal:
		
	>	Pulsa AQUI para cerrar tu sesión.  <

*/

session_start(); //Toma la sesión
session_destroy(); //Destruye la sesion osea desloguea. Esto para iniciar otra, por eso lleva al "index.php". Que a su vez derige a "formulariologin.php" para acceder.


echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=index.php">
	</head>
</html>

';

?>
