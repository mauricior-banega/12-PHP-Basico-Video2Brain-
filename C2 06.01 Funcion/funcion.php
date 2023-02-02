<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_06_01 (solo este video)

-En este práctico explicaremos como podemos reutilizar grandes grupos de codigos almacenandonos en FUNCIONES (function).

-Lo que realiza en este caso es mostrar una serie de impresiones cuando se realiza el llamado a la funcion.

ACLARACIÓN: 

-->

<?php

function miFuncion() 
{
    echo "Yo soy yo <br>";
    echo "Tu eres tu <br>";
    echo "Nosotros somos nosotros <br>";
    
}

miFuncion(); //Llamado a la funcion

//Guardamos en memoria esta porcion de codigo que estara alojado en esta funcion, que usaremos cuando sea necesario hacerlo. Por eso es que no se imprime sino se llama a la funcion.

?>