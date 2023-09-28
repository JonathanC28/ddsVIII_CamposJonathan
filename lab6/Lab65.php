<?php 
class ClaseBase{

    public function test(){ //Funcion normal
        echo "ClaseBase::test() llamada\n";
    }
    final public function masTests(){ //Funcion final
        echo "ClaseBase::masTests() llamada\n";
    }
}

class ClaseHijo extends ClaseBase{
    
    //Funcion sobreescrita de la ClaseBase 
    
    /*public function masTests(){
        echo "ClaseHijo::masTests() llamada \n";
    }*/ 
}

echo "En este laboratorio podemos ver un error al momento de sobrescribir la funcion masTest(),
        la ClaseHijo esta heredando de la ClaseBase pero
        esta intentando modificar la funcion masTests() que es una
        funcion final, las funciones finales no pueden ser sobrescrito por una clase hija.";

?>