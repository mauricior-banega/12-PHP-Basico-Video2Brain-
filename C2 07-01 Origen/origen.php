<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_07_01 (solo este video)

-En este práctico explicaremos como incluir mediante "include" un archivo PHP dentro de otro.

-Lo que realiza en este caso es imprimir un texto en un archivo "origen.php" pero a la vez realizar un llamado a leer tambien lo que contiene el archivo "incluido.php" que es tambien un texto. 

-Por siguiente explica que sucede si sucede que no encuentre el archivo que se quiere incluir, un "incluido2.php" que no existe. Este imprimira la primera oracion, luego dara error Warning pero si leera la segunda oracion, a diferencia del "require" que veremos en la sgte clase.

ACLARACIÓN: 

-->

<?php

echo "Yo soy el contenido original";

//include "incluido.php"; Comento para ejemplificar el error

include "incluido2.php"; //(1*)

echo "Mensaje ejecutado a pesar del Warning";

/*Ejecucion del navegador: 

Warning: include(incluido2.php): Failed to open stream: No such file or directory in E:\Facultad\Programas\XAMPP\htdocs\Estudios\12-PHP Básico (Video2Brain)\12-PHP-Basico-Video2Brain-\C2 07-01 Origen\origen.php on line 22

Warning: include(): Failed opening 'incluido2.php' for inclusion (include_path='E:\Facultad\Programas\XAMPP\php\PEAR') in E:\Facultad\Programas\XAMPP\htdocs\Estudios\12-PHP Básico (Video2Brain)\12-PHP-Basico-Video2Brain-\C2 07-01 Origen\origen.php on line 22
*/

?>