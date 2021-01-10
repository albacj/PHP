<html>

<head><title>Modificar</title></head>

<body>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $codigo = $_REQUEST['codalumno'];
        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $codigoCurso = $_REQUEST['codigocurso'];

        $actualizar = "update alumnos 
            set 
                nombre = '$nombre',
                email = '$email',
                codigocurso = $codigoCurso
                where codigo = $codigo";

        mysqli_query($conexion, $actualizar) or die("Problemas al cambiar los datos del alumno." . mysqli_error($conexion));

        echo "<h5>Los datos del alumno han cambiado. La información actual es la siguiente:</h5>";

        $consulta = "select a.codigo as codalumno, a.nombre, a.email, c.nombrecurso
            from alumnos as a
            inner join cursos as c
            on a.codigocurso = c.codigo
            and a.codigo = $codigo";

        $cambios = mysqli_query($conexion, $consulta) or die("Problemas al traer los cambios del alumno." . mysqli_error($conexion));

        while($cambio = mysqli_fetch_array($cambios)){
            echo "Código del alumno: $cambio[codalumno]<br>";
            echo "Nombre: $cambio[nombre]<br>";
            echo "Correo electrónico: $cambio[email]<br>";
            echo "Curso: $cambio[nombrecurso]<br>";
        }

        mysqli_close($conexion);

    ?>

</body>

</html>