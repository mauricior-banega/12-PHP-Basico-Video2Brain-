<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 03_02_02 al 03_02_03.

-En este práctico explicaremos como crear una aplicacion PHP que se va a encargar de guardar el registro de una pequeña dbo "logs.dat", de quienes visitaron mi pagina web.

-Una vez creada "logs.dat" puede ser ejecutada como archivo .txt, pero es incomodo de leer ya que no tiene la estructura de una tabla en PHP para ser visualizada. Asique crearemos un archivo que ordenara los datos obtenidos de las visitas en una tabla "verlogs.php".

ACLARACIÓN: 

-->

<?php

$archivologs = "logs.dat"; //Archivo que crea el documento dbo, pero que aunno existe. Se creara cuando ejecutemos "logueador.php" una vez finalizado.


@$ip=getenv('REMOTE_ADDR'); //Obtenemos el IP, el @limpia cualquier error que nos devuelva la obtencion de la IP.  OLD @$ip = getenv(REMOTE_ADDR);
$navegador = $_SERVER["HTTP_USER_AGENT"]; //Obtenemos informacion sobre el navegador del visitante.



$contenido = date('U')."|".date("Y"."|"."m"."|"."d"."|"."H"."|"."i"."|"."s")."|".$navegador."|".$ip."\n"; //Guardamos en una variable el registro que obtenemos a partir de todos los date() concatenados.

$manejador = fopen ($archivologs, 'a+'); //Abrimos el documento, pero como nio existe lo CREA.
fwrite ($manejador,$contenido); //Escribe en "logs.dat" todo lo que esta en $contenido.

?>