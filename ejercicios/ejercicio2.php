<?php
//Recibi informacion del Formilario HTML (METODO POST)

        $nombre = $_POST['txtNombre'];
        echo $nombre;

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
    HOLA MUNDO
    <form action="ejercicio2.php" method="post">
        <input type="text" name="txtNombre" id="">
        <input type="submit" name="Enviar">

    </form>


</body>

</html>