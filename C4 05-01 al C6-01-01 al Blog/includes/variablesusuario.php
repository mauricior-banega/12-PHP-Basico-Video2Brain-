<?php

/*
Cuando creamos este documento lo hicimos en base a un unico usuario, por ello definimos $_SESSION['usuariotemporal'] = "jocarsa"; pero sabemos que esto no va a ser asi y que otros usuarios han de interactuar con la pagina tambien. Por ello es que al principio $_SESSION['usuariotemporal'] = "jocarsa"; estaba activado y ahora lo comentamos. Vamos a indicarle al sistema ahora que terminamos el proyecto que sino tiene sesion iniciada que active el usuario temporal jocarsa pero si la tiene que funcione la misma pero con el usuario logueado; $_GET['u'];. Esto lo definiremos en "index.php" (linea 22).

*/

 /*En este documento usaremos las variables de datos para pasarlas a variables de sesion que usaremos posteriormente.*/

//$_SESSION['usuariotemporal'] = "jocarsa"; // LOGIN FALSO PARA PODER USAR EL ARCHIVO

//Aclaracion: Unicamente definimos un usuario y no contraseña para crear la sesion falsa ya que el sistema asimila que si esta la sesion abierta la clave ya fue introducida en algun punto anterior aunque no haya sido asi.


$conexion = new SQLite3('database/blogs.db'); //OJO, NO HAY QUE AGREGAR ../

$resultado = $conexion->query("SELECT * FROM usuarios WHERE usuario ='$_SESSION[usuariotemporal]'");

$data= array();

while ($fila = $resultado->fetchArray(1)){

//Convertimos cada valor contenido en los campos de la tabla usuarios en "variables de sesión".
$_SESSION['usuario'] = $fila['usuario'];
$_SESSION['nombre'] = $fila['nombre'];
$_SESSION['apellidouno'] = $fila['apellidouno'];
$_SESSION['apellidodos'] = $fila['apellidodos'];
$_SESSION['titulo'] = $fila['titulo'];
$_SESSION['descripcion'] = $fila['descripcion'];
$_SESSION['foto'] = $fila['foto'];
$_SESSION['webpersonal'] = $fila['webpersonal'];
$_SESSION['email'] = $fila['email'];
$_SESSION['permisos'] = $fila['permisos'];

}

$conexion->close();

?>
