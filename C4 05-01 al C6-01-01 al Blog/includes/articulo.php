<?php

$utcarticulo = $_GET['utc'];

$conexion = new SQLite3('../database/blogs.db'); //Agrego los ..

$resultado = $conexion->query("SELECT * FROM posts WHERE utc='$utcarticulo' ORDER BY utc DESC LIMIT 1;");


$data= array();

while ($fila = $resultado->fetchArray(1)){

echo "
<article>
						<div id='logov2b' style='background:url(\"photo/".$fila['imagen'].".jpg\");'></div>
						<time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>
						<h3>".$fila['titulo']."</h3>
						<h4>".$fila['subtitulo']."</h4>
						<p>".$fila['texto']."</p>
						<br/><a href='includes/eliminarpost.php?utc=".$fila['utc']."'>Eliminar</a><br/>
						<a href='index.php?titulomod=".$fila['titulo']."&subtitulomod=".$fila['subtitulo']."&textomod=".$fila['texto']."&editando=yes&utc=".$fila['utc']."'>Modificar</a><br/>
					</article>
";

}

$conexion->close();


?>


