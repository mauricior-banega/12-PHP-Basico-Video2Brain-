
<?php


class BaseDatos extends SQLite3
{
    function __construct()
    {
        $this->open('bibliotecacd.db');
    }
}

$db = new BaseDatos();

if($db)
{
    echo "<p>La base de datos fue abierta exitosamente</p>";
}
else
{
    echo "<p>ERROR al abrir la base de datos bibliotecacd.</p>";
}

$consulta = 'INSERT INTO Discos VALUES
("Queeen","Queen","1973"),
("Queeen","QueenII","1974"),
("Queeen","A Night the Opera","1975"),
("U2","Boy","1980"),
("U2","October","1981"),
("U2","War","1983"),
("U2","Under a Blood Red Sky","1983")
';

//('Juan', 'Pérez', 30), ('Maria', 'García', 25), ('Pedro', 'Martín', 40);

/*
            'INSERT INTO Discos VALUES ("Queeen","QueenII","1974")';
            'INSERT INTO Discos VALUES ("Queeen","Sheer Heart Attack","1974")';
            'INSERT INTO Discos VALUES ("Queeen","A Night the Opera","1975")';
            'INSERT INTO Discos VALUES ("U2","Boy","1980")';
            'INSERT INTO Discos VALUES ("U2","October","1981")';
            'INSERT INTO Discos VALUES ("U2","War","1983")';
            'INSERT INTO Discos VALUES ("U2","Under a Blood Red Sky","1983")';
*/

$resultado = $db->exec($consulta);

$db->close();
// OLD sqlite_close($db);

?>