<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $position = "abajo";
        switch($position){
            case "arriba": //Bloque 1
                echo "La variable contiene";
                echo "el valor arriba";
                break;
            case "abajo": //Bloque 2
                echo "La variable contiene";
                echo "el valor abajo";
                break;
            default: //bloeque 3
                echo "La variable contiene otra valor";
                echo " distinto de arriba y abajo";
        }
    ?>
</body>
</html>