<html>

<head><title>Alumnos</title></head>

<body>

    <h4>Alta de alumnos</h4>

    <form action="alumnos2.php" method="post">

        Nombre: <input type="text" name="nombre" maxlength="50"><br>

        Correo electrónico: <input type="text" name="email" maxlength="70"><br>

        Seleccione el curso:
        <select name="codigocurso">
            <option value="1">PHP</option>
            <option value="2">Java</option>
            <option value="3">Scala</option>
        </select>
        <br>

        <input type="submit" value="Enviar">

    </form>

</body>

</html>