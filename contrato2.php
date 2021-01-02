<html>

<head><title>Contrato</title></head>

<body>

    <h4>Resumen de contrato</h4>

    <?php

        $nombre = $_REQUEST['nombre'];
        $contrato = $_REQUEST['contrato'];

        echo "<h5>El presente contrato queda así:</h5>";
        echo $contrato;
        echo "<br>";
        echo "<h5>Firmado por:</h5> $nombre";

    ?>

</body>

</html>