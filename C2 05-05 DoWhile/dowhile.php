<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_05_05 (solo este video)

-En este práctico explicaremos como es la estructura de control DO WHILE. Es una estructura similar a WHILE pero tiene una diferencia fundamental, while si es verdadera la condicion se ejecuta y si es falso no se ejecuta.
Mientras que dowhile funciona al reves, primero se ejecuta un codigo y luego una condicion para ver si es bucle se repite o finaliza.

-Lo que realiza en este caso es evaluar asi $variable es >2, como es falso cortará pero como do esta antes, imprimira "Hola" primero y luego ya no.

ACLARACIÓN: 

-->

<?php

$variable = 1;

do
{
    echo "Hola <br>";
} 
while ($variable >2);

echo "Ya he finalizado";


?>