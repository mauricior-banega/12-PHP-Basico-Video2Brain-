<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 04_01_01 al 04-07-02

-Seguimos aplicando SQLite, en este practico crearemos un gestion de paginas web, donde alojaremos las favoritas "favoritosOnline.php". En el gestionaremos tablas para las paginas/usuarios y logueos.

-Explicamos de ante mano que las codificaciones del video la mayoria estan obsoletas y fueron reemplazadas por nuevo codigo. Dejamos especificado mediante OLD comentado.

-Como en este practico todas las consultas las realizamos en el mismo archivo "instalacion.php" al realizar la coneccion y crear a BaseDatos, es necesario crear otra clase distinta, da error sino. Por ello para cada consulta donde tenemos que crear una clase para abrir/crear la dbo es que denominamos las clases distintas en cada caso.



[Instalamos una extension de SQLITE que podemos gestionar desde Visual Studio Code, mas info en el archivo "verbiblioteca.php" del práctico "C3 02-03 al 03-08 Sqlite".]

[   MEJORAS DE CODIGO:
Linea EJ:
    $conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");
Linea EJ:
    if($conexion){echo "<p>La base de datos fue abierta exitosamente</p>";}
Linea EJ (principal.php):
    $resultado = $conexion->query("SELECT * FROM favoritos WHERE usuario='jocarsa' AND contrasena='jocarsa';"); 
]

ACLARACIÓN IMPORTANTE: 

-(1*) Podemos reemplazar la linea de codigo de creacion/abrir dbo que consiste en crear una clase mediante un constructor Ej:

                class BaseDatos extends SQLite3
                {
                    function __construct()
                    {
                        $this->open('favoritos.db');
                    }
                }

. Sino que directamente ponemos la siguiente linea y tambien se creará, Ej: 
            
                $conexion = new SQLite3('favoritos.db');

-->

<?php

//CREAR UNA TABLA DE FAVORITOS-----------------------------------------------------------
//Conexion---------------------------------

//OLD $conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');

/*  (1*)
    class BaseDatos extends SQLite3
{
    function __construct()
    {
        $this->open('favoritos.db');
    }
}
*/

$conexion = new SQLite3('favoritos.db') or die ("Ha sido imposible establecer la conexion");

// $conexion = new BaseDatos(); -En este practico reemplazamos la creacion de la clase para crear la dbo, sino que en la misma declaracion tambien puede crearse y es mas corto, asique usaremos este método.

if($conexion)
{echo "<p>La base de datos fue abierta exitosamente</p>";}

//Al else este podemos no ponerlo tambien porque si definimos el "or die" ya podremos ver el aviso sino conectase. En la misma linea anterior.

else{echo "<p>ERROR al abrir la base de datos favoritos.db.</p>";}

//Crear tabla--------------------------------- ESTA CODIF DE TABLA, ANDA TAMBIEN
$consulta = 
<<<SQL

CREATE TABLE favoritos(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
titulo Char (40) Not Null,
direccion Char (100) Not Null,
categoria Char (40),
comentario Char (200),
valoracion Int

);

SQL;
//Insertar contenido en la tabla--------------------
            // OLD  $resultado = sqlite_exec($conexion, $consulta);

            $resultado = $conexion->exec($consulta);

//Podriamos haber definido la creacion de la tabla y el insertar contenido mediante, una instruccion similar al anterior practico Ej: $resultado = $db->query('SELECT * FROM Discos');

//Cerrar la conexion---------------------------------

        // sqlite_close($conexion); NO ANDA
$conexion->close();




//CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS--------------------------------------
//Establecer
            //OLD   $conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
/* (1*)
            class BaseDatos2 extends SQLite3 //Creamos otra clase (1*)
            {
                function __construct()
                {
                    $this->open('favoritos.db');
                }
            }
            
            $conexion = new BaseDatos2();
*/
    $conexion = new SQLite3('favoritos.db');

            if($conexion)
{
    echo "<p>La base de datos fue abierta exitosamente</p>";
}
else
{
    echo "<p>ERROR al abrir la base de datos favoritos.db.</p>";
}

//Preparar
$consulta = 
<<<SQL
INSERT INTO favoritos VALUES ('jocarsa','jocarsa','Google','http://www.google.com','Tecnologia','Este es un buscador muy famoso',10);
INSERT INTO favoritos VALUES ('jocarsa','jocarsa','JOCARSA','http://www.jocarsa.com','Tecnologia','Esta es mi pagina',10);
SQL;
//Insertar
$resultado = $conexion->exec($consulta);
//Cerrar
        // sqlite_close($conexion); NO ANDA

$conexion->close();




//CREAR UNA TABLA DE USUARIOS------------------------------------------------------------
//Conexion---------------------------------

    $conexion = new SQLite3('favoritos.db'); //(1*)

//Crear tabla---------------------------------
$consulta = 
<<<SQL

CREATE TABLE usuarios(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
nombre Char(40) Not Null,
apellido Char(100) Not Null,
edad Int,
permisos Int /*Permisos de Administrador*/


);

SQL;
//Insertar contenido en la tabla--------------
$resultado = $conexion->exec($consulta);
//Cerrar la conexion--------------------------
        // sqlite_close($conexion); NO ANDA

$conexion->close();




//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS--------------------------------------
//Establecer

    $conexion = new SQLite3('favoritos.db'); //(1*)

//Preparar
$consulta = 
<<<SQL
INSERT INTO usuarios VALUES ('jocarsa','jocarsa','Jose Vicente','Carratala',32,1);

SQL;
//Insertar
$resultado = $conexion->exec($consulta);
//Cerrar
        // sqlite_close($conexion); NO ANDA





//CREAR UNA TABLA DE LOGS------------------------------------------------------------
//Conexion---------------------------------

    $conexion = new SQLite3('favoritos.db'); //(1*)

//Crear tabla---------------------------------
$consulta = 
<<<SQL

CREATE TABLE logs(

utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(50),
navegador Char(100),
usuario Char(40),
contrasena Char(40)



);

SQL;
//Insertar contenido en la tabla--------------
$resultado = $conexion->exec($consulta);
//Cerrar la conexion--------------------------
        //NO ANDA sqlite_close($conexion);

$conexion->close();



//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS--------------------------------------
//Establecer

    $conexion = new SQLite3('favoritos.db'); //(1*)

//Preparar
$consulta = 
<<<SQL
INSERT INTO logs VALUES (000000000,2011,02,07,21,03,00,'127.0.0.1','chrome','jocarsa','jocarsa');

SQL;
//Insertar
$resultado = $conexion->exec($consulta);
//Cerrar
        //NO ANDA sqlite_close($conexion);

        $conexion->close();

?>
