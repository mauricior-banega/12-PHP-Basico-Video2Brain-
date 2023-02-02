<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_05_01 (solo este video)

-En este práctico explicaremos como es la estructura básica de un IF/ELSE.


ACLARACIÓN: 

-->

<?php

$miVariable = "rojo";

if($miVariable == "rojo")
{
    echo "El color si que es rojo";
}
else
{
    echo "El color parece que no coincide";
}

//Imprime "El color si que es rojo" porque es verdadero ya que $miVariable es ciertamente color "rojo". Pero si modificamos y ponemos "azul" pasaremos por else mostrando  "El color parece que no coincide".

?>