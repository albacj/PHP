<html>

<head><title>Cursos</title></head>

<body>

    <h4>Listado de Cursos</h4>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $consulta = "select * from cursos";
        $resultados = mysqli_query($conexion, $consulta) or die("Problemas al cargar los datos en la página.");

        while($res = mysqli_fetch_array($resultados)){
            echo "Código: ".$res['codigo']."<br>";
            echo "Nombre del curso: ".$res['nombrecurso']."<br>";
            echo "<hr>";
        }

        mysqli_close($conexion);

    ?>

</body>

</html>