<?php

/*Explico lo que realiza "formactualizar.php"
-Lo que realiza es ACTUALIZAR realmente es el archivo "actualizar.php", este sirve a un paso antes de realizarlo.
-Al tocar en el enlace "Actualizar" que esta en principal.php y nos lleva hacia este documento para que podamos realizarlo.
-Muestra una interfaz, con una tabla aparte que solo muestra la pagina seleccionada, con todos sus campos, los que ya tenia cargados.
-Además, recuerda los valores cargados al traernos hasta este archivo. Eso es una funcionalidad tambien muy importante.


*/
session_start();

echo "Tu usuario es: ".$_SESSION['usuario']."<br /> Tu contraseña es: ".$_SESSION['contrasena'];

//Recupero de variables

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];

//Crear conexion

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");
//OLD   $conexion = sqlite_open('favoritos.db');

//ESTABLECER una consulta

$resultado = $conexion->query("SELECT * FROM favoritos WHERE usuario='$usuario' AND contrasena='$contrasena' AND titulo='$titulo' AND direccion='$direccion' AND categoria='$categoria' AND comentario='$comentario' AND valoracion='$valoracion'");

/* OLD 
	$consulta = "SELECT FROM favoritos WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."';";

//Ejecutar la consulta
	OLD  	$resultado = sqlite_query($conexion, $consulta);
*/

//Imprimir la consulta dentro de una tabla

echo "
<table border=1 width=100%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
<td></td>
</tr>
";


//OLD 	while ($fila = sqlite_fetch_array($resultado))

$data= array();

while ($fila = $resultado->fetchArray(1)){
		
	echo "<tr><form action='actualizarfavorito.php' method='post'><td><input type='text' name='titulo' value='".$fila['titulo']."'></td><td><input type='text' name='direccion' value='".$fila['direccion']."'></td><td><select name='categoria'>
	<option value='salud'>Salud</option>
	<option value='trabajo'>Trabajo</option>
	<option value='hobby'>Hobby</option>
	<option value='personal'>Personal</option>
	<option value='otros'>Otros</option>
	<option value='".$fila['categoria']."' selected>".$fila['categoria']."</option></select></td><td><input type='text' name='comentario' value='".$fila['comentario']."'></td><td><input type='text' name='valoracion' value='".$fila['valoracion']."'></td><td><input type='submit'></form></td></tr>";
	
		
}
//Añadir un registro


/**/

echo "</table>";

$_SESSION['titulo'] = $titulo;  //Establecemos que hasta esta instancia "titulo" sea
/*
Explicacion sobre esto:

-UPDATE funciona mediante 2 criterios, uno de entrada y otro de salida. Es decir (voy a cambiar esto, donde era esto otro). Sucede que si cambiamos el "titulo", el antes y el ahora va a variar, va a cambiar, por eso es que si desde aqui enviamos el parametro "titulo" para cambiar sin esta declaracion, no tenemos manera de indicarle al otro archivo (actualizarfavorito.php) cual es el actual y el anterior. Si usasemos POST suponiendo, unicamente conoceremos el valor de titulo NUEVO pero no el anterior para poder compararlo.

-Por eso es que creamos una variable de sesion 'titulo' que alojara el valor del titulo anterior (no el modificado). Que no se pasa mediante POST sino mediante la variable sesion de formulario.
-De esta manera, cuando la pagina redirija a "actualizarfavorito.php" la variable de sesion de titulo sera recordada osea tendra el valor del titulo anterior.
De esa manera, creamos en ese optro archivo una variable que contendra el valor del titulo anterior "$tituloantiguo" y podremos con el UPDATE cargar mediante SET los valores extraidos (POST) teniendo como referencia que apunte la actualizacion a el campo de titulo anterior para saber a que pagina cargar el UPDATE finalmente.
*/

//Cerramos la conexion
$conexion->close();
//OLD   sqlite_close($conexion);

?>
