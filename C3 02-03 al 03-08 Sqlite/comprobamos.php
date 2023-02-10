<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 03_02_03 al 03_03_08

-Aplicaremos el sistema de gestion "Sqlite", que combina alguna de las ventajas de "mysql" con otras de las ventajas del sistema "flatfile".
-Para ver si podemos usarlo explicaremos como usar phpinfo ,para saber si tenemos "Sqlite" para hacer el practico.

-Luego crearemos para ejemplificar, una Biblioteca de CDS de Musica en Sqlite, creamos entonces archivo "crearbibliteca.php" y desarrollamos.

-Cabe aclarar que lo explicado en el video esta roto, no funciona por lo que puede deberse a ser una version distinta o desactualizada la que usa para su explicacion. Por lo que reemplazo desde la web/fuente la estructura para crearla.

-Ademas, crearemos otro archivo "crearbiblioteca2.php" donde muestra otra manera de abrir la db. Sino esta creada la crea tambien.

-Instalamos una extension de SQLITE que podemos gestionar desde Visual Studio Code, mas info en el archivo "verbiblioteca.php".

ACLARACIÓN: 

-->

<?php

phpinfo(); //Nos indicara la informacion sobre la version y todo lo referido al PHP instalado. En este archivo lo usaremos para buscar mediante la ejecucion de F3 en la pagina del navegador donde aparezca la info, SQLITE.

//Alli veremos si esta enabled o disabled, si existe o no en nuestro servidor.

/* DATOS DE MI SQLITE:
pdo_sqlite
PDO Driver for SQLite 3.x	enabled
SQLite Library	3.36.0
*/

?>