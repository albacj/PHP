<html>

    <head> Tipos de variables </head>

    <body>

        <?php
        
            $num = 16;
            $precio = 16.28;
            $palabra = "Hola";
            $cierto = true;

            $numTipo = gettype($num);
            $precioTipo = gettype($precio);
            $palabraTipo = gettype($palabra);
            $ciertoTipo = gettype($cierto);

            $esDeTipo = " es de tipo ";
            $salto = "<br>";

            echo $salto;
            echo $salto;
            echo $num.$esDeTipo.$numTipo;
            echo $salto;
            echo $precio.$esDeTipo.$precioTipo;
            echo $salto;
            echo $palabra.$esDeTipo.$palabraTipo;
            echo $salto;
            echo $cierto.$esDeTipo.$ciertoTipo;

        ?>

    </body>

</html>