<html>

<head><title>Modificar</title></head>

<body>

    <form action="modificar1.php" method="post">
    
        <h4>Buscar alumno</h4>

        Código del alumno: <input type="number" name="codigo" min="1"><br>

        <br>
        <input type="submit" value="Buscar">
    
    </form>

    <?php if(isset($_POST['codigo'])): ?>

        <?php
            echo "<hr>";
            
            echo "<h4>Resultados de la búsqueda</h4>";

            $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión.");

            $codigo = $_REQUEST['codigo'];
            $consultaAlumno = "select a.codigo as codalumno, a.nombre, a.email, c.nombrecurso
                from alumnos as a
                inner join cursos as c
                on a.codigocurso = c.codigo
                and a.codigo = $codigo";

            $resultado = mysqli_query($conexion, $consultaAlumno) or die("Problemas al traer el alumno del sistema." . mysqli_error($conexion));

            $consultaCursos = "select * from cursos";

            $cursos = mysqli_query($conexion, $consultaCursos) or die("Problemas al traer todos los cursos del sistema." . mysqli_error($conexion));

            echo "<form action='modificar2.php' method='post'>";

            if($res = mysqli_fetch_array($resultado)){

                echo "<h5>Modificar los datos del alumno.</h5>";

                echo "Código del alumno: ".$res['codalumno']."<br> <input type='hidden' name='codalumno' value='$res[codalumno]'>";

                echo "Nombre: <input type='text' maxlength='50' name='nombre' value='$res[nombre]'><br>";

                echo "Nombre: <input type='text' maxlength='70' name='email' value='$res[email]'><br>";

                echo "<select name='codigocurso'>";

                    while($curso = mysqli_fetch_array($cursos)){
                        if($res['nombrecurso'] == $curso['nombrecurso']){
                            echo "<option value='$curso[codigo]' selected>$curso[nombrecurso]</option>";
                        }else{
                            echo "<option value='$curso[codigo]'>$curso[nombrecurso]</option>";
                        }
                    }

                echo "</select><br>";
                
                echo "<br>";
                echo "<input type='submit' value='Actualizar'>";

            }else{
                echo "No hay ningún alumno con el código $codigo.";
            }

            echo "</form>";

            mysqli_close($conexion);

        ?>

    <?php endif; ?>

</body>

</html>