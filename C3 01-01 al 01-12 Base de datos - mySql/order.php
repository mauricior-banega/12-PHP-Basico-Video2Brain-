<?php

/*MEDIANTE PHP CONSULTAMOS A LA TABLA "miagenda" TODOS LOS DATOS ORDENADOS, EN ESTE CASO LA EDAD.
-Por defecto "ORDER BY" ordena en forma ascendente los elementos de la tabla obtenidos, primero los de menor valor y luego los de mayor. Pero si a la orden le agregamos DESC cambiará empezando de mas a menos, y ASC tendra el valor por defecto osea que podemos no definirlo.
*/

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

//Creamos una variable que alojara los datos que carguemos en la dbo "agenda", en la tabla "miagenda".

$sql = "SELECT * FROM miagenda ORDER BY Edad DESC"; 


//Guardamos en una variable $result la ejecucion del select.

$result = $mysqli->query($sql); //$result = mysqli_query($mysqli,$sql);

//Ese $result obtendra el resultado y mediante un while recorrera y obtendra una fila de resultado, como un array asociativo (mysqli_fetch_assoc). Y que se guardara en la variable $fila. Segun la fila que este imprimira los datos de la tabla. Esto lo hara hasta que no haya mas filas por recorrer.

while($fila = mysqli_fetch_assoc($result)) //o $fila = mysqli_fetch_array($result)
{   
    echo " ";
    echo $fila['Nombre'];
    echo " ";
    echo $fila['Apellido'];
    echo " ";
    echo $fila['Edad'];
    echo " ";
    echo $fila['Telefono'];
    echo "<br>";
}

mysqli_close($mysqli); //CIERRA TODA LA CONEXION

?>