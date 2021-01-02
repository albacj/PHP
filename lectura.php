<html>

<head><title>Pedido</title></head>

<body>

    <h5>Pedidos realizados</h5>

    <?php

        $fichero = fopen("pedidos.txt", "r") or die("Problemas para abrir los pedidos.");

        while(!feof($fichero)){
            $linea = fgets($fichero);
            $lineasalto = nl2br($linea); // convierte los \n del fichero a los <br> de html
            echo $lineasalto;
        }

        fclose($fichero);

    ?>

</body>

</html>