<?php

/*

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 04_05_01 al ?

-Seguimos aplicando SQLite, en este practico crearemos la base de datos y PHP, complementando asi al practico blog realizado por VideotoBrain en 1-HTML y CSS3 C4-08 Ejercicio\blog, pero con el index del curso. En otro momento aplicaremos correccion a todo el documento anteriormente creado transladando todos los conceptos al archivo propio.

-Explicamos de ante mano que las codificaciones del video la mayoria estan obsoletas y fueron reemplazadas por nuevo codigo. En el practico anterior favoritosOnline dejamos comentado cada trozo de codigo obsoleto para clarificar pero en este practico no lo dejaremos. Es decir reemplazamos directamente de manera que queda mas limpio el codigo.

-

ACLARACION SOBRE LA ESTRUCTURA DBO QUE APLICAREMOS:
(1*) La codificacion para peticion y ejecutar la haremos en la misma declaración. 


#### Crear la tabla de usuarios #####
-conexion
-peticion & ejecutar (1*)
-cerrar

#### Insertaremos contenido de prueba en la tabla de usaurios #####
-conexion
-peticion & ejecutar 
-cerrar

#### Crear la tabla config usuarios #####
-conexion
-peticion & ejecutar 
-cerrar

#### Insertaremos contenido de prueba en la tabla config usuarios #####
-conexion
-peticion & ejecutar 
-cerrar

#### Crear la tabla post #####
-conexion
-peticion & ejecutar 
-cerrar

#### Insertaremos contenido de prueba en la tabla config post #####
-conexion
-peticion & ejecutar 
-cerrar

#### Crear la tabla logs #####
-conexion
-peticion & ejecutar 
-cerrar

#### Insertaremos contenido de prueba en la tabla logs #####
-conexion
-peticion & ejecutar 
-cerrar

*/



//################  Crear la tabla de usuarios   #################
//conexion
$conexion = new SQLite3('database/blogs.db') or die('Ha sido imposible establecer la conexion'); //OJO, ACA NO HAY QUE AGREGAR ../

//peticion & ejecución
$resultado = $conexion->query("CREATE TABLE usuarios (
    usuario Char(40) Not Null,
    contrasena Char(40) Not Null,
    nombre Char(40),
    apellidouno Char(40),
    apellidodos Char(40),
    titulo Char(120),
    descripcion Char(1500),
    foto Char(40),
    webpersonal Char(80),
    email Char(80),
    permisos Int
    )");

//cerrar
$conexion->close();


//################  Insertaremos contenido de prueba en la tabla de usuarios   #################
//conexion
$conexion = new SQLite3('database/blogs.db') or die('Ha sido imposible establecer la conexion'); //OJO, ACA NO HAY QUE AGREGAR ../

//peticion & ejecución

$resultado = $conexion->query("INSERT INTO usuarios VALUES('jocarsa','jocarsa','Jose Vicente','Carratala','Sanchis','Creativo Multimedia','Descripcion','josevicentecarratala','http://www.jocarsa.com','info@jocarsa.com',1)");

//cerrar
$conexion->close();



//################  Crear la tabla config usuarios   #################
//conexion
$conexion = new SQLite3('database/blogs.db') or die('Ha sido imposible establecer la conexion'); //OJO, ACA NO HAY QUE AGREGAR ../

//peticion & ejecución

$resultado = $conexion->query("CREATE TABLE configusuarios (
    usuario Char(40) Not Null,
    piel Char(40),
    respuestas Char(40))");

//cerrar
$conexion->close();



//################   Insertaremos contenido de prueba en la configuracion de usuarios  #################
//conexion
$conexion = new SQLite3('database/blogs.db') or die('Ha sido imposible establecer la conexion'); //OJO, ACA NO HAY QUE AGREGAR ../

//peticion & ejecución
$resultado = $conexion->query("INSERT INTO configusuarios VALUES('jocarsa','default','si')");

//cerrar
$conexion->close();



//################  Crear la tabla posts   #################
//conexion
$conexion = new SQLite3('database/blogs.db') or die('Ha sido imposible establecer la conexion'); //OJO, ACA NO HAY QUE AGREGAR ../

//peticion & ejecución
$resultado = $conexion->query("CREATE TABLE posts(
    utc Int Not Null,
    anio Int,
    mes Int,
    dia Int,
    hora Int,
    minuto Int,
    segundo Int,
    usuario Char(80),
    titulo Char(120),
    subtitulo Char(200),
    icono Char(80),
    texto Char(4000),
    imagen Char(200),
    video Char(200),
    sonido Char(200))");

//cerrar
$conexion->close();

//################   Insertaremos contenido de prueba en la tabla posts  #################
//conexion
$conexion = new SQLite3('database/blogs.db') or die('Ha sido imposible establecer la conexion'); //OJO, ACA NO HAY QUE AGREGAR ../

//peticion & ejecución
$resultado = $conexion->query("INSERT INTO posts VALUES(00000000,2011,02,10,11,55,00,'jocarsa','Este es un primer post','Bienvenido a tu blog','josevicente','Este es el primer post','imagen','video','sonido')");

//cerrar
$conexion->close();



//################   Crear la tabla logs  #################
//conexion
$conexion = new SQLite3('database/blogs.db') or die('Ha sido imposible establecer la conexion'); //OJO, ACA NO HAY QUE AGREGAR ../

//peticion & ejecución
$resultado = $conexion->query("CREATE TABLE logs(
    utc Int Not Null,
    anio Int,
    mes Int,
    dia Int,
    hora Int,
    minuto Int,
    segundo Int,
    ip Char(80),
    navegador Char(300),
    usuario Char(80),
    operacion Char(80))");

//cerrar
$conexion->close();


//################   Insertaremos contenido de prueba en la tabla logs  #################
//conexion
$conexion = new SQLite3('database/blogs.db') or die('Ha sido imposible establecer la conexion');  //OJO, ACA NO HAY QUE AGREGAR ../

//peticion & ejecución

$resultado = $conexion->query("INSERT INTO logs VALUES(00000000,2011,02,10,11,55,00,'127.0.0.1','Chrome','jocarsa','crear')");

//cerrar
$conexion->close();


?>
