<html> 
	<!--Explico lo que realiza "formularioaltausuario.php".
	-En este archivo creamos el formulario que veremos al momento de crear un usuario nuevo. Pero materializar esa accion crearemos el archivo "crearusuario.php", a donde conectaremos nuestro formulario al finalizar tocando en el submit.
	-->
	<body>
		<form action="crearusuario.php" method="post">
			<input type="text" name="usuario" value="Introduce tu nombre de usuario" size=40><br/>
			<input type="text" name="contrasena" value="Introduce tu cotraseña" size=40><br/>
			<input type="text" name="nombre" value="Introduce tu nombre " size=40><br/>
			<input type="text" name="apellido" value="Introduce tu apellido" size=40><br/>
			<input type="text" name="edad" value="Introduce tu edad" size=40><br/>
			<input type="submit">
		</form>
	</body>
</html>
