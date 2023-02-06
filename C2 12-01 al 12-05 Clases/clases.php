<!--

    12-PHP Básico (Video2Brain) - Todos los videos estan en carpeta: DVD/9430830/xxdata

Videos/Temas contenidos del Dashboard: 
    -Desde 02_12_01 al 02_12_05

-En este práctico explicaremos como crear un "objeto" y "clases". Con varios ejemplos de cada uno, incluida la explicacion de como crear un constructor, clases padre/hijas, herencia.

ACLARACIÓN: 

-->

<?php


//Video 02_12_01 

class primerObjeto //Objeto: primer Objeto
{

    //Los objetos, tienen atributos (variables) y métodos (funciones).
    var $variableuno;
    var $variabledos;

    //Funcion sin parámentro
    function metodo1() 
    {

    }

    //Funcion con parámentro
    function metodo2($parametro1,$parametro2)
    {
        
    }

}

//Video 02_12_02

//Las clases, suelen usar un método llamado "constructor" que se codifica: __construct. En el video para crear el constructor del ejemplo dice que debe terner el mismo nombre que la clase, pero eso NO VA MAS.


class dimeAlgo
{   

    function __construct($algo) //function dimeAlgo($algo) NO FUNCIONA
    {
        echo "Lo que te voy a decir es esto: ".$algo;
    }
}

$decir = new dimeAlgo("hola");


echo "<br>"."<br>";

//Video 02_12_03


class dimeAlgo2
{   
    var $atributo;
    function __construct($algo) //function dimeAlgo2($algo) NO FUNCIONA
    {
        $this->atributo = $algo;
        echo $this->atributo;
    }
}

$decir2 = new dimeAlgo2("Hola");

echo "<br>"."<br>";


//Video 02_12_04
//HERENCIA DE CLASES

class saluda //Clase Padre
{   
    
    function saludo(){echo "Yo te saludo"."<br>";}
    function adios(){echo "Yo te digo adios."."<br>";}
}

class subsaluda extends saluda //Clase Hija, se codifica mediante extends; hereda metodos y propiedades de clase padre. Pudiendo extenderla con nuestros metodos y propiedades.
{   
    
    var $atributo;
    function holados()
    {}
}

$instancia = new saluda(); //Instancia de saluda

$ins = $instancia->saludo(); //De la instancia, llama a la funcion saludo; muestra: Yo te saludo

$ins2 = $instancia->adios(); //De la instancia, llama a la funcion adios; muestra: Yo te digo adios

//Instancia creada y llamado de funcion desde clase hija a funcion del padre.
$inshija = new subsaluda(); 
$ins3 = $inshija->saludo();

echo "<br>"."<br>";
//No esta en los videos pero si en archivos_base/oo del práctico. Asique lo agrego.


class Persona{
  public $nombre;
  public $edad;
  
  function dameNombre($unNombre){ //Metodo que carga el nombre "set"
  $this->nombre = $unNombre;
	}
  
  function dimeNombre(){ //Metodo que muestra el nombre "get"
  return $this->nombre;
	}
}

$manolo = new Persona(); 
$manolo->dameNombre('Manolo');

echo $manolo->dimeNombre(); //Muestra al objeto con el metodo que devuelve el valor que contiene la variable "nombre".




?>