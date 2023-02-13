<?php

session_start();

echo "Tu usuario es: ".$_SESSION['usuario']."<br /> Tu contraseña es: ".$_SESSION['contrasena'];

//Crear conexion

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");

if($conexion){echo "<p>La base de datos fue abierta exitosamente</p>";}

//Establecer & Ejecutar la consulta (2 en 1)

$resultado = $conexion->query("SELECT * FROM favoritos WHERE usuario='$_SESSION[usuario]' AND contrasena='$_SESSION[contrasena]';"); 

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



//////////////////SOCIALIZO/////////////////////

/*Este espacio se crea para que podamos en la pagina principal poder visualizar a modo sugerencia las paginas favoritas que los usuarios hayan cargado. Separaremos segun categoria estas sugerencias y es por eso que todo el codigo para no repetir codigo 5 veces (de cada categoria), entonces encapsularemos la misma en una F(). Asi reutilizaremos la funcionalidad las veces que queramos sin redundar y hacer extenso el archivo.
*/



function muestraCategoria($damecategoria)
{

	echo "Algunos lins de la categoria ".$damecategoria." que quizas te puedan interesar";

	$conexion = new SQLite3('favoritos.db');

	$resultado = $conexion->query("SELECT * FROM favoritos WHERE usuario!='$_SESSION[usuario]' AND categoria='$damecategoria' ORDER BY RANDOM() LIMIT 3"); 

	//Para que el usuario registrado no vea el favorito que el mismo tiene definimos WHERE dentro de la consulta del SELECT, idnicando el simbolo != distinto a para el usuario que este registrado osea que tenga la sesion abierta en ese momento. Ademas como mostraremos paginas en recomendacion aleatorias, haremos que concidan en cuanto a la misma categoria, esto se mediante la especificacion  que indicara el AND en el WHERE.


	//Establecemos que las paginas favoritas se muestren de manera aletoria y con un maximo de 3.

	//Muestro los resultados. Primero creo una tabla y dentro de ella cargaremos los valores que aloje extrayendolo de la dbo, mediante el while.

	echo "

	<table border=1 width=100%>
	<tr>
	<td>Titulo</td>
	<td>Direccion</td>
	<td>Categoria</td>
	<td>Comentario</td>
	<td>Valoracion</td>
	</tr>

	";

	$data= array();

	while ($fila = $resultado->fetchArray(1)){

	/*	
	*/

	echo "<tr>
			<td>".$fila['titulo']."</td>
			<td>".$fila['direccion']."</td>
			<td>".$fila['categoria']."</td>
			<td>".$fila['comentario']."</td>
			<td>".$fila['valoracion']."</td>
		</tr>";
	}

	echo "</table>";

	$conexion->close();

}

//Aca hacemos las llamadas a cada funcion pasando el parametro de cada uno de las opciones que tiene "categoria".

muestraCategoria("salud");
muestraCategoria("trabajo");
muestraCategoria("personal");
muestraCategoria("hobbie");
muestraCategoria("otros");

?>
