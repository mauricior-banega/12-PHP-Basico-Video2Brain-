<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_07_02 (solo este video)

-En este práctico explicaremos como incluir mediante "require" un archivo PHP dentro de otro, pero que corta todo el codigo siguiente en caso de error, es decir dejara de leer lo que este por debajo, a diferencia del "include"

-Lo que realiza en este caso es imprimir el primer texto pero luego, al no encontrar el archivo, este corta todo el proceso sin poder mostrar el segundo texto. Muestra Fatal error

ACLARACIÓN: 

-->

<?php

echo "Yo soy el contenido original";

//require "incluido.php"; Comento para ejemplificar el error

require "incluido2.php"; //(1*)

echo "Mensaje ejecutado a pesar del Warning";

/*Ejecución de navegador:

Yo soy el contenido original
Warning: require(incluido2.php): Failed to open stream: No such file or directory in E:\Facultad\Programas\XAMPP\htdocs\Estudios\12-PHP Básico (Video2Brain)\12-PHP-Basico-Video2Brain-\C2 07-02 Require\origen.php on line 25

Fatal error: Uncaught Error: Failed opening required 'incluido2.php' (include_path='E:\Facultad\Programas\XAMPP\php\PEAR') in E:\Facultad\Programas\XAMPP\htdocs\Estudios\12-PHP Básico (Video2Brain)\12-PHP-Basico-Video2Brain-\C2 07-02 Require\origen.php:25 Stack trace: #0 {main} thrown in E:\Facultad\Programas\XAMPP\htdocs\Estudios\12-PHP Básico (Video2Brain)\12-PHP-Basico-Video2Brain-\C2 07-02 Require\origen.php on line 25

*/

?>