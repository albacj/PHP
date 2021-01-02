<html>

<head><title>Pizzería</title></head>

<body>

    <h5>Realice su pedido:</h5>

    <form action="pedidos2.php" method="post">

        Nombre: <input type="text" name="nombre"><br>
        Dirección: <input type="text" name="direccion"><br>

        <h6>Pizzas</h6>

        Jamón y Queso: <input type="number" name="margarita" min="0"><br>
        Napolitana: <input type="number" name="napolitana" min="0"><br>
        Mozzarella: <input type="number" name="mozzarella" min="0"></br>

        <input type="submit" name="Enviar">

    </form>

</body>

</html>