
<?php

class BaseDatos extends SQLite3
{
    function __construct()
    {
        $this->open('bibliotecacd.db');
    }
}


$db = new BaseDatos(); //Abrimos la dbo.


if($db)
{
    echo "<p>La base de datos fue abierta exitosamente</p>";
}
else
{
    echo "<p>ERROR al abrir la base de datos bibliotecacd.</p>";
}

$resultado = $db->query('UPDATE Discos SET Artista="Queen" WHERE Artista="Queeen"'); //Consulta

//Hago por mi parte un IF verificador, para saber si realizo correctamente el UPDATE o no.(no esta en el video). Lo mismo que hicimos para el IF de $db.

if ($resultado)
    echo 'La actualizacion en la dbo se realizo correctamente';
else
    echo 'Ohps, a ocurrido un error y no llego a actualizarse la consulta.';

    $db->close();
    
?>

