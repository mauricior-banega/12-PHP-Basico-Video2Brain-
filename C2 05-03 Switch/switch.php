<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_05_03 (solo este video)

-En este práctico explicaremos como es la estructura de control SWITCH. Puede hacerse mediante una serie de for/else pero de esta manera es mucho mas practica.
-Lo que realiza es dada una condicion evaluarla segun los casos que se definan. Lo que hace el programa aqui es testear la variable y evaluarla si es verdadera o falsa y mostrar el resultado.

ACLARACIÓN: 

-->

<?php

$variable = 1;

switch ($variable)
{
    case (1):
            echo "La variable es igual a 1";
            break;
    case (2):
            echo "La variable es igual a 2";
            break;
    case (3):
            echo "La variable es igual a Hola Mundo";
            break;

            //Si variable fuese 3 imprimiria "La variable es igual a Hola Mundo"
}

?>