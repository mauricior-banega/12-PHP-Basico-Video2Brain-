<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 03_02_01 (solo este video)

-En este práctico explicaremos el Script PHP "fwrite" & "fopen". Basicamente nos sirven para crear texto en un archivo, es decir escribir algo en el documento text.txt que creamos.

ACLARACIÓN: 

-->

<?php

$archivo = "text.txt"; //Variable que toma el valor del archivo
$contenido = "Este es el contenido"; //Variable que toma el valor del contenido.


$manejador = fopen($archivo,'w+'); /*fopen:Script PHP que abre el archivo para despues ser editado. Se pasan como paramentro el nombre del archivo y el tipo de lectura o escritura que voy a hacer "a+". Comentamos los tipos que hay:

    'a+'- Escribe al final del texto o escribe pegado a lo que ya estaba escrito.
    'w+'- Sobre escribe directamente el texto.
*/
fwrite($manejador,$contenido);//fwrite:Script PHP que ejecuta el escribir en el archivo.

?>