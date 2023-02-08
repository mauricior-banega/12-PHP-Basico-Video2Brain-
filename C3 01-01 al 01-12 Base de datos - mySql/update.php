<?php

/*MEDIANTE PHP MODIFICAREMOS en "miagenda" DATOS EN LOS CAMPOS DE LA TABLA CREADOS, ESPECIFICAMENTE PARA LA EDAD DE UNA PERSONA EN ESPECIFICO.*/

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

/*Creamos una variable que alojara l accion de modificar mediante update los datos de una persona, 'Marta' la dbo "agenda", en la tabla "miagenda". 
    Explicamos:
-La instruccion php UPDATE sirve para modificar algun valor de algun atributo en nuestra dbo.
-Especificamos la dbo, despues mediante SET indicamos el valor a cambiar, pero no de todos si lo dejamos solo asi sino que deberemos especificar mas, asi.
-Especificamos mas, mediante WHERE. Esto seria que cambie la Edad "DE" quien tenga en este caso el Nombre ='Marta'. Pero si lo dejamos asi, cambiara la edad de todas las Martas si hay mas de una. Asique para ello especificamos tambien su apellido.
-Y asi finalmente tras ejecutar la instruccion, se cambiara. No veremos cambios realizados en la pagina update.php pero si en la dbo de phpmyAdmin - "miagenda".
*/

$sql = "UPDATE miagenda SET Edad ='24' WHERE Nombre ='Marta' AND Apellido ='Lopez'";


//Guardamos en una variable $result la ejecucion del select.

$result = $mysqli->query($sql); //$result = mysqli_query($mysqli,$sql);


mysqli_close($mysqli); //CIERRA TODA LA CONEXION

?>