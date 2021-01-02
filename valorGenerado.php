<html>

    <head></head>

    <body>

        <?php 
        
        $num = rand(1, 100);
        $aviso = "";

        if($num <= 50){
            $aviso = " es menor o igual que 50.";
        }else{
            $aviso = " es mayor que 50.";
        }

        echo $num.$aviso;

        ?>

    </body>

</html>