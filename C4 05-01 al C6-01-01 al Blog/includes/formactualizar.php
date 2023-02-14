<?php

$titulomod = $_GET['titulomod'];
$subtitulomod = $_GET['subtitulomod'];
$textomod = $_GET['textomod'];
$utcmod = $_GET['utc'];

?>

<article style="background:rgba(255,255,0,0.2)">
						<div id="logov2b"></div>
						<!--<time>2011-01-31</time>-->
<form action="includes/actualizarpost.php" method="post">
						<h3>Titulo del post: <input type="text" name="titulopostactualizar" value="<?php echo $titulomod ?>"></h3>
						<h4>Subtitulo del post: <input type="text" name="subtitulopostactualizar" value="<?php echo $subtitulomod ?>"></h4>
						<p>Contenido: <input type="text" name="contenidopostactualizar" value="<?php echo $textomod ?>"></p>
						<input type="hidden" name="utcact" value="<?php echo $utcmod; ?>">
	<input type="submit">
						</form>
					</article>
