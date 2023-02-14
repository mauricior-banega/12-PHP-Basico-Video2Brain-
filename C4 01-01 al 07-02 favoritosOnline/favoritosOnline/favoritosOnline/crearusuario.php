<?php
/*
Explico lo que realiza "crearusuario.php.php"
-Lo que realiza es guardar en la dbo los datos cargados en el formulario login y comparar los usuarios con el que creemos.En caso de coincidir no lo creara pero sino esta creado lo crea. Pudiendo cargar tambien las paginas web.

*/
session_start();

$contador = 0; //Servira para indicar la concidencia que usaremos para saber si el usuario esta creado o no.

//Obtendre las variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad= $_POST['edad'];


//Comprobar si el usuario existe conectandome a la base de datos

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");
//OLD   $conexion = sqlite_open('favoritos.db');



/* OLD
$consulta = "SELECT * FROM usuarios";

$resultado = sqlite_query($conexion,$consulta);
*/

$resultado=$conexion->query("SELECT * FROM usuarios"); //Ponemos a disposicion la tabla usuarios para la busqueda que hará el While.


$data= array();

while ($fila = $resultado->fetchArray(1)){ //El While recorre la tabla usuarios mediante el array. Y pregunta (if), si alguno de los usuarios creados existe, si existe quen valga +1; asi esto pasa no creara un nuevo usuario porque se hace pasar el alta del usuario cuando el contador es == a 0.

if($fila['usuario'] == $usuario){

$contador++; //Si contador es 1 quiere decir que hubo coincidencia y que contador valor 1 por ello no creara si fuese el caso el usuario. Y sino hubo, sera 0 y creara usuario.

}else{}

}

//Cierra conexion
$conexion->close();
//OLD   sqlite_close($conexion);

if($contador == 0){  //Explicado en $contador++
//conexion
$conexion = new SQLite3('favoritos.db');

//consulta
/*Privilegios son (niveles):
1=administrador
2=controlador
3=usuario registrado
4=usuario invitado

*/

$resultado = $conexion->query("INSERT INTO usuarios VALUES('$usuario','$contrasena','$nombre','$apellido','$edad',3)");
//En el insert pasamos como ultimo valor 3, ya que corresponde al nivel de privilegio de usuario que tendra quien se cargue por este sistema/archivo.

/* OLD
$consulta =

<<<SQL
INSERT INTO usuarios VALUES('$usuario','$contrasena','$nombre','$apellido','$edad',3)

SQL;

//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
*/

//cerrar
$conexion->close();
//OLD   sqlite_close($conexion);

echo'

<html>
	<head>
	
		<meta http-equiv="REFRESH" content="0;url=principal.php"> 
		
		//Estaba mal porque antes estaba gestionusuarios.php la URL, entonces creaba el usuario con permiso 3 (no 1) entonces al redirigir te quitaba el acceso.
	</head>
</html>

';} else{echo "El nombre de usuario que has elegido ya existe. Elige otro";}


?>
