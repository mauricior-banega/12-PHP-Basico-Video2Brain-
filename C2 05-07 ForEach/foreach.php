<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_05_07 (solo este video)

-En este práctico explicaremos como es la estructura de control FOREACH, sirve principalmente para recorrer uno a uno el indica de una matriz.

-Lo que realiza en este caso es recorrer cada indice imprimiendo que se ira guardando en la variable $valor. Cortara el ciclo una vez que lo recorra de forma completa.

ACLARACIÓN: 

-->

<?php

$matriz = array ("coche","casa","moto","mundo");

foreach($matriz as $valor)
{
    echo $valor."<br>";
}

?>