<?php

session_start();

$contador = 0;



//recibo variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellidouno = $_POST['apellidouno'];
$apellidodos = $_POST['apellidodos'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$foto = $_POST['foto'];
$webpersonal = $_POST['webpersonal'];
$email = $_POST['email'];



//compruebo si el usuario existe

$conexion = new SQLite3('../database/blogs.db');

$resultado = $conexion->query("SELECT * FROM usuarios");

$data= array();

while ($fila = $resultado->fetchArray(1)){

	if($fila['usuario'] == $usuario){
		$contador++;
	}else{}

}
$conexion->close();

//creo inserto un nuevo usuario

if($contador == 0){

	$conexion = new SQLite3('../database/blogs.db');
	//$conexion = sqlite_open('../database/blogs.db');

	$resultado = $conexion->query("INSERT INTO usuarios VALUES ('$usuario','$contrasena','$nombre','$apellidouno','$apellidodos','$titulo','$descripcion','$foto','$webpersonal','$email',3)");

	$conexion->close();

	echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';

}
else{echo'

El usuario creado ya existe
';}
?>
