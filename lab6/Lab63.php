<?php
include("class_lib63.php");

//Ejempl de uso de la clase Padre
$soporte1 = new soporte("The Soccer Game", 22, 3);
echo "<br>" . $soporte1->titulo;
echo "<br>" . $soporte1->dame_precio_sin_itbm() . " dolares";
echo "<br>Precio: " . $soporte1->dame_precio_con_itbm() . " dolares";

//Ejemplo de uso de la clase hija 1
$mivideo = new video("Los otros", 22, 4.5, "115 minutos");
echo "<br><br>";
echo "<br>" . $mivideo->titulo;
echo "<br>Precio: " . $mivideo->dame_precio_sin_itbm(). " dolares";
echo "<br>Precio ITBM incluido: " . $mivideo->dame_precio_con_itbm(). " dolares";
echo "<br>" . $mivideo->imprime_caracteristicas();

//Ejemplo de uso de la clase hija 2
$mijuego = new juego("Fifa 18", 21, 2.5, "Xbox 360", 1, 2);
$mijuego->imprime_caracteristicas();
$mijuego->imprime_jugadores_posibles();
echo "<p>";
$mijuego2 = new juego("Fifa 19", 27, 3, "PS4", 1, 2);
echo "<br>" . $mijuego2->titulo . "<br>";
$mijuego2->imprime_jugadores_posibles();

?>