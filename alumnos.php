<html>

<head><title>Alumnos</title></head>

<body>

    <h4>Listado de alumnos</h4>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $consulta = "select * from alumnos";
        $resultados = mysqli_query($conexion, $consulta) or die("Problemas al traer los datos." . mysqli_error($conexion));

        while($res = mysqli_fetch_array($resultados)){

            echo "Código: ".$res['codigo']."<br>";
            echo "Nombre: ".$res['nombre']."<br>";
            echo "Correo electrónico: ".$res['email']."<br>";

            echo "Curso: ";
            switch($res['codigocurso']){
                case 1:
                    echo "PHP";
                    break;
                case 2:
                    echo "Java";
                    break;
                case 3:
                    echo "Scala";
                    break;
            }
            echo "<br>";
            echo "<hr>";
        }

        mysqli_close($conexion);

    ?>

</body>

</html>