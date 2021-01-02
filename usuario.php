<html>

<head><title>Login</title></head>

<body>

    <form action="usuario.php" method="post">

        <h5>Inicie sesión:</h5>

        Usuario: <input type="text" name="nombre"><br>
        Nueva Contraseña: <input type="text" name="clave1"><br>
        Repita Contraseña: <input type="text" name="clave2"><br>
        <br>

        <input type="submit" name="Enviar">

    </form>

    <?php

        $clave1 = $_REQUEST['clave1'];
        $clave2 = $_REQUEST['clave2'];

        function compruebaClaves($string1, $string2){
            if($string1 != $string2){
                echo "Las contraseñas no coinciden.";
            }else{
                echo "Usuario creado con éxito.";
            }
        }

        compruebaClaves($clave1, $clave2);

    ?>

</body>

</html>