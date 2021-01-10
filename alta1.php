<html>

<head><title>Altas</title></head>

<body>

    <form action="alta2.php" method="post">
    
        <h4>Alta de nuevo alumno</h4>

        Nombre: <input type="text" name="nombre" maxlenght="50"><br>
        Correo electrónico: <input type="text" name="email" maxlength="70"><br>
        Curso:<br>

        <?php

            $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

            $consultaCursos = "select * from cursos";
            $cursos = mysqli_query($conexion, $consultaCursos) or die("Problemas al traer los cursos." . mysqli_error($conexion));

            while($curso = mysqli_fetch_array($cursos)){
                
                echo "<input type='radio' name='curso' value='$curso[codigo]'>$curso[nombrecurso]<br>";
            }

            mysqli_close($conexion);

        ?>

        <br>
        <input type="submit" value="Enviar">

    </form>

</body>

</html>