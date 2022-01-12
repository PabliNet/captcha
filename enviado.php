<?php
$captcha = $_POST['captcha'];
$verificar = $_POST['verificar'];

$test = $captcha == $verificar ? 'correcto' : 'incorrecto';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>CAPTCHA: <?php echo $captcha; ?></p>
    <p>Ingreso del usuario: <?php echo $verificar; ?></p>
    <p>CAPTCHA <?php echo $test; ?></p>
</body>
</html>