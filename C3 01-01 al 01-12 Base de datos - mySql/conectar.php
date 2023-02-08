<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 03_01_01 al 03_01_12

-En este práctico explicaremos como crear una base de datos administradora en base a una AGENDA. Realizaremos varias acciones donde mediante PHP podremos de administrar esa informacion. 

ACLARACIÓN: 
1 - Este practico sera cambiada su estructura, ya que no es compatible con el PHP de este año 2023. Como es de esperar tras 20 años de acambios y modificaciones es que creare, realizare busquedas para transcribir el codigo y funcione.
-Cada linea distinta cambiada, comentare ademas de la funcionalidad, cual es el codigo viejo para tener de referencia.
2 -  Para crear el servername en el practico pone "localhost" unicamente, pero en este no funciona, la que si funciona es esta que dejaremos. Tener en cuenta poner el servidor+puerto: localhost:3306.

-->

<?php

/*MEDIANTE PHP CREAREMOS dbo AGENDA, Y LA TABLA DE ELLA,"miagenda". EN ESTA TABLA DEFINIREMOS LOS CAMPOS QUE TENDRA*/

    //CREAMOS LA CONEXION

$servername = "localhost:3306";
$database = "video2brain";
$username = "video2brain";
$password = "video2brain";

$mysqli = new mysqli($servername, $username, $password, $database);
//OLD $conexion = mysql_connect ("localhost","video2brain","video2brain");


    // VERIFICAMOS LA CONEXION
if (!$mysqli) {
    die("Conexion fallida: " . mysqli_connect_error()); //OLD . mysql_error();
}

echo "Conexion exitosa";



    //CREAMOS LA DBO
    
//Importante: De estab manera creamos una tabla en la dbo, pero si volvemos a ejecutarla dará error ya que si se ejecuto una vez significa que ya se creo, y si ejecuta una segunda vez dará este error indicando que ya existe. Como ya esta creada "primeraBase" la comentamos para que podamos ejecutar las otras funciones.

/*

if ($mysqli->query("CREATE DATABASE agenda")) {     //OLD mysql_query("CREATE DATABASE agenda",$mysql)
    printf("dbo primeraBase creada correctamente.<br />");
 }
 if ($mysqli->error) {      //OLD mysql_error();
    printf("No se pudo crear dbo: %s<br />", $mysqli->error);
 }

        //1º Preparo esta peticion: Seleccionamos la dbo.
    
    mysqli_select_db($mysqli,"agenda"); //OLD mysql_select_db("agenda",$mysql);

        //2º Luego preparamos el comando crear la tabla.

    
    //CREAMOS LA TABLA

    $sql = "CREATE TABLE miagenda
    (   
        personaID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (personaID),
        Nombre varchar(15),
        Apellido varchar(15),
        Edad int,
        Telefono int
    )";

        //3º Ejecuto la peticion

    $mysqli->query($sql);      //OLD mysql_query($sql,$conexion);

*/


mysqli_close($mysqli); //CIERRA TODA LA CONEXION     //OLD  mysql_close($mysqli);

?>

