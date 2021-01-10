<html>

<head><title>Cursos</title></head>

<body>

    <h4>Cursos</h4>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $consultaCursos = "select nombrecurso from cursos";

        $cursos = mysqli_query($conexion, $consultaCursos) or die ("Problemas al traer todos los cursos del sistema." . mysqli_error($conexion));

        echo "<ul>";
        while($curso = mysqli_fetch_array($cursos)){
            echo "<li>".$curso['nombrecurso']."</li><br>";
        }
        echo "</ul>";

        $consultaNumeroCursos = "select count(*) as num from cursos";

        $numeroCursos = mysqli_query($conexion, $consultaNumeroCursos) or die("Problemas al saber el número de cursos." . mysqli_error($conexion));

        $num = mysqli_fetch_array($numeroCursos);

        echo "Hay ".$num['num']." cursos.";

        mysqli_close($conexion);

    ?>

</body>

</html>