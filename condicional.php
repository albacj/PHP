<html>

<head> <title> Estructura condicional </title> </head>

<body>

    <?php
    
        $num = rand(1, 3);
        $dosPuntos = ": ";
        $numPalabra = "";

        if($num == 1){
            $numPalabra = "uno";
        }else if($num == 2){
            $numPalabra = "dos";
        }else{
            $numPalabra = "tres";
        }

        echo $num.$dosPuntos.$numPalabra;
    
    ?>

</body>

</html>