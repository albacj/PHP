<html>

<head><title>Cursos</title></head>

<body>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $nombreCurso = $_REQUEST['nombrecurso'];
        $insertQuery = "insert into cursos(nombrecurso) values('$nombreCurso')";
        mysqli_query($conexion, $insertQuery) or die("Problemas en la insercción." . mysqli_error($conexion));

        mysqli_close($conexion);
        echo "Curso registrado correctamente.";

    ?>

</body>

</html>