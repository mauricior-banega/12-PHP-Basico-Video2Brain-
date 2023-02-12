<?php

session_start();

echo "Tu usuario es: ".$_SESSION['usuario']."<br /> Tu contraseña es: ".$_SESSION['contrasena'];

//Crear conexion

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");

if($conexion){echo "<p>La base de datos fue abierta exitosamente</p>";}

//Establecer & Ejecutar la consulta (2 en 1)

$resultado = $conexion->query("SELECT * FROM favoritos WHERE usuario='jocarsa' AND contrasena='jocarsa';"); 

/* OJO, EL WHILE DE LA OTRA MANERA NO ANDA
-Declarando $resultado y $consulta por separado, y no unificado mediante ->query cuando querramos usar la variable $resultado, el array NO FUNCIONARÁ con ella.
-Entonces siempre (en lo posible) codificarlo copn la forma unificada.

COMO ESTABA ANTES:

$consulta = "SELECT * FROM favoritos WHERE usuario='jocarsa' AND contrasena='jocarsa';";

//Ejecutar la consulta

$resultado = $conexion->exec($consulta);	
//OLD  $resultado = sqlite_query($conexion, $consulta);

*/



//Imprimir la consulta

echo "
<table border=1 width=100%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
<td>Eliminar</td>
<td>Actualizar</td>
</tr>
";

$data= array();

while ($fila = $resultado->fetchArray(1)){

/*	Aclaraciones:
-En el href cuando ponemos interrogante luego de la direccion (.php?titulo=") es porque especificamos dentro variables, que concluiran hasta la url que quedara resultante e indicara cual registro se eliminara en este caso. Y se concatenan ingresando (".)
-El signo & sirve para crear mas variables y especificarlas como esta codificado.
-Se crean 2 href ademas de los otros campos. Estos son enlaces que nos llevaran al Script PHP que permitira realizar la accion de eliminar/actualizar al ingresar. Por ello ahora pasamos a crearlos en sus respectivos archivos.
*/

echo "<tr><td>".$fila['titulo'].
	 "</td><td>".$fila['direccion'].
	 "</td><td>".$fila['categoria'].
	 "</td><td>".$fila['comentario'].
	 "</td><td>".$fila['valoracion'].
	 "</td><td><a href='eliminarfavorito.php?titulo=".$fila['titulo'].
	 "&direccion=".$fila['direccion'].
	 "&categoria=".$fila['categoria'].
	 "&comentario=".$fila['comentario'].
	 "&valoracion=".$fila['valoracion'].
	 "'>Eliminar</a></td><td><a href='formactualizar.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion'].
	 "&categoria=".$fila['categoria'].
	 "&comentario=".$fila['comentario'].
	 "&valoracion=".$fila['valoracion'].
	 "'>Actualizar</a></td></tr>";
}

//Añadir un registro

echo "

<tr>
	<form action='crearfavorito.php' method='POST'>
	<td><input type='text' name='titulo'></td>
	<td><input type='text' name='direccion'></td>
	<td><select name='categoria'>
		<option value='salud'>Salud</option>
		<option value='trabajo'>Trabajo</option>
		<option value='hobby'>Hobby</option>
		<option value='personal'>Personal</option>
		<option value='otros'>Otros</option>
	</td>
	<td><input type='text' name='comentario'></td>
	<td><input type='text' name='valoracion'></td>
	<td><input type='submit'></td>
	<td></td>
</tr>

";


echo "</table>";

//Cerramos la conexion

$conexion->close();

?>
