<?php

session_start(); //Declaramos siempre esta linea ya que queremos que las variables de sesion esten activas.

//Crear variables

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

//Conexion

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");
//OLD   $conexion = sqlite_open('favoritos.db');


//Consulta & Ejecucion
//OJO: Con la instruccion 2 en 1 tener cuidado que hay que utilizar bien los  simbolos (),",',; ya que cambian a si realizamos la consulta dividida. 

$resultado = $conexion->query("INSERT INTO favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion')");

//$db->exec("INSERT INTO foo (id, bar) VALUES (1, 'This is a test')");

/* EJ CON ERROR
$resultado = $conexion->query("INSERT INTO favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion';");
*/
/*
EJ 1 NO SE APLICA (CONSULTA DIVIDIDA)

$consulta = 'INSERT INTO Discos VALUES
("Queeen","Queen","1973"),
("Queeen","QueenII","1974"),
("Queeen","A Night the Opera","1975"),
("U2","Boy","1980"),
("U2","October","1981"),
("U2","War","1983"),
("U2","Under a Blood Red Sky","1983")
';
*/


/* REEMPLAZADO DEL ORIGINAL PARA USAR 2 EN 1

$consulta = 
<<<SQL

INSERT INTO favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion')

SQL;
*/


//Ejecuto
//OLD  $resultado = sqlite_exec($conexion,$consulta);



//Cierro
$conexion->close();
//OLD  sqlite_close($conexion);

//Y vuelvo
/*Aclaracion: 
-Esta linea hace que de alguna manera veamos el efecto de ACTUALIZACION. Ya que al ejecutar "principal.php" y cargar un nuevo favorito web llenando los inputs y dando en boton ENVIAR se redirige a "crearfavorito.php" para cargarlo tanto en tabla como en dbo. Pero, vemos la pagina agregada cuando volvemos MANUALMENTE a "principal.php". 

-Por ello es que creamos esta instruccion en HTML (que no podremos ver navegador, claro esta): 
			<meta http-equiv="REFRESH" content="0;url=principal.php">

-Pero que si hará que se rediriga a "principal.php", pudiendo ver el dato cargado directamente.
*/

echo '
<html>
	<head>
				//REDIRIJE & ACTUALIZA

		<meta http-equiv="REFRESH" content="0;url=principal.php"> 

	</head>
</html>
';

?>
