<?php

session_start();



$usuarioenviado = $_POST['usuario'];
$contrasenaenviada = $_POST['contrasena'];

$conexion = new SQLite3('../database/blogs.db'); //OJO, HAY QUE AGREGAR ../

$resultado = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$usuarioenviado'");

$data= array();

while ($fila = $resultado->fetchArray(1)){

if($usuarioenviado = $fila['usuario'] & $contrasenaenviada = $fila['contrasena']){

$_SESSION['login'] = "yes";
$_SESSION['usuariotemporal'] = $fila['usuario'];

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';
	
} else{
$_SESSION['login'] = "no";

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';
}


}
echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';
?>
