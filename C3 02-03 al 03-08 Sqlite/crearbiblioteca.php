
<?php


class BaseDatos extends SQLite3
{
    function __construct()
    {
        $this->open('bibliotecacd.db');
    }
}

$db = new BaseDatos();

if($db)
{
    echo "<p>La base de datos fue abierta exitosamente</p>";
}
else
{
    echo "<p>ERROR al abrir la base de datos bibliotecacd.</p>";
}

$consulta ='CREATE TABLE Discos
(
    Artista char(20) Not Null,
    Disco char(40),
    Anio integer
)
';

$resultado = $db->exec($consulta);

//$mysqli->query($sql); //Ejecutamos 



//-------------------------------------------------------------

//OLD $conexion = sqlite_open('bibliotecacd.db') VER;

/* ------------------------------------------------------------

Otra forma de hacerlo (crearbiblioteca2.php)

<?php
$bd = new SQLite3('mibdsqlite.db');

$bd->exec('CREATE TABLE foo (bar STRING)');
$bd->exec("INSERT INTO foo (bar) VALUES ('Esto es una prueba')");

$resultado = $bd->query('SELECT bar FROM foo');
var_dump($resultado->fetchArray());
?>

*/

$db->close();

?>