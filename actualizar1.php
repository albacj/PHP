<html>

<head><title>Cursos</title></head>

<body>

    <h4>Modificación de cursos.</h4>

    <form action="actualizar1.php" method="post">

        Introduzca el código del curso: <input type="number" name="codigo" min="1"><br>

        <input type="submit" value="Buscar">

    </form>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $codigoCurso = $_REQUEST['codigo'];
        $consultaCursos = "select * from cursos where codigo=$codigoCurso";

        $registros = mysqli_query($conexion, $consultaCursos) or die("Problemas al traer el curso con el código $codigoCurso.");

        if($reg = mysqli_fetch_array($registros)){

            ?>

            <form action="actualizar2.php" method="post">

            <?php

            echo $reg['codigo']." - ".$reg['nombrecurso'];

                ?>

                <br>
                
                Nombre nuevo: <input type="text" name="nombreCursoNuevo"><br>
                <input type="hidden" name ="nombreCursoViejo" value="<?php echo $reg['nombrecurso'] ?>"><br>
            
                <input type="submit" value="Modificar">

                <?php

        }else{
            echo "No hay cursos con ese código.";
        }

        mysqli_close($conexion);

    ?>

</body>

</html>