
<?php

class BaseDatos extends SQLite3
{
    function __construct()
    {
        $this->open('bibliotecacd.db');
    }
}

//Podemos si queremos reemplazar la creacion de la dbo mediante la declaracion de la clase, indicando un include 'crearbiblioteca.php'; pero sucede que si lo hacemos volvera a ejecutar el archivo, intentando crear nuevamente la dbo. Pero podemos obviar el error que da, o bien desactivar comentando esa parte dela instruccion (que fue crear la dbo) desde el archivo "crearbiblioteca.php".


$db = new BaseDatos(); //Abrimos la dbo.


if($db)
{
    echo "<p>La base de datos fue abierta exitosamente</p>";
}
else
{
    echo "<p>ERROR al abrir la base de datos bibliotecacd.</p>";
}

echo "<table border=1><tr><td>Disco</td><td>Artista</td><td>Año<td/></tr>"; //Creamos una tabla para poder visualizar el contenido de la tabla que hasta ahora no habiamos podido ver ordenadamente. Pero podemos abrir la extension instalada en nuestro VSC:"SQLITE". Si ejecutamos ALT+SHIFT+P nos abre la consola de VSC, alli escribimos SQLITE y nos aparecen varias opciones donde podremos elegir que accion realizar con la dbo creada.


$resultado = $db->query('SELECT * FROM Discos'); 

/*Usando del WHERE en el SELECT: 
    $resultado = $db->query('SELECT * FROM Discos WHERE Artista="U2" ORDER BY Anio ASC'); 
*/

/*
-Otra forma de hacerlo mas corto; asi: Antes creabamos 

$consulta = 'SELECT * FROM Discos'; 
    y 
$resultado = $db->exec($consulta); 

-Pero podemos simplificarlo asi: $resultado = $db->query('SELECT * FROM Discos'); 
-Y luego directamente trabajar, si es un SELECT crear un array y utulizar el codigo que aparece en el while identico. De esta manera se codifica en SQLite3.

Fuente: https://www.php.net/manual/en/sqlite3result.fetcharray.php

*/
$data= array();

while ($fila= $resultado->fetchArray(1))
{   
    
    echo "<tr><td>".$fila['Disco']."</td><td>".$fila['Artista']."</td><td>".$fila['Anio']."</td></tr>";
    //echo $fila['Disco']." ".$fila['Artista']." ".$fila['Anio']."<br>";
    
}

echo "</table>";

//OLD   $db.close()
$db->close();
?>

