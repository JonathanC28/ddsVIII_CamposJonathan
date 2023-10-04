<?php 
if(array_key_exists('enviar', $_POST)){
    include('class_lib76.php');
    $diam = $_POST['diam'];
    $altu = $_POST['altu'];

    $cil = new Cilindro($diam, $altu);

    $volumen=$cil->calc_volumen();
    $area=$cil->calc_area();

    echo "<br> El volumen del cilindro es de " . $volumen . "metros cuadrados";
    echo "<br> El area del Cilindro es de " . $area . "metros cuadrados";
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 7.7</title>
</head>
<body>
    <form name="formularioDatos" action="Lab77.php" method="post">
        <p>CALCULO DE VOLUMEN Y AREA DE UN CILINDRO</p>
        <br>
        Introdduzca el diametro en metros: <input type="text" name="diam" value="">
        <br><br>
        Introduzca la altura en metros: <input type="text" name="altu" value="">
        <input type="submit" value="Calcular" name="enviar">
    </form>
</body>
</html>

<?php 
}
?>