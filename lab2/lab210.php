<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
        $persona = array(
            array( "nombre" => "Rosa", "estatura" => 168, "sexo" => "F"),
            array( "nombre" => "Ignacio", "estatura" => 175, "sexo" => "M"),
            array( "nombre" => "Daniel", "estatura" => 172, "sexo" => "M"),
            array( "nombre" => "Ruben", "estatura" => 182, "sexo" => "M")
        );

        echo "<br> DATOS SOBRE EL PERSONAL <br><br><hr>";

        $numPersonas = count($persona);

        for($i =0; $i < $numPersonas; $i++){
            echo "Nombre: <br>", $persona[$i]['nombre'], "<br><br>";
            echo "Estatura: <br>", $persona[$i]['estatura'], " cm<br><br>";
            echo "Sexo: <br>", $persona[$i]['sexo'], "<br><br><hr>";
        }
    ?>
</body>
</html>