<html>

<head><title>Altas</title></head>

<body>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $curso = $_REQUEST['curso'];

        $insertAlumno = "insert into alumnos (nombre, email, codigocurso) values ('$nombre', '$email', $curso)";
        mysqli_query($conexion, $insertAlumno) or die("Problemas al registrar un alumno nuevo." . mysqli_error($conexion));

        echo "Alumno registrado con éxito.";

        mysqli_close($conexion);

    ?>

</body>

</html>