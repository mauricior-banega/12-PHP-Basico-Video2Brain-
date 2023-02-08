<?php

$archivologs = "logs.dat";
$manejador = fopen ($archivologs,"r"); //Abrimos el documento ya creado, y "r" lee/read unicamente el archivo.

echo '<table width=100% border="1">';

while ($datos = fgetcsv ($manejador, 1000000, "|")){
//fgetcsv: Obtiene una línea de un puntero a un fichero y la analiza en busca de campos CSV
//campos CSV: Esta son por ej las comas (,) o en este caso (|),entre otros.
//Mediante el "while", se guardan en datos los valores obtenidos y le da un indice. Cada uno de ellos alojara el tipo de archivo, guardandolo en una variable segun corresponda.


$marcadetiempo = $datos[0];
$anyo = $datos[1];
$mes = $datos[2];
$dia = $datos[3];
$hora = $datos[4];
$minuto = $datos[5];
$segundo = $datos[6];
$navegador = $datos[7];
$ip = $datos[8];

//Una vez todos los valores date() ya almacenados en las variables, imprimimos en columnas/filas de la tabla creada.

echo'
<tr>
	<td border="1">'.$marcadetiempo.'</td>
	<td border="1">'.$anyo.'</td>
	<td border="1">'.$mes.'</td>
	<td border="1">'.$dia.'</td>
	<td border="1">'.$hora.'</td>
	<td border="1">'.$minuto.'</td>
	<td border="1">'.$segundo.'</td>
	<td border="1">'.$navegador.'</td>
	<td border="1">'.$ip.'</td>
</tr>
';


}

echo '</table>';
fclose ($manejador); //Cierra al archivo que habia sido abierto.
?>