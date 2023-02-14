<aside id="posts">
				<h5>Posts previos</h5>
					<ul>

					<?php
						$conexion = new SQLite3('database/blogs.db'); //OJO, NO HAY QUE AGREGAR ../

						$resultado = $conexion->query("SELECT * FROM posts WHERE usuario='$_SESSION[usuariotemporal]' ORDER BY utc DESC LIMIT 20 OFFSET 3");

						$data= array();

						while ($fila = $resultado->fetchArray(1)){

         				echo"<li><a href='index.php?articulo=yes&utc=".$fila['utc']."'><time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>-".$fila['titulo']."</a></li>";

						}

						$conexion->close();
					?>
						
						
						
					</ul>
				</aside>
