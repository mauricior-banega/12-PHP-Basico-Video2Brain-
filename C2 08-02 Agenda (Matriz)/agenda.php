<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_08_02 al 02_08_03

-En este práctico explicaremos como crear una Agenda utilizando una Matriz con 2 índices de distinto tipo.

-Además en siguiente video explicara como realizar un bucle FOR del que podamos recorrer toda la matriz y mostrarlo agregando HTML mediante la aplicación de una tabla.

ACLARACIÓN: 

-->

<?php

/*Info:
Matrices Escalares: Aquellas cuyo indice son números.
Matrices Asociativas: Aquellas cuyo indice son cadenas.

----

"Antes de poner los indices escalares": El problema es que si dejamos solo nombre/apellido y email como indices es poco practico de administrarlos, ya que 3 personas tienen el mismo indice sin poderse diferenciar uno de otro si queremos obtener el datro de alguno.

-Por ello es que podemos crear otro indice, osea otra dimension más. Por ello creamos un indice numérico, que es distinto entre cada persona.

-Quedará una matriz de 2 dimensiones de tipo escalar y asociativa.

*/

$agenda [0] ['nombre'] = "Luis"; 
$agenda [0] ['telefono'] = 5415412342; 
$agenda [0] ['email'] = "luisito@gmail.com"; 

$agenda [1] ['nombre'] = "Miguel"; 
$agenda [1] ['telefono'] = 5416233455; 
$agenda [1] ['email'] = "miguelito@gmail.com"; 

$agenda [2] ['nombre'] = "Marta"; 
$agenda [2] ['telefono'] = 5414477889; 
$agenda [2] ['email'] = "martita@gmail.com"; 

echo $agenda[2]['nombre'];

for($indice=0; $indice<=2; $indice++)
{
    echo //Al recorrer la tabla imprimira cada valor de la matriz en formato HTML embebido, aplicando una tabla.
    '
        <table border=1 width=300px>
        <tr>
            <td>
                Nombre:
            </td>
            <td>'.$agenda[$indice]['nombre'].'</td>
        </tr>
        <tr>
            <td>
                Teléfono:
            </td>
            <td>'.$agenda[$indice]['telefono'].'</td>
        </tr>
        <tr>
            <td>
                Email:
            </td>
            <td>'.$agenda[$indice]['email'].'</td>
        </tr>
        </table>

    ';
}

?>