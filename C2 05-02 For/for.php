<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_05_02 (solo este video)

-En este práctico explicaremos como es la estructura de control FOR. En ella podemos controlar una serie de veces los paramentros que en ella establezcamos.

ACLARACIÓN: 

-->

<?php

for ($numero=0; $numero<=10; $numero++)
{
    echo "Hace ".$numero." veces que paso por aqui.<br>";
}

echo "La operacion a finalizado";

//Como paramentros podemos poner en el 1er termino otro valor distinto a 0, en el 2do cualquier valor tambien asi como en el 3ero decrementar o asignar el valor de esa variable donde intervenga alguna operacion aritmetica. Por ej: for ($numero=0; $numero<=10; $numero=$numero+2), entonces imprimira 0+2/2+2/4+2 etc.

?>