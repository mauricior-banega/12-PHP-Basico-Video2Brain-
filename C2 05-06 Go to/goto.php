<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_05_06 (solo este video)

-En este práctico explicaremos como es la estructura de control GO TO. Nos permite saltar de una parte a otra del programa.

-Lo que realiza en este caso es definir goto "marca", seguido de la impresion "Este texto me lo salto". Normalmente mostraria ese texto pero usando esto, va a imprimir a partir de la marca definida en adelante, salteando lo que hay antes.

ACLARACIÓN: 

-->

<?php

goto marca;

echo "Este texto me lo salto";

marca:

echo "Este texto que te muestro";

?>