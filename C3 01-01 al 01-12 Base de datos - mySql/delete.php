<?php

/*MEDIANTE PHP ELIMINAREMOS en "miagenda" A UNA PERSONA CARGADA EN LA AGENDA.*/

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

/*Mediante DELETE borramos alguna persona de la agenda. Indicando que borre el Nombre='Marta' con Apellido='Lopez'. Tambien se borraran todos sus otros atributos.
*/

$sql = "DELETE FROM miagenda WHERE Nombre='Marta' AND Apellido='Lopez'";


//Guardamos en una variable $result la ejecucion del select.

$result = $mysqli->query($sql); //$result = mysqli_query($mysqli,$sql);


mysqli_close($mysqli); //CIERRA TODA LA CONEXION

?>