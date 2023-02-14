<?php
/*
Explico lo que realiza "log.php"
-Lo que realiza es registrar cada vez que ingresemos a "log.php" datos captados mediante date()/IP/Navegador que luego seran mostrados en "verlogs.php". Pero sucede algo interesante.
-Si hacemos distintas acciones en la pagina, pero NO accedemos a visitar "log.php" no se registra, entonces no es real el dato, pero para que lo sea no solo tiene que guardar los datos al pasar por ese archivo sino tambien por la pagina principal "principal.php". Por eso mediante un "include" podemos hacer que se aplique tambien osea la contabilice y tengamos registro tambien cuando estemos en la parte principal de la pagina, como deberia de ser. A ese include lo haremos en "principal.php"
*/
session_start();

//Indicadores Date() que usaremos para pasar distintos datos que cmostraremos segun los logueaos que quedaran registrados, posteriormente mostrados en "verlogs.php".

$utc = date('U'); 
$anio = date('Y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$minuto = date('i');
$segundo = date('s');

//Guarda en variable nueva los datos de usuario/contraseña del usuario en ese momento.

$usuariolog = $_SESSION['usuario'];
$contrasenalog = $_SESSION['contrasena'];

@$ip=getenv('REMOTE_ADDR'); //Guarda en $ip la IP
//OLD   @$ip = getenv(REMOTE_ADDR); 

$navegador = $_SERVER["HTTP_USER_AGENT"]; //Obtenemos informacion sobre el navegador del visitante.


//Conexion

$conexion = new SQLite3('favoritos.db');

//Consulta & Ejecucion

$resultado = $conexion->query("INSERT INTO logs VALUES ('$utc','$anio','$mes','$dia','$hora', '$minuto','$segundo','$ip','$navegador','$usuariolog','$contrasenalog')"); 

/*OLD - Funciona la intruccion de consulta pero asi es mas reducido el codigo.

$consulta = 

<<<SQL

INSERT INTO logs VALUES ('$utc','$anio','$mes','$dia','$hora','$minuto','$segundo','$ip','$navegador','$usuariolog','$contrasenalog')

SQL;

//Ejecuto

$resultado = sqlite_exec($conexion,$consulta);

*/


//Cierro
$conexion->close();

?>
