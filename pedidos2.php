<html>

<head><title>Pizzería</title></head>

<body>

    <?php

        $nombre = $_REQUEST['nombre'];
        $direccion = $_REQUEST['direccion'];
        $margarita = $_REQUEST['margarita'];
        $napolitana = $_REQUEST['napolitana'];
        $mozzarella = $_REQUEST['mozzarella'];

        $fichero = fopen("pedidos.txt", "a") or die ("Problemas para crear la comanda."); //a: añadir al fichero, w: sobreescribe, r: lectura

        fputs($fichero, "Nombre: $nombre \n");
        fputs($fichero, "Dirección: $direccion \n");
        fputs($fichero, "\n");

        if($margarita > 0){
            fputs($fichero, "Jamón y Queso [x] Cantidad: $margarita \n");
        }else{
            fputs($fichero, "Jamón y Queso [] \n");
        }

        if($napolitana > 0){
            fputs($fichero, "Napolitana [x] Cantidad: $napolitana \n");
        }else{
            fputs($fichero, "Napolitana [] \n");
        }

        if($mozzarella > 0){
            fputs($fichero, "Mozzarella [x] Cantidad: $mozzarella \n");
        }else{
            fputs($fichero, "Mozzarella [] \n");
        }

        fputs($fichero, "\n");
        fputs($fichero, "............................................ \n");
        fputs($fichero, "\n");

        fclose($fichero);

        echo "Los datos se cargaron correctamente.";

    ?>

</body>

</html>