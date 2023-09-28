<?php 

final class ClaseBase{
    public function test(){
        echo "ClaseBase::test() llamada\n";
    }

    //Aqui da igual si se declara el metodo como final o no
    final public function moreTesting(){
        echo "ClaseBase::moreTesting() llamada\n";
    }
}

/*class ClaseHijo extends ClaseBase{
    public function test(){
        echo "ClaseHijo::tests() llamada \n";
    }
}*/

echo "<p>En este programa se crea una clase final, una clase que
hereda a una clase final no puede sobrescribir los metodos de la 
clase final, osea que los metodos son inmutables, he ahi el error
en la claseHijo ya que esta intentando sobrescribir la funcion test()</p>";

//$claseB = new ClaseBase();
//$claseB->test();

?>