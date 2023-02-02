<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_04_01 hasta 02_04_02

-En este práctico veremos explicamos como se escriben/muestran los operadores aritmeticos en PHP.

ACLARACION: 

-->

<?php

    //OPERACIONES ARITMETICAS

    echo 3 + 3; //Suma
    echo "<br>";
    echo 3 - 2; //Resta
    echo "<br>";
    echo 4 * 2; //Multiplicación
    echo "<br>";
    echo 20 / 5; //División
    echo "<br>";
    echo 20 % 6; //Resto (de la división)
    echo "<br>";

    //Variables con POST-INCREMENTO

    $hola = 2;
    echo $hola++; //Mostrara 22, osea dos veces el 2 juntas.
    echo "<br>";

    //Variables con PRE-INCREMENTO

    $primera = 3;
    echo ++$primera; //Mostrara 34, porque es 3 es el valor seguido de la suma en 1 de ese valor. 
    echo $primera;
    echo "<br>";

    //Variables con PRE-DECREMENTO

    $segunda = 3;
    echo --$segunda; //Mostrara 2, porque es 3 - una unidad.
    echo "<br>";

    //Variables con POST-DECREMENTO

    $tercera = 3;
    echo $tercera--; //Mostrara 32, porque es 3 y muestra luego el nuevo valor de la variable que sera 2.
    echo $tercera;
    echo "<br>";


?>
