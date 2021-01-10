<html>

<head><title>Alumnos</title></head>

<body>

    <h4>Resultados de la búsqueda</h4>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];

        //$consulta = "select * from alumnos where nombre like '%$nombre%'";
        $consulta = "select * from alumnos where 1";
        if($nombre){
            $consulta = $consulta." and nombre like '%$nombre%'";
        }
        if($email){
            $consulta = $consulta." and email like '%$email%'";
        }

        $resultados = mysqli_query($conexion, $consulta) or die("Problemas al realizar la búsqueda.");

        $contar = 0;
        while($res = mysqli_fetch_array($resultados)){

            echo "Nombre: ".$res['nombre']."<br>";
            echo "Correo electrónico: ".$res['email']."<br>";
    
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
            $contar++;
            echo "<hr>";
        }

        if($contar == 0){
            echo "No se han encontrado resultados.";
        }

        mysqli_close($conexion);

    ?>

</body>

</html>