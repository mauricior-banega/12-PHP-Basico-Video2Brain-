<!--Creamos validamos abriendo la sesion en PHP -->

<!--
	(1)-En el archivo variablesusuario convertimos los valores cargados en la dbo para el nombre/apellidouno por ejemplo justamente para ser usados, reemplazando asi los valores estaticos de nombre y apellido que tenia antes por uno que tengamos en la base de datos del usuario que tenga la sesion en ese momento.
	(2)-Al momento de indicarle al navegador que reemplaze los valores estaticos por dinamicos y pongamos la declaracion de apertura/cierre PHP en cada caso, tambien podemos concatenar mediante un punto una declaracion de la otra si esta en la misma linea, ademas en este caso concatena un espacio entre ellos. 
					(No pongo boquillas porque interpreta mal el compilador)
									
					Ej:	?php echo $_SESSION['nombre']." ".$_SESSION['apellidouno'] ?

	(3)-Este reemplazo de variables se aplica en varios sectores del documento, antes html ahora php, concatena tambien la variable sesion que pertenece a la foto. Y explico; en la linea que teniamos antes donde llamabamos a la imagen atravez de esta instruccion <img src="photo/josevicentecarratala.jpg" width=50px height=50px /> ahora es reemplazada para tambien hacerla dinamica mediante la variable de sesion, que la incrusta creando un "style + background + la URL (photo/variable de sesión foto, abriendo y cerrando el codigo PHP)+ el tipo de archivo" (CSS) en el div que lo contiene, quedando asi:
	
					Ej: style="background:url('photo/>?php echo $_SESSION['foto'] ?>.jpg');"
				
	Esto se hace asi, porque si se pensara en hacer esto de concatenar la variable en background, donde la imagen estaba alli añadida antes, en CSS osea "estilo.css", no se puede, ya que CSS no soporta a PHP y solo puede hacerse en un archivo HTML o PHP.


-->
<?php session_start(); 


//if(!isset($_GET['u'])){}else{$_SESSION['usuariotemporal'] = $_GET['u'];}

//CREAMOS EL ACCESO DEL USUARIO AUN SIN LOGUEARSE/REGISTRARSE, CREANDO UN USUARIO POR DEFECTO.
if(!isset($_SESSION['usuariotemporal']))
{
	$_SESSION['usuariotemporal']=$_GET['u'];
} else {
	$_SESSION['usuariotemporal']='jocarsa';
	   }


include "includes/variablesusuario.php";

if(isset($_GET['editando'])){
$editando = $_GET['editando'];}
else{
$editando = "no";
}

if(isset($_GET['articulo'])){
$articulo = $_GET['articulo'];}
else{
$articulo = "no";
}

if(isset($_GET['registronuevo'])){
$registronuevo = $_GET['registronuevo'];

}else{
$registronuevo = "no";
}

//$_SESSION['login']="yes"; //Falseo la sesion para que pueda ver los post para crearlos y editar (eliminar/modificar).

if(isset($_SESSION['login'])){}else{$_SESSION['login'] = "no";}

?>
<!DOCTYPE HTML>
<html>
	<head manifest="/manifiesto/manifiesto.cache">
		<title>WebLog de Jose Vicente Carratala</title>
		<meta name="description" content="WebLog de Jose Vicente Carratala" />
		<meta name="keywords" content="weblog, blog, Jose Vicente Carratala, dise�o, multimedia" />
		<meta http-equiv="refresh" content="500" />
		<link rel=stylesheet href="css/estilo.css" type="text/css" />
	</head>
	<body>
		<div id="cajaheader">

		</div>
		<div id="principal" itempscope itemtype="http://www.data-vocabulary.org/Person">
			<header>
				<div id="logo">
					
				</div>
				<div id="tipo">	

				<!--(1)-->
				<h1><span itemprop="name"><?php echo $_SESSION['nombre']." ".$_SESSION['apellidouno'] ?></span></h1> - <!--(2)-->
				<h2><span itemprop="title"><?php echo $_SESSION['titulo'] ?></span></h2>
				</div>
				<nav>
					<ul>
						<li><a href="index.php?registronuevo=yes"><canvaas id="iconoinicio" width="50" height="50"></canvas><br />Crea tu propio blog</a></li>
				
						
					</ul>

				<?php

				if($_SESSION['login'] == "yes"){
echo "<a href='includes/unlog.php'>Pulsa AQUI para cerrar sesion</a>";
				}

				else {echo '
<div id="login" ><form action="includes/login.php" method="post">
				<input type="text" name="usuario" value="usuario">
				<input type="text" name="contrasena" value="contrasena">
				<input type="submit"></form></div>';}
					?>
				</nav>

			</header>
			<div id="contenido">
				<section id="sobremi">								<!--(3)-->
					<span itemprop="photo"><div id="mifoto" style="background:url('photo/<?php echo $_SESSION['foto'] ?>.jpg');"></div><!--<img src="photo/josevicentecarratala.jpg" width=50px height=50px />--></span>
					<h6><?php echo $_SESSION['descripcion'] ?><span itemprop="url"><br/><a href="<?php echo $_SESSION['webpersonal'] ?>"><?php echo $_SESSION['webpersonal'] ?></a></span></h6> 
				</section>
				<aside id="contacto">
<h3>Contacto</h3>
<form action="php/enviamail.php" method="post">
				<p >Introduce tu nombre</p>
				<input type="text" required name="nombre"/>
				<p >Introduce tu email</p>
				<input type="email" value="ejemplo: usuario@dominio.com" name="email"/>
				<p >Escribe tu mensaje</p>
				<textarea rows=6 name="mensaje"></textarea>
				<input type="submit" value="Enviar">
					

				</form>
				
				</aside>
				<?php if($registronuevo == "no"){} else{include "includes/registronuevo.php";}?>
				<?php 
				if($registronuevo == "no"){if($articulo == "no"){if($editando == "no"){include "includes/archivo.php";}else{}}else{}}else{}?>
				<section>
				<?php 

				if($registronuevo == "no"){if($_SESSION['login'] == "yes"){
				if($articulo == "no"){if($editando == "no"){include "includes/crearnuevopost.php";}else{}}else{}}else{}}else{} ?>
					Aqui van los post 
					<?php if($registronuevo == "no"){if($articulo == "no"){if ($editando == "no"){include "includes/posts.php";}else{}}else{}}else{}?>

				<?php if($registronuevo == "no"){if($articulo == "no"){if ($editando == "yes"){include "includes/formactualizar.php";}else{}}else{}}else{}?>

				<?php if($registronuevo == "no"){if ($articulo == "yes"){include "includes/articulo.php";}else{}}else{}?>
					
				</section>
			</div>
			<footer>
				<h6>
					<div class="vcard">
						<div> <span class="name">Jose Vicente Carratala</span>-<span class="locality">Mislata</span>-<span class="region">Valencia</span>-<span class="postal-code">46920</span>-<span class="country-name">Espa�a</span></div>
						<div> <span class="tel">96 000 00 00</span>-<span class="email">info@jocarsa.com</span></div>
					</div>
				
				</h6>
				<script type="text/javascript">
					if(localStorage.pagecount){localStorage.pagecount = Number(localStorage.pagecount)+1;}else{localStorage.pagecount = 1;}
					document.write("Has visitado mi p�gina " + localStorage.pagecount + " veces");
				</script>
				<script type="text/javascript">
					if(sessionStorage.pagecount){sessionStorage.pagecount = Number(sessionStorage.pagecount)+1;}else{sessionStorage.pagecount = 1;}
					document.write("En esta sesi�n, has visitado mi p�gina :" + sessionStorage.pagecount + " veces");
				</script>
			</footer>
		</div>
	</body>
</html>

<script type="text/javascript">

	var micolor = "White";
	var miotrocolor = "Grey";
	var mitercercolor = "Black";
	var escala = 0.5;

	//Dibujo el icono Sobre Mi
	
	var c=document.getElementById("iconosobreMi");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Contacto

	var c=document.getElementById("iconocontacto");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(miotrocolor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(miotrocolor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Inicio
	
	var c=document.getElementById("iconoinicio");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(mitercercolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*30,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();
	
	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Noticias
	
	var c=document.getElementById("icononoticias");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

</script>
