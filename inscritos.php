<html>

<head><title>Inscritos</title></head>

<body>

    <h4>Alumnos inscritos</h4>

    <form action="inscritos.php" method="post">
    
        <h5>Buscar alumnos</h5>

        Código del alumno: <input type="number" name="codigo" min="1"><br>

        <input type="submit" value="Buscar">

    </form>

    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

        $codigoAlumno = $_REQUEST['codigo'];

        $busqueda = "select a.codigo, a.nombre, a.email, c.nombrecurso 
            from alumnos as a 
            inner join cursos as c 
            on a.codigocurso = c.codigo";

        if($codigoAlumno){
            $busqueda = $busqueda." and a.codigo = $codigoAlumno";
        }
            
        $busqueda = $busqueda." order by a.codigo";

        $resultado = mysqli_query($conexion, $busqueda) or die("Problemas al buscar el alumno con código $codigoAlumno." . mysqli_error($conexion));

        echo "<h5>Resultados</h5>";

        $cont = 0;
        while($res = mysqli_fetch_array($resultado)){
            echo "Código del alumno: ".$res['codigo']."<br>";
            echo "Nombre: ".$res['nombre']."<br>";
            echo "Correo electrónico: ".$res['email']."<br>";
            echo "Curso: ".$res['nombrecurso']."<br>";
            echo "<hr>";
            $cont++;
        }

        if($cont == 0){
            echo "No hay ningún alumno con el código $codigoAlumno.";
        }

        mysqli_close($conexion);

    ?>

</body>

</html>