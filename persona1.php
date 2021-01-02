<html>

<head><title> Persona </title></head>

<body>

    <form action = "persona2.php" method="post">
        Nombre: <input type="text" name="nombre">
        <br>
        Seleccionar estudios:
        <br>
        <input type="radio" name="estudios" value="noTiene"> No tiene estudios.
        <input type="radio" name="estudios" value="basicos"> Estudios primarios.
        <input type="radio" name="estudios" value="superiores"> Estudios superiores.
        <br>
        <input type="submit" name="Enviar">
    </form>

</body>

</html>