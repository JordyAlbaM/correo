<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar mensajes </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="enviar.php" method="post">

        <input type="number" name="number" placeholder="Ingrese número de telefono" required="">
        <input type="email" name="correo" placeholder="Ingrese correo" required="">
        <textarea name="msj" id="msj"  required="" ></textarea>
            <input type="submit" value="Enviar" name="enviar" >

</form>
    <?php
    include("enviar.php");
    ?>
</body>
</html>