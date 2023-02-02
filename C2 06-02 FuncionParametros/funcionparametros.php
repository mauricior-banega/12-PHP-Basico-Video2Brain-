<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_06_02 (solo este video)

-En este práctico explicaremos la importancia de una FUNCION CON PARAMETROS.

-Lo que realiza en este caso es mostrar las tablas, para el el 1er ej solo una, la establecida y pasada como unico paramentro y 2do ej pasa la variable tambien pero esta es incrementada de forma cada vez que pasa por el for, de esta manera reutilizamos la funcion creada miTabla. Aqui yace la importancia de reutilizar codigo mediante funciones.

ACLARACIÓN: 

-->

<?php

//Con esta funcion preparo una tabla de multiplicar
function miTabla($numero) 
{
    for ($multiplicador=0; $multiplicador<=10; $multiplicador++)
    {
        echo $numero." x ".$multiplicador." = ".$numero*$multiplicador."<br>";
    }
    
}

//Con este for calculo todas las tablas de multiplicar
for ($otronumero=0; $otronumero<=10; $otronumero++)
{
    echo "Tabla del ".$otronumero."<br>";

    miTabla($otronumero); //Para el 2do ej; llamamos a la funcion ya creada miTabla, pero pasaremos valores de 0 a 10 por accion del for, donde $otronumero reemplazara a $numero, la variable que tenia la funcion anteriormente. De esta manera imprimira las tablas del 0 al 10.
}

//miTabla(5); //Para el 1er ej; llamamos a la funcion pasandole valor a la variable $numero. Comento para explicar el 2do ej



?>