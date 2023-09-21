<?php

class cliente{

    //Atributos
    var $nombre;
    var $numero;
    var $peliculas_alquiladas;

    //Constructor
    function _construct($nombre, $numero){
        $this->nombre=$nombre;
        $this->numero=$numero;
        $this->peliculas_alquiladas=array();
    }

    //Destructor
    public function _destruct(){
        echo "<br>destruido: ". $this->nombre;
    }

    //Metodo
    public function dame_numero(){
        return $this->numero;
    }

}
    
    //Instacia que devolvio un valor
    /*$cliente1 = new cliente();
    $cliente1->nombre='Pepe';
    $cliente1->numero=1;*/

    //Instancia original
    $cliente1 = new cliente("Pepe",1);

    /* Instancia que devuelve valor
    $cliente2 = new cliente("Roberto", 564);
    $cliente2->nombre='Roberto';
    $cliente2->numero=564;*/
    $cliente2 = new cliente("Roberto", 564);

    //Mostramos el numero de cada cliente creado
    echo "<br> El identificador del cliente 1 es: " . $cliente1->dame_numero();
    echo "<br> El identificador del cliente 2 es: " . $cliente2->dame_numero();

?>