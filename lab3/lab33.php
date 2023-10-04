<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
        if(array_key_exists('enviar', $_POST)){
            if($_REQUEST['Apellido'] != ""){
                echo "El apellido Ingresado es:  $_REQUEST[Apellido]";
            }else{
            echo "Favor coloque el apellido";
            }

            echo "<br>";

            if($_REQUEST['Nombre'] != ""){
            echo "El nombre Ingresado es:  $_REQUEST[Nombre]";
            }else{
            echo "<p>Favor coloque el nombre</p>";
            }
        }else{
    ?>
    <form action="lab33.php" method="$_POST">
        Nombre: <input type="text" name="Nombre"><br>
        Apellido: <input type="text" name="Apellido"><br>
        <input type="submit" value="Enviar datos" name="enviar">
    </form>
    <?php
        }
    ?>
</body>
</html>