<htnl>
<head>
    <title>Laboratorio 2.4</title>
</head>
<body>
    <?php
        //creacion del array("clave" => "valor")
        $personas = array("Juan" => "Panama",
        "John" => "USA",
        "Eica" => "Finlandia",
        "Kusanagi" => "Japon");

        //Recorrer todo el arreglo
        foreach($personas as $persona => $pais){
            print "$persona es de $pais<br>";
        }

        //Impresion especifica
        echo "<br>".$personas["John"];
        echo "<br>".$personas["Eica"];
    ?>
</body>
</html>