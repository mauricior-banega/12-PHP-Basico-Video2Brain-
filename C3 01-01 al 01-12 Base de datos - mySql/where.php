<?php

/*MEDIANTE PHP CONSULTAREMOS EN "miagenda" DATOS CONCIDENTES MEDIANTE UNA BUSQUEDA */

//Incluimos el archivo conectar.php
include 'conectar.php';

//Creamos la conexión
$mysqli = new mysqli($servername, $username, $password, $database);

//Verificamos la conexion
if (!$mysqli) {
    die("Conexion fallida: " . mysqli_connect_error());
}

echo "Conexion exitosa"."<br>"."<br>";


//Indicamos que sea seleccionada la dbo

 mysqli_select_db($mysqli,"agenda"); //

//Creamos una variable que buscara en la dbo "agenda" de la tabla "miagenda" en este caso, un "Nombre". Si coincide se mostrara de no ser asi mostrara que no existe.

$sql = "SELECT * FROM miagenda WHERE Nombre='Marcos'"; //Guardamos en variable $sql la peticion


//Realizamos la ejecucion, que alojara el resultado en la variable $result.

$result = $mysqli->query($sql); //$result = mysqli_query($mysqli,$sql);

/*ACLARACION: 
-EL IF se lo agregue, explico:
-Sirve para mostrar si la busqueda fue existosa, entonces mostrara el resultado, en este caso si busca 'Mauricio' devolvera todos los campos cargados para ese usuario. Ahora busca otro, que no este, por ej Pedrito en vez de no mostrar nada, mostrara mediante la accion del IF "No existe ese dato en la dbo".
-Esto se da mediante la funcion "num_rows()" verificamos si se devuelven más de cero filas. Entonces si es mayor a 0 filas mostrará las concidencias. Ahora si es 0 significa que no encontro nada entonces es 0 y da el mensaje de que no encontro dato en la dbo.

-La explicacion del funcionamiento esta descrita en el while del documento "select.php".

*/

if(mysqli_num_rows($result) > 0){

while($fila = mysqli_fetch_assoc($result)) //o $fila = mysqli_fetch_array($result)
{
    echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];

    echo "<br>";
}
} else {
    echo "No existe ese dato en la dbo";
}

//Fuente: https://www.w3schools.com/php/php_mysql_select.asp



mysqli_close($mysqli); //CIERRA TODA LA CONEXION

?>