<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_07_03 (solo este video)

-En este práctico explicaremos el funcionamiento de "includeonce". Funciona similar a "include", de hecho en este 1º Caso, toma el valor de $fruta de variables.php cuyo valor es manzana (punto 1). Luego declara nuevamente la misma variable pero con valor pera, pero en (el punto 3) asigna de nuevo el valor del llamado que era manzana, por lo tanto imprime manzana.

-Pero para que no suceda esto de que en un archivo extenso modifiquemos el valor de una variable mediante muchos includes diseminados en todo el archivo y cause problemas, es que se usa "includeonce". Explicamos en 2º Caso. La variable es manzana (punto 1), pero luego pasa a ser pera (punto 2), luego el 2so include "evalua" si hay otro include con variable (variable.php), como es cierto que existe pasa a no trabajar, es decir no asigna manzana al valor de la variable que era pera (punto 3), entonces imprime la ultima asignacion que es pera.

ACLARACIÓN: 

-->

<?php

/*1º Caso

include ("variables.php"); //punto 1

$fruta = "pera"; //punto 2

include ("variables.php"); //3

echo $fruta; //4

*/

//2º Caso

include_once ("variables.php"); //punto 1

$fruta = "pera"; //punto 2

include_once ("variables.php"); //3

echo $fruta; //4



?>