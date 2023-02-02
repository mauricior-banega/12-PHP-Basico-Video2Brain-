<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_05_04 (solo este video)

-En este práctico explicaremos como es la estructura de control WHILE. Es similar a IF pero tiene menos requerimientos.

-Lo que realiza es dada una condicion ejecutar la instruccion establecida mientras esa condicion se cumpla.

ACLARACIÓN: 

-->

<?php

$variable = 0;


while($variable<=10)
{
    echo $variable." Hola <br>";
    $variable = $variable + 1; //O también $variable++;

    //Sino incrementamos $variable siempre será 0 entonces creara un nuble infinito que hara "tildar" el navegador.
}

?>