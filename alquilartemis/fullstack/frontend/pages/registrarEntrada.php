<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./../../backend/config/addEntrada.php" method="post">

    <input type="number" name="id_empleado" placeholder="id_empleado">
    <input type="number" name="id_constructora" placeholder="id_constructora">
    <input type="text" name="fecha_entrega" placeholder="fecha_entrega">
    <input type="text" name="observaciones" placeholder="observaciones">
    <input type="submit" value="Enviar" name="guardar">
    </form>
</body>
</html>