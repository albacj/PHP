<html>

<head><title>Semana</title></head>

<body>

    <?php

        $semana[] = "lunes";
        $semana[] = "martes";
        $semana[] = "miércoles";
        $semana[] = "jueves";
        $semana[] = "viernes";
        $semana[] = "sábado";
        $semana[] = "domingo";

        echo "<h5>Los días de la semana son:</h5>";

        foreach($semana as $dia){
            echo $dia;
            echo "<br>";
        }

        $primerDia = $semana[0];
        $ultimoDia = $semana[6];
        echo "<br>";
        echo "La semana empieza en $primerDia y termina en $ultimoDia.";

    ?>

</body>

</html>