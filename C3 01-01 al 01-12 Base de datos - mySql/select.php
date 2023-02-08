<?php

/*MEDIANTE PHP CONSULTAMOS A LA TABLA "miagenda" TODOS LOS DATOS (*) */

//Incluimos el archivo conectar.php
include 'conectar.php';

//Creamos la conexión
$mysqli = new mysqli($servername, $username, $password, $database);

//// Verificamos la conexion
if (!$mysqli) {
    die("Conexion fallida: " . mysqli_connect_error());
}

echo "Conexion exitosa"."<br>"."<br>";


//Indicamos que sea seleccionada la dbo

 mysqli_select_db($mysqli,"agenda"); //

//Creamos una variable que alojara los datos que carguemos en la dbo "agenda", en la tabla "miagenda".

$sql = "SELECT * FROM miagenda";


//Guardamos en una variable $result la ejecucion del select.

$result = $mysqli->query($sql); //$result = mysqli_query($mysqli,$sql);

//Ese $result obtendra el resultado y mediante un while recorrera y obtendra una fila de resultado, como un array asociativo (mysqli_fetch_assoc). Y que se guardara en la variable $fila. Segun la fila que este imprimira los datos de la tabla. Esto lo hara hasta que no haya mas filas por recorrer.

while($fila = mysqli_fetch_assoc($result)) //o $fila = mysqli_fetch_array($result)
{
    echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];

    echo "<br>";
}
//$result = mysqli_query($con,$sql);



mysqli_close($mysqli); //CIERRA TODA LA CONEXION

?>