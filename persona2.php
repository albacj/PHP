<html>

<head><title> Estudios </title></head>

<body>

    <?php

        $seleccion = $_REQUEST['estudios'];
        $nombre = $_REQUEST['nombre'];

        if($seleccion == "noTiene"){
            echo "$nombre no tiene estudios.";
        }else if($seleccion == "basicos"){
            echo "$nombre tiene estudios primarios.";
        }else{
            echo "$nombre tiene estudios superiores.";
        }

    ?>

</body>

</html>