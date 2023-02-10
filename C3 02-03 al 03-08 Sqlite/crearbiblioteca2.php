
<?php


$bd = new SQLite3('superlibros.db');

$bd->exec('CREATE TABLE foo (bar STRING)');
$bd->exec("INSERT INTO foo (bar) VALUES ('Esto es una prueba')");

$resultado = $bd->query('SELECT bar FROM foo');
var_dump($resultado->fetchArray());

$db->close();

?>