<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_03_01 (solo este video)

-En este práctico veremos explicamos como utilizar comillas para mostrar texto en la pagina PHP.

ACLARACION: 

-->

<?php

    echo "Soy una cadena <br>"; //Cadena con comillas dobles
    echo 'Soy una cadena <br>'; //Cadena con comillas simples

    //Pero so ponemos: echo "Soy una "cadena"; el programa no sabra interpretar a que pertenece cadena justamente, si variable o funcion o que. Por ello es podemos alternar ambas comillas para dar logica y que no de error.

    echo "Soy una 'cadena'<br>"; //Cadena con comillas dobles y simples dentro. Tambien funciona al revés. Empezando con simples y dentro dobles. 

    //Suponiendo que se esta OBLIGADO a usar comillas dobles o simples en ambos casos, para seguir indicando que cadena sera parte del texto y no de alguna variable o algo, se usan las "contra barras". Esta se realiza en teclado: ALT+92.

    echo "Soy una \"cadena\" y estoy obligado a usarla <br>";



?>