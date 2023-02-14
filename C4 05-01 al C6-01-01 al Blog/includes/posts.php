
<?php

/*Include hecho de este archivo en la linea 124 aproximadamente (idex.php), dentro del section "Aqui van los post".*/

$conexion = new SQLite3('database/blogs.db'); //OJO, NO HAY QUE AGREGAR ../

$resultado = $conexion->query("SELECT * FROM posts WHERE usuario='$_SESSION[usuariotemporal]' ORDER BY utc DESC LIMIT 3");

/*$peticion = $conexion->query("SELECT * FROM usuarios WHERE usuario ='$_SESSION[usuariotemporal]'");*/
$data= array();

while ($fila = $resultado->fetchArray(1)){

//Aclaro: en la definicion para sustituir el articulo, en la primera linea sobre background + URL (para añadir la inmagen) sucede que deberemos de poner un caracter especial más (\), debido a que en toda la declaracion del div se estan usando comillas dobles y simples, y nuevamente dobles y no se permite. Este caracter añade a la comilla que se ingresa, permitiendo asi poder ingresar comilla doble nuevamaente, tambien al final de la declaracion.

echo "
<article>													
						<div id='logov2b' style='background:url(\"photo/".$fila['imagen'].".jpg\");'></div> 
						<time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>
						<h3>".$fila['titulo']."</h3>
						<h4>".$fila['subtitulo']."</h4>
						<p>".$fila['texto']."</p>
						<br/>

						";
						if($_SESSION['login'] == "yes"){
						echo"<a href='includes/eliminarpost.php?utc=".$fila['utc']."'>Eliminar</a>";echo"<br/>";}else{}

						
						if($_SESSION['login'] == "yes"){
						echo"<a href='index.php?titulomod=".$fila['titulo']."&subtitulomod=".$fila['subtitulo']."&textomod=".$fila['texto']."&editando=yes&utc=".$fila['utc']."'>Modificar</a>";echo"<br/>";}else{}

						//echo"ols";
					echo"</article>";


}

$conexion->close();

?>

