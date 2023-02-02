<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_04_06 (solo este video)

-En este práctico explicaremos como los operadores logicos nos permiten realizar una comparacion entre 2 o mas elementos, y devolver una respuesta en formato de verdadero o falso. Si es verdadero en el navegador aparecera "1" y si es falso "sera 0" y no mostrara nada. Esto ya lo vimos en el practico anterior y en otros casos.

-Hay 3 tipos de ellos y son: AND,NOT,OR.

ACLARACIÓN: 

-->

<?php


    $uno = 1;
    $dos = 2;
    $tres = 3;
    $cuatro = 4;
    $cinco = 5;
    $seis = 6;

    echo ($uno == 1 && $dos == 2); //Operador AND = verdadero

    echo ($tres == 2 || $cuatro == 4); //Operador OR = verdadero

    echo $cinco !== $seis; //Operador NOT = verdadero

?>