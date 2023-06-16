<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alquileres</h1>
    <h2>Registrar Ususario</h2>
    <form action="/../../simulacro/fullstack/backend/login/registro.php" method="post">
        <input type="text" value="Nombre" name="username">
        <input type="pasword" value="password" name="password">

        <input type="submit" name = "registrarse">
    </form>

    <h2>Ingresar</h2>
    <form action="/../../simulacro/fullstack/backed/login/log.php" method="post">
        <input type="text" value ="nombre" name="username">
        <input type="text" value ="password" name ="password">

        <input type="submit" name ="log">
    </form>
    <a href="./pages/registrarEntrada.php"> Registrar entrada</a>
</body>
</html>