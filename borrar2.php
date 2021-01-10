<html>

<head><title>Cursos</title></head>

<body>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $nombreCurso = $_REQUEST['nombrecurso'];
        $eliminacion = "delete from cursos where nombrecurso = '$nombreCurso'";
        $consulta = "select * from cursos where nombrecurso = '$nombreCurso'";

        $registros = mysqli_query($conexion, $consulta) or die("Problemas al encontrar el curso a eliminar.");

        if($reg = mysqli_fetch_array($registros)){
            mysqli_query($conexion, $eliminacion) or die("Problemas al eliminar el curso.");
            echo "Se ha borrado el curso de $nombreCurso";
        }else{
            echo "No hay cursos para eliminar con ese nombre.";
        }

        mysqli_close($conexion);
        
    ?>

</body>

</html>