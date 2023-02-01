<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_02_01 (solo este video) 

-En este práctico veremos un archivo variables.php. Este archivo sirve para alojar información

-->

<?php

//En PHP no es necesario inicializarlas las variables antes de rellenarlas. Directamente le asignamos un valor e interpretara que "tipo" de variable es.

$miVariable = "Hola variable";

$miValor = 2;

//Si ejecutamos no veremos nada en la pagina si ejecutamos, solamente creamos un espacio de memoria que carga con una caderna el valor pero sin ser mostrado.

//Pero para hacerlo, hacemos la impresion mediante el comando echo + variable.

echo $miVariable;

//Tambien como vimos podemos imprimir variables numericas y hasta realizar un calculo utilizando echo.

echo "<br>";

echo 3 * $miValor;

?>