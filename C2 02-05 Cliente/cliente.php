<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_02_05 (solo este video)

-En este práctico veremos que podemos obtener informacion de la IP de nuestros usuarios asi como tambien datos de su SO y navegador.

ACLARACION: 

-->

<?php

    
    @$tuip = getenv('REMOTE_ADDR'); //REMOTE_ADDR:Es la dirección remota que me estoy conectando.

    //Para evitar los warning o noticias que aparecen antes de la ip resultando, ponemos el @ en la variable $tuip.

    /*IMPORTANTE: 
    -En el video sino ponemos comillas en REMOTE_ADDR no funciona.
    -Mostrara como resultado ::1, a diferencia de 127.0.0.1 y esto es porque emite la dirección IP de la máquina local como ::1; ::1 es la representación IPv6 del localhost.
    */

    echo "Tu ip es: ".$tuip;

    echo "<br>";

    /* --------------------------------------------------------------------

    -con esta linea $_SERVER["HTTP_USER_AGENT"] podremos saber cual es nuestro SO y navegador que usamos para ejecutar nuestro archivo PHP. Indicando como resultado: 

    Y tu sistema operativo y navegador es: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36

    */


    $tunavegador = $_SERVER["HTTP_USER_AGENT"];

    echo "Y tu sistema operativo y navegador es: ".$tunavegador;



?>