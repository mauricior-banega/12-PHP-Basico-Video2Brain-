<?php

//LOGUEO de FAVORITOSONLINE:eN En este archivo realizaremos lo que corresponde con el inicio de sesión de cada usuario a la pagina de favoritosOnline.


session_start(); //Comienzo una solicitud de sesiones, inciandola. Seguido de las sesiones individuales indicadas "usuario/contraseña".

/* Crearemos la interfaz para "multiples usuarios" en la web; por ello comentamos el inicio este de sesion automatica por defecto "trucada" para el ejemplo del practico.

$_SESSION['usuario'] = "jocarsa";
$_SESSION['contrasena'] = "jocarsa";

*/

if (isset($_SESSION['usuario'])) /*"isset" Verifica si esta seteada o configurada algo, en este caso la variable $_SESSION 'usuario'. Esto lo hacemos ya quen si esta logueado que derive a principal. Pero sino que pida loguearse.
Aun no esta creada la posibilidad de deslogueo, por eso iremos a crearla a "principal.php".
*/

{
	echo'
	<html>
	<head>
	
		<meta http-equiv="REFRESH" content="0;url=principal.php">		

	</head>
</html>

';
}

echo'

<html>
	<head>

		<meta http-equiv="REFRESH" content="0;url=formulariologin.php">

	</head>
</html>

';

?>
