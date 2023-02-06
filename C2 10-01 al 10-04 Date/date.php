<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_10_01 al 02_10_04

-En este práctico explicaremos la propiedad "date()" Ademas, como mostrar fechas en castellano. Ya que las funciones que se usan para obtenerlo son el ingles.

-Lo que realizamos en este práctico es crear 2 switch cambiadores de idioma, uno para los dias de la semana y otro para los meses.

ACLARACIÓN: 

-->

<?php

//Explicamos todas las formas de uso para "date()", siempre devuelve el dato a consultar en Ingles.

echo date("d"); //Muestra el nº del dia, con 2 digitos. Si fuera de un digito completa con 0

echo "<br>";

echo date("j"); //Muestra el nº del dia, pero con un solo digito si fuese de uno, no agrega 0.

echo "<br>";

echo date("D"); //Muestra que dia de la semana es, pero con 3 digitos Ej:Sat, Wed, Mon, etc.

echo "<br>";

echo date("l"); //Muestra que dia de la semana es, completa Ej:Saturday, Wednesday, Monday, etc.

echo "<br>";

echo date("N"); //Muestra que nº del dia de la semana es. Osea, si la semana tiene 7 dias, nos indica si es 1,2,3,4,5,6 o 7.

echo "<br>";

echo date("w"); //Muestra que nº del dia de la semana es; idem a "N".

echo "<br>";

echo date("z"); //Muestra que nº del dia, desde que empezo el año estamos. Partiendo desde el 1 Enero como 0 inicial.

echo "<br>";

echo date("W"); //Muestra que nº de semana es; desde que empezo el año estamos. Tomando desde el 1 al 7 de Enero como semana 0. 

echo "<br>";

echo date("F"); //Muestra que mes es, parabra completa.

echo "<br>";

echo date("m"); //Muestra que mes es, expresado en nº.

echo "<br>";

echo date("M"); //Muestra que mes es, solo las primeras 3 letras.

echo "<br>";

echo date("n"); //Muestra que mes es, expresado en nº, pero sin el 0 para 1 digito.

echo "<br>";

echo date("t"); //Muestra la cantidad de dias que tiene el mes en que me encuentro.

echo "<br>";

echo date("Y"); //Muestra el año en nº, todos los digitos.

echo "<br>";

echo date("y"); //Muestra el año en nº, unicamente los ultimos 2 digitos.

echo "<br>";

echo date("L"); //Muestra si el año es o no bisiesto. Si es verdadero muestra 1 sino falso 0.

echo "<br>";

echo date("c"); //Muestra la fecha en formato ISO8601, es decir: año, mes, dia, min, seg y el Greendwitch Meridian Time (diferencia con la hora respecto al meridiano).

echo "<br>";

echo date("U"); //Muestra cuantos segundos pasaron desde la Época Unix (1 de Enero del 1970 00:00:00 GMT). Sirve para establecer fechas en base de datos por ejemplo.

echo "<br>";

echo date("a"); //Muestra si estamos en pm o am. Si fuese "A" mayúscula muestra el dato en mayus también.

echo "<br>";

echo date("B"); //Muestra la hora de Internet en formato Swatch Internet Time (000 hasta 999).

echo "<br>";

echo date("g"); //Muestra la hora del dia en formato de 12 horas. Sin 0 inicial para 1 digito.

echo "<br>";

echo date("G"); //Muestra la hora del dia en formato de 24 horas. Sin 0 inicial para 1 digito.

echo "<br>";

echo date("h"); //Muestra la hora del dia en formato de 12 horas, con un 0 inicial para 1 digito.

echo "<br>";

echo date("H"); //Muestra la hora del dia en formato de 24 horas, con un 0 inicial para 1 digito.

echo "<br>";

echo date("i"); //Muestra los minutos, con 0 inicial.

echo "<br>";

echo date("s"); //Muestra los segundos, con 0 inicial.

echo "<br>";

echo date("u"); //Muestra los micro-segundos, con 0 inicial.

echo "<br>";

echo date("e"); //Muestra la Zona horaria estamos ej: Europe/Berlin.

echo "<br>";

echo date("I"); //Muestra si estamos en horario reducido de sol "0 o 1", dando primavera o verano 1, y otoño o invierno 0.

echo "<br>";

echo date("O"); //Muestra la zona horaria en la que estoy, respecto al Greendwitch Meridian Time, ej: +0100.

echo "<br>"."<br>";


//FUNCION QUE CAMBIARÁ EL IDIOMA: DE INGLES A ESPAÑOL, LA FECHA.

function dameTiempo(){

    //Condicion del switch: Si date es "L", por ello cambia los dias de semana.
    switch(date("l"))
    {
        case "Monday":
                    $dia = "Lunes";
                    break;
        case "Tuesday":
                    $dia = "Martes";
                    break;
        case "Wednesday":
                    $dia = "Miercoles";
                    break;
        case "Thursday":
                    $dia = "Jueves";
                    break;
        case "Friday":
                    $dia = "Viernes";
                    break;
        case "Saturday":
                    $dia = "Sábado";
                    break;
        case "Sunday":
                    $dia = "Domingo";
                    break;
    }

    //Condicion del switch: Si date es "F", por ello cambia el mes del año.
    switch(date("F"))
    {
        case "January":
                    $mes = "Enero";
                    break;
        case "February":
                    $mes = "Febrero";
                    break;
        case "March":
                    $mes = "Marzo";
                    break;
        case "April":
                    $mes = "Abril";
                    break;
        case "May":
                    $mes = "Mayo";
                    break;
        case "June":
                    $mes = "Junio";
                    break;
        case "July":
                    $mes = "Julio";
                    break;
        case "August":
                    $mes = "Agosto";
                    break;
        case "September":
                    $mes = "Septiembre";
                    break;
        case "October":
                    $mes = "Octubre";
                    break;
        case "November":
                    $mes = "Noviembre";
                    break;
        case "December":
                    $mes = "Diciembre";
                    break;
    }

            // echo "Hoy es ".date("D").", ".date("j")." de ".date("F")." de ".date("Y"); 

    //De esta manera muestra la fecha en Ingles: Hoy es Mon, 6 de February de 2023. Entonces mediante el switch captaremos cada dia de la semana y lo pasaremos a Español.

             echo "Hoy es ".$dia.", ".date("j")." de ".$mes." de ".date("Y"); 

}

dameTiempo(); //Hacemos el llamado de la funcion, sino no mostrara nada.

?>