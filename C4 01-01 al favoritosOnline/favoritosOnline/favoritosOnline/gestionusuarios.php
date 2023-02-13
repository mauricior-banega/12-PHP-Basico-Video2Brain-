<?php
/*
Explico lo que realiza "gestionusuario.php"
-Lo que realiza es mostrar todos los usuarios con sus respectivos datos en una tabla. Alli podremos gestionar hacia otros archivos, la actualizacion de esos usuarios o tambien eliminarlos.

*/
session_start();

$codigo = $_SESSION['permisos'];
//Lo pongo en 1 para que me permite ahora poder entrar a gestionusuarios.php y cargar un usuario nuevo.

//Este if GIGANTE osea que encierra todo, de modo que sino es ==1 el permiso para ver este documento unicamente y asi editarlo/eliminarlo, entonces pasara por el else indicando "Tu no eres administrador".

if($codigo == 1) { 


echo "Tu usuario es: ".$_SESSION['usuario']."<br /> Tu contraseña es: ".$_SESSION['contrasena'];

//Crear conexion
$conexion = new SQLite3('favoritos.db');

//OLD	$conexion = sqlite_open('favoritos.db');


//Establecer & Ejecutamos la consulta
$resultado = $conexion->query("SELECT * FROM usuarios");

/* 
OLD
//Establecer una consulta

$consulta = "SELECT * FROM usuarios ;";

//Ejecutar la consulta
$resultado = sqlite_query($conexion, $consulta);
*/


//Imprimir la consulta

echo "
<table border=1 width=100%>
<tr>
<td>Usuario</td>
<td>Contraseña</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Edad</td>
<td></td>
<td></td>
</tr>
";

$data= array();

//Dentro del while recorremos cada valor de tabla "usuarios" y los cargamos para poder visualizarlos. Ademas creamos los enlaces a Eliminar y Actualizar.
while ($fila = $resultado->fetchArray(1)){
echo "<tr>
		<td>".$fila['usuario']."</td>
		<td>".$fila['contrasena']."</td>
		<td>".$fila['nombre']."</td>
		<td>".$fila['apellido']."</td>
		<td>".$fila['edad']."</td>
			<td><a href='eliminarusuario.php?usuario=".$fila['usuario']
			."&contrasena=".$fila['contrasena']
			."&nombre=".$fila['nombre']
			."&apellido=".$fila['apellido']
			."&edad=".$fila['edad']."'>Eliminar</a>
			</td>
			<td><a href='formularioactualizarusuario.php?usuario=".$fila['usuario']
			."&contrasena=".$fila['contrasena']
			."&nombre=".$fila['nombre']
			."&apellido=".$fila['apellido']
			."&edad=".$fila['edad']."'>Actualizar</a></td>
	  </tr>";
}

//Añadir un registro

echo "

<tr>
	<form action='crearusuario.php' method='POST'>
	<td><input type='text' name='usuario'></td>
	<td><input type='text' name='contrasena'></td>
	<td><input type='text' name='nombre'>
	</td>
	<td><input type='text' name='apellido'></td>
	<td><input type='text' name='edad'></td>
	<td><input type='submit'></td><td></td>
</tr>

";


echo "</table>";

//Cerramos la conexion
$conexion->close();
//OLD   sqlite_close($conexion);

} else {echo "Tu no eres administrador";}

?>
