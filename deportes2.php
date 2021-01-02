<html>

<head><title> Deportes </title></head>

<body>

    <?php

        $nombre = $_REQUEST['nombre'];
        $cont = 0;
        $mensaje = "$nombre practica ";
        
        if(isset($_REQUEST['yoga'])){
            $cont = $cont + 1;
            $mensaje = $mensaje." Yoga";
        }
        if(isset($_REQUEST['pilates'])){
            $cont = $cont + 1;
            $mensaje = $mensaje." Pilates";
        }
        if(isset($_REQUEST['cardio'])){
            $cont = $cont + 1;
            $mensaje = $mensaje." Cardio";
        }
        if(isset($_REQUEST['musculatura'])){
            $cont = $cont + 1;
            $mensaje = $mensaje." Musculatura";
        }
        if(isset($_REQUEST['zumba'])){
            $cont = $cont + 1;
            $mensaje = $mensaje." Zumba";
        }

        echo $mensaje.". $cont deportes en total.";

    ?>

</body>

</html>