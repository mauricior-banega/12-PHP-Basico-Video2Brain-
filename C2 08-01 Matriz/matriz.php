<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_08_01 (solo este video)

-En este práctico explicaremos para que sirve una MATRIZ. Basicamente en ella podemos alojar informacion en diferentes pasos (indices), de una misma dimensión de una variable, consiguiendo asi una matriz uni-dimensional. Esta estructura nos servira mucho para manejar datos en PHP.

-Lo que realizamos en este práctico es como crear una matriz con indices. Hacemos el llamado del indica 1, pero luego tambien mediante un FOR podemos recorrer todos los indices, imprimiendo asi todos los valores de la matriz.

-Del FOR dara como impresion todas las frutas pero ademas veremos 3 "Warning" que nos indica que no existen mas valores en la matriz.

Warning: Undefined array key 3 in E:\Facultad\Programas\XAMPP\htdocs\Estudios\12-PHP Básico (Video2Brain)\12-PHP-Basico-Video2Brain-\C2 08-01 Matriz\matriz.php on line 23

ACLARACIÓN: 

-->

<?php

$fruta [0] = "manzana"; //Matriz, misma variable con indice 0.
$fruta [1] = "pera"; //Matriz, misma variable con indice 1.
$fruta [2] = "platano"; //Matriz, misma variable con indice 2.

for($numero=0;$numero<=5;$numero++)
{ echo $fruta[$numero]."<br>";}

echo $fruta [0]; //Impresion de la matriz con indice 0 aloja el valor: "manzana".

?>