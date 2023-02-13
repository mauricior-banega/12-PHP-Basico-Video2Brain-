<!--Explico que es formulariologin.php.php.php"
-Aqui veremos la interfaz grafica en estructura HTML de este archivo PHP. Como sabemos PHP soporta este otro lenguaje asique no hay problema con ello.
-Creamos la imagen SVG que es la que insertaremos al comienzo del documento (estrella).
-Luego podremos ingresar nuestro usuario y contraseña si somos usuarios mediante el form/inputs que creamos (redirije).
-Tambien podremos Registrarnos (redirije).
-Podremos ver por ultimo una tabla en donde veremos las platillas de cada pagina web separada por segmentos una de otra, mediante una tabla.
-->

<!DOCTYPE HTML>
<html>
	<head>
		<!--<meta http-equiv="refresh" content="5">-->
		<link rel=stylesheet href="estilo/estilo.css" type="text/css" />
	</head>
	<body>
		<div id="contenedor">
			<header>
				<section id="logotipo">

					<div id="logo">
				
				<!--COMIENZO DEL SEGMENTO DE CODIGO DEL SVG "ESTRELLA"-->
						<svg
							xmlns:dc="http://purl.org/dc/elements/1.1/"
							xmlns:cc="http://creativecommons.org/ns#"
							xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
							xmlns:svg="http://www.w3.org/2000/svg"
							xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink"
							version="1.1"
							width="200"
							height="200"
							id="svg3856">
						  <defs
							  id="defs3858">
							 <linearGradient
								 x1="298.75262"
								 y1="479.35315"
								 x2="288.90363"
								 y2="505.86966"
								 id="linearGradient3831"
								 xlink:href="#linearGradient3783"
								 gradientUnits="userSpaceOnUse" />
							 <linearGradient
								 id="linearGradient3783">
								<stop
									id="stop3785"
									style="stop-color:#ffffff;stop-opacity:1"
									offset="0" />
								<stop
									id="stop3787"
									style="stop-color:#ffffff;stop-opacity:0"
									offset="1" />
							 </linearGradient>
							 <linearGradient
								 x1="274.50894"
								 y1="525.31506"
								 x2="291.17648"
								 y2="489.45468"
								 id="linearGradient3829"
								 xlink:href="#linearGradient3793"
								 gradientUnits="userSpaceOnUse" />
							 <linearGradient
								 id="linearGradient3793">
								<stop
									id="stop3795"
									style="stop-color:#000000;stop-opacity:1"
									offset="0" />
								<stop
									id="stop3797"
									style="stop-color:#000000;stop-opacity:0"
									offset="1" />
							 </linearGradient>
							 <filter
								 color-interpolation-filters="sRGB"
								 id="filter3817">
								<feGaussianBlur
									id="feGaussianBlur3819"
									stdDeviation="2.0093285" />
							 </filter>
							 <filter
								 x="-0.13698976"
								 y="-0.13929322"
								 width="1.2739795"
								 height="1.2785865"
								 color-interpolation-filters="sRGB"
								 id="filter3778">
								<feGaussianBlur
									id="feGaussianBlur3780"
									stdDeviation="4.6919561" />
							 </filter>
						  </defs>
						  <metadata
							  id="metadata3861">
							 <rdf:RDF>
								<cc:Work
									rdf:about="">
								  <dc:format>image/svg+xml</dc:format>
								  <dc:type
									  rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
								  <dc:title></dc:title>
								</cc:Work>
							 </rdf:RDF>
						  </metadata>
						  <g
							  transform="translate(0,-852.36218)"
							  id="layer1">
							 <path
								 d="m 328.92856,489.50504 c 2.06325,4.67387 -16.53866,17.26072 -17.6167,22.25471 -1.07804,4.99399 10.6752,24.13352 6.86765,27.54009 -3.80754,3.40656 -21.52666,-10.39535 -26.60935,-9.8774 -5.0827,0.51795 -19.65352,17.61038 -24.06996,15.04188 -4.41643,-2.5685 3.23446,-23.68541 1.17122,-28.35929 -2.06324,-4.67387 -22.82174,-13.24969 -21.7437,-18.24368 1.07804,-4.994 23.52566,-4.24304 27.33321,-7.64961 3.80754,-3.40657 5.5489,-25.79915 10.6316,-26.3171 5.0827,-0.51795 11.3052,21.06307 15.72164,23.63157 4.41643,2.5685 26.25115,-2.69505 28.31439,1.97883 z"
								 transform="matrix(2.0064258,0,0,0.83137419,-477.53961,573.24657)"
								 id="path3895"
								 style="opacity:0.30204079;fill:#000000;fill-opacity:1;stroke:#000000;stroke-width:9.60000038;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none;filter:url(#filter3778)" />
							 <path
								 d="m 328.92856,489.50504 c 2.06325,4.67387 -16.53866,17.26072 -17.6167,22.25471 -1.07804,4.99399 10.6752,24.13352 6.86765,27.54009 -3.80754,3.40656 -21.52666,-10.39535 -26.60935,-9.8774 -5.0827,0.51795 -19.65352,17.61038 -24.06996,15.04188 -4.41643,-2.5685 3.23446,-23.68541 1.17122,-28.35929 -2.06324,-4.67387 -22.82174,-13.24969 -21.7437,-18.24368 1.07804,-4.994 23.52566,-4.24304 27.33321,-7.64961 3.80754,-3.40657 5.5489,-25.79915 10.6316,-26.3171 5.0827,-0.51795 11.3052,21.06307 15.72164,23.63157 4.41643,2.5685 26.25115,-2.69505 28.31439,1.97883 z"
								 transform="matrix(1.8749322,0,0,1.8749322,-437.06682,1.9920084)"
								 id="path3823"
								 style="opacity:0.8857143;fill:#f6ca27;fill-opacity:1;stroke:#d8b028;stroke-width:9.60000038;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
							 <path
								 d="m 328.92856,489.50504 c 2.06325,4.67387 -16.53866,17.26072 -17.6167,22.25471 -1.07804,4.99399 10.6752,24.13352 6.86765,27.54009 -3.80754,3.40656 -21.52666,-10.39535 -26.60935,-9.8774 -5.0827,0.51795 -19.65352,17.61038 -24.06996,15.04188 -4.41643,-2.5685 3.23446,-23.68541 1.17122,-28.35929 -2.06324,-4.67387 -22.82174,-13.24969 -21.7437,-18.24368 1.07804,-4.994 23.52566,-4.24304 27.33321,-7.64961 3.80754,-3.40657 5.5489,-25.79915 10.6316,-26.3171 5.0827,-0.51795 11.3052,21.06307 15.72164,23.63157 4.41643,2.5685 26.25115,-2.69505 28.31439,1.97883 z"
								 transform="matrix(1.8749322,0,0,1.8749322,-437.06682,1.9920084)"
								 id="path3825"
								 style="opacity:0.29285715;fill:url(#linearGradient3829);fill-opacity:1;stroke:none;filter:url(#filter3817)" />
							 <path
								 d="m 328.92856,489.50504 c 2.06325,4.67387 -16.53866,17.26072 -17.6167,22.25471 -1.07804,4.99399 10.6752,24.13352 6.86765,27.54009 -3.80754,3.40656 -21.52666,-10.39535 -26.60935,-9.8774 -5.0827,0.51795 -19.65352,17.61038 -24.06996,15.04188 -4.41643,-2.5685 3.23446,-23.68541 1.17122,-28.35929 -2.06324,-4.67387 -22.82174,-13.24969 -21.7437,-18.24368 1.07804,-4.994 23.52566,-4.24304 27.33321,-7.64961 3.80754,-3.40657 5.5489,-25.79915 10.6316,-26.3171 5.0827,-0.51795 11.3052,21.06307 15.72164,23.63157 4.41643,2.5685 26.25115,-2.69505 28.31439,1.97883 z"
								 transform="matrix(1.8749322,0,0,1.8749322,-437.06682,1.9920084)"
								 id="path3827"
								 style="opacity:0.71785715;fill:url(#linearGradient3831);fill-opacity:1;stroke:none" />
						  </g>
						</svg>
					<!--FIN AL SEGMENTO DE CODIGO DEL SVG "ESTRELLA"-->

					</div>
					<div id="tipo">
						<h1>misFavoritos</h1>
					</div>
				</section>
				<section id="login">
					<form action="login.php" method="post"> <!--Envio de datos del Formulario a "loguin.php"-->
						<input type="text" name="usuario" value="usuario" size=20>
						<input type="text" name="contrasena" value="contraseña" size=20>
						<input type="submit">
					</form>
					<div id="registrate"><a href="formularioaltausuario.php">Pulsa AQUI para registrarte en la web</a></div> <!--Redirije a "formularioaltausuario.php" para crearlo sino lo esta-->
				</section>
			</header>
			<section id="contenido">
				<section id="presentacion">
					<div id="animaciontexto1"><h2>¿Cansad@ de perder tus favoritos?</h2></div>
					<div id="animaciontexto2"><h2>¿Te gustaria no volver a perderlos?</h2></div>
				</section>

				<section id="etiquetas">

				<!--AQUI METERE EL CODIGO PHP-->

<?php


$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");

//OLD 	$conexion = sqlite_open('favoritos.db');

$resultado = $conexion->query("SELECT * FROM favoritos ORDER BY RANDOM() LIMIT 6;"); 

/*OLD
$consulta = "SELECT * FROM favoritos ORDER BY RANDOM() LIMIT 6;";

$resultado = sqlite_query($conexion,$consulta);
*/


$data= array();

while ($fila = $resultado->fetchArray(1)){
echo "
<table border=1>
						<tr>
							<th>".$fila['titulo']."<span id='estrellas'>Valoracion: ".$fila['valoracion']."</span>
						</tr>
						<tr>
							<td>Enlace: ".$fila['direccion']."
							</td>
						</tr>
						<tr>
							<td>Categoria: ".$fila['categoria']."
							</td>
						</tr>
						<tr>
							<td>Comentario: ".$fila['comentario']."
							</td>
						</tr>
					</table>
";
}


//Cerramos la conexion
$conexion->close();
//OLD   sqlite_close($conexion);

?>

				<!--ESTA ES UNA ETIQUETA DE MUESTRA
					<table border=1>
						<tr>
							<th>".$fila['titulo']."<span id="estrellas">Valoracion: ".$fila['valoracion']."</span>
						</tr>
						<tr>
							<td>Enlace: ".$fila['direccion']."
							</td>
						</tr>
						<tr>
							<td>Categoria: ".$fila['categoria']."
							</td>
						</tr>
						<tr>
							<td>Comentario: ".$fila['comentario']."
							</td>
						</tr>
					</table>-->
					
					<section id="trampa">
					
					</section>
				</section> <!--Cierra section "etiquetas"-->
				
					
			</section><!--Cierra section "contenido"-->
			<footer>
			© 2023 - Mauricio Banega Developer
			</footer>
		</div>
	</body>
</html>

<!--VIEJO CODIGO###################################-->
<!--
<html>
	<body>
		<table border=1 width=100%>
	<tr>
	<td>

		<form action="login.php" method="post">
		<input type="text" name="usuario" value="introduce aqui tu nombre" width=50%></td>
		</tr>
		<tr>
		<td>
		<input type="text" name="contrasena" value="introduce aqui tu contraseña" width=50%></td>
		</tr>
		<tr>
		<td>
			<input type="submit"></td>
			</tr>
		</form>
		</table>
		No eres usuario todavia? Pues pulsa <a href="formularioaltausuario.php">AQUI</a>
	</body>
</html>
-->

