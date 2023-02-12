<?php

//LOGUEO de FAVORITOSONLINE:eN En este archivo realizaremos lo que corresponde con el inicio de sesión de cada usuario a la pagina de favoritosOnline.


session_start(); //Comienzo una solicitud de sesiones, inciandola. Seguido de las sesiones individuales indicadas "usuario/contraseña".

/* Crearemos la interfaz para "multiples usuarios" en la web; por ello comentamos el inicio este de sesion automatica por defecto "trucada" para el ejemplo del practico.

$_SESSION['usuario'] = "jocarsa";
$_SESSION['contrasena'] = "jocarsa";

*/



echo'

<html>
	<head>
		//Cambiamos el URL a formulariologin.php
		//<meta http-equiv="REFRESH" content="0;url=principal.php">

		<meta http-equiv="REFRESH" content="0;url=formulariologin.php">


	</head>
</html>

';

?>
