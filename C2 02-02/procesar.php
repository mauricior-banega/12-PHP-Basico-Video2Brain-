<?php

//  Utilizando el metodo POST para guardar los variables ingresadas en el formulario, es la menera mas segura. Ya que protege escondiendo los datos ingresados del formulario en la cabecera de la pagina web, es decir no podemos verlas.

//Creamos la variable POST para que contenga cada valor de las variables.
//De esta manera ya no dara error ni aparecera vacio procesar.php sino que podra capturar cada valor de variable mediante el "name" que definimos para cada una: nombre y apellido.

//Introducimos unas cadenas de texto para dar mas sentido a lo que veremos concatenando la variable mediante un punto. Ademas de concatenar para nombre un retorno de carro.

echo "Tu nombre es:". $_POST['nombre']."<br>";
echo "Tu apellido es:". $_POST['apellido'];

/*

-Existe otra forma de procesar valores y es GET. Para utilizarlo deberamos tambien de indicarlo en el formulario.html; Ej:

En HTML <form action="procesar.php" method="GET">

Y en PHP echo "Tu nombre es:". $_GET['nombre'];

La diferencia radica en la seguridad, ya que este metodo si muestra los valores ingresados en las variables en la barra de direccion de la ruta al documento PHP y es algo que no queremos que suceda ya que deberian los datos de estar ocultos para que nadie mas lo vea; se vera:

http://localhost/Estudios/12-PHP%20B%C3%A1sico%20(Video2Brain)/12-PHP-Basico-Video2Brain-/C2%2002-02/procesar.php?nombre=Mauricio+Ruben&apellido=Banega

-De hecho si se editase la linea de comando "nombre=" y se pusiese Pedrito Perez, podremos con este metodo engañar a PHP con un dato incorrecto que editamos para mostrar la vulnerabilidad.

*/

?>