<html>

<head><title>Ganancias</title></head>

<body>

    <?php

        $nombre = $_REQUEST['nombre'];
        $ingresos = $_REQUEST['ingresos'];

        if($ingresos == "mayor"){
            echo "$nombre debe pagar impuestos debido a sus ganancias mayores a 3000€.";
        }else if($ingresos == "entre"){
            echo "$nombre gana dinero en el intervalo 1001€-3000€.";
        }else{
            echo "$nombre gana dinero en el intervalo 1€-1000€.";
        }
        
    ?>

</body>

</html>