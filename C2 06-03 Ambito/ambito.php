<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_06_03 (solo este video)

-En este práctico explicaremos que en una funcion no podemos utilizar variables que han sido definidas fuera del ambito de ella, daria un error. Por lo tanto debe ser definida dentro o bien utilizar "global" + variable; de esta manera indicaremos al programa que utilice variables globales que han sido declaradas fuera.

-Lo que realiza en este caso es imprimir "Hola" pero esto se realiza porque se define global mas la variable, asi se incluye dentro de la funcion.

ACLARACIÓN: 

-->

<?php

$variable = "Hola";

function hola()
{   
    global $variable;
    echo $variable;
}

hola();

?>