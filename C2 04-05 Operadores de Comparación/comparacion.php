<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_04_05 (solo este video)

-En este práctico veremos como trabajan  los operadores de comparacion (==,===,!=,!==, estructura If).

ACLARACIÓN: 

-->

<?php


echo 3 == 3;

//Doble igualdad: En este caso, imprime 1 que es igual a "verdadero booleano". Si fuera "falso" mostraria 0 o no se veria ningun dato.

echo 3 === "3";

//Triple igualdad: A de tener que ser del mismo valor, pero tambien del mismo tipo. Uno es cadena y el otro numero, por ello sera falso y no imprimirá.

echo 3 !=4 ;

//Diferencia o "diferente a": En este caso es cierto, 3 es distinta a 4, entonces imprime verdadero "1".

echo 3 !== "3";

//Doble diferencia: En este caso, es cierto que son iguales pero no son del mismo tipo entonces imprime verdadero "1".


/*-------------------------------

Ejemplificamos mediante la estructura if la comparación.

*/

if(3>2)

{echo "tres es mayor que dos";} 

else {"tres no es mayor que dos";}


?>