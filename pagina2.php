<html>

<head><title> Captura de datos del form </title></head>

<body>

  <?php
    $mensajeEdad = "";
    $edad = $_REQUEST['edad'];

    if($edad < 18){
        $mensajeEdad = " es menor de edad";
    }else{
        $mensajeEdad = " es mayor de edad";
    }

    echo $_REQUEST['nombre'].$mensajeEdad;
  ?>

</body>

</html>