<html>

<head><title>Cursos</title></head>

<body>

    <h4>Eliminación de todos los cursos.</h4>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $eliminacion = "delete from cursos";

        mysqli_query($conexion, $eliminacion) or die("Problemas al eliminar todos los cursos del sistema.");

        echo "Se han eliminado todos los cursos del sistema.";

        mysqli_close($conexion);

    ?>

</body>

</html>