<html>

<head> <title> Estructuras repetitivas </title> </head>

<body>

    <h4> Tabla de multiplicar del 2 </h4>

    <?php

        /*for($i = 1; $i <= 10; $i++){
            $res = 2*$i;
            echo "2 x $i = ".$res."<br>";
        }*/

        /*$i = 0;
        while($i <= 10){
            $res = 2*$i;
            echo "2 x $i = ".$res."<br>";
            $i++;
        }*/

        $i = 0;
        do{
            $res = 2*$i;
            echo "2 x $i = ".$res."<br>";
            $i++;
        }
        while($i <= 10);

    ?>

</body>

</html>