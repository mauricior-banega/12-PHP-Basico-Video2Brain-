<?php

/*CREAMOS ESTE ARCHIVO PARA AGREGAR OTRA PERSONA MAS A LA DBO. ES COPIA DE "INSERTAR.PHP".
------------------------------------------------------------------------------------------
*/
/*MEDIANTE PHP INSERTAREMOS en "miagenda" DATOS EN LOS CAMPOS DE LA TABLA CREADOS*/

//Incluimos el archivo conectar.php. Basicamente reemplaza al trozo de codigo que creamos en conectar.php al comienzo, donde se declaran los valores de cada campo a los que se les asignan las variables declaradas en "$mysqli":$servername, $username, $password, $database.

include 'conectar.php';

//Creamos la conexión
$mysqli = new mysqli($servername, $username, $password, $database);

// Verificamos la conexion
if (!$mysqli) {
    die("Conexion fallida: " . mysqli_connect_error());
}

echo "Conexion exitosa";


//Indicamos que sea seleccionada la dbo
mysqli_select_db($mysqli,"agenda");

//Creamos una variable que alojara los datos que carguemos en la dbo "agenda", en la tabla "miagenda".

/* Comento; ya que si lo dejo repetire la accion de crear repetidamente la carga de estos 2.

$sql= "INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono) VALUES ('Ricardo','Arjona',57,'5385663254')";

$sql= "INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono) VALUES ('Marta','Lopez',14,'5400000001')";

*/

$mysqli->query($sql); //Ejecutamos 

mysqli_close($mysqli); //CIERRA TODA LA CONEXION

?>