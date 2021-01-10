<html>

<head><title>Alumnos</title></head>

<body>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión."); // dirección, usuario, contraseña, base de datos

        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $codigocurso = $_REQUEST['codigocurso'];
        $insertQuery = "insert into alumnos(nombre, email, codigocurso) values('$nombre', '$email', $codigocurso)";
        mysqli_query($conexion, $insertQuery) or die("Problemas en la insercción" . mysqli_error($conexion));

        mysqli_close($conexion);
        echo "El alumno ha sido dado de alta.";

    ?>

</body>

</html>