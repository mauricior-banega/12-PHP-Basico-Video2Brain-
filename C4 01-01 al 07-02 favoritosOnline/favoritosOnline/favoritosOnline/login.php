<?php
/*
Explico lo que realiza "login.php"
-Lo que realiza es captar los datos cargados de usuario y contraseña, creado en este archivo. Y validar o no, las sesiones realizando una comparacion con los usuarios & contraseña coincidente cargados.

ACLARACIONES: 
(1*) - La variable $permisosenbase, se crea luego de creado varios de los archivos, Video 04-04-09 especificamente. Sucede que cualquier usuario podia ingresar a "gestionusuarios.php" y Eliminar/Actualizar a otros usuarios y solo este es un privilegio del administrador con PERMISO 1. Al permiso 1, para jocarsa unicamente, lo define en el INSERT hecho en archivo "instalacion.php", podremos ver que pasa 1 como ultimo paramentro y este corresponde al permiso.
*/

session_start();

//Obtener variables

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//Crearemos conexion

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");


/*Consulta & Lanzar consulta*/
$resultado = $conexion->query("SELECT * FROM usuarios"); 

/* OLD

//Consulta
$consulta = "SELECT * FROM usuarios;";
//Lanzar la consulta

$resultado = sqlite_query($conexion, $consulta);

*/

//Repasar los resultados: Mediante el while compara cada valor de usuario y contraseña de la tabla mediante el array y compara. Srea una variable para usuario/contraseña nueva, que luego es comparada con el usuario cargado, si concide pasa a ser variables validadas de sesion.


//OLD 	while($fila = sqlite_fetch_array($resultado))
$data= array();

while ($fila = $resultado->fetchArray(1))
{

$usuariobasedatos = $fila['usuario'];
$contrasenabasedatos = $fila['contrasena'];
$permisosenbase = $fila['permisos']; //(1*)

if($usuario == $usuariobasedatos & $contrasena == $contrasenabasedatos){
//Si el resultado es positivo, entonces asignar

$_SESSION['usuario'] = $usuario;
$_SESSION['contrasena'] = $contrasena;
$_SESSION['permisos'] = $permisosenbase; //(1*)

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php">
	</head>
</html>

';


}else{
//Si el resultado es nagativo, entonces nada
}
}
//Cerramos base de datos

?>
