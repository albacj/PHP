<html>

<head><title>Cursos</title></head>

<body>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $nombreCursoNuevo = $_REQUEST['nombreCursoNuevo'];
        $nombreCursoViejo = $_REQUEST['nombreCursoViejo'];

        $consulta = "select * from cursos where nombrecurso='$nombreCursoNuevo'";
        $hayCurso = mysqli_query($conexion, $consulta) or die("Problemas al comprobar cursos previos con el mismo nombre" . mysqli_error($conexion));

        if($hay = mysqli_fetch_array($hayCurso)){
            echo "No pueden haber dos o más cursos con el mismo nombre.";
        }else{

            $modificacion = "update cursos set nombrecurso='$nombreCursoNuevo' where nombrecurso='$nombreCursoViejo'";

            mysqli_query($conexion, $modificacion) or die("Problemas al cambiar el nombre del curso." . mysqli_error($conexion));

            $registros = mysqli_query($conexion, $consulta) or die("Problemas al comprobar cursos previos con el mismo nombre" . mysqli_error($conexion));

            if($reg = mysqli_fetch_array($registros)){
                echo "El nombre del curso se ha cambiado. El curso actual queda así:"."<br>";
                echo $reg['codigo']." - ".$reg['nombrecurso'];
            }

        }

        mysqli_close($conexion);

    ?>

</body>

</html>