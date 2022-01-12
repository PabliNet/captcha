<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CAPTCHA</title>
  <link rel="stylesheet" href="/captcha/captcha.css">
</head>
<body onload="inicio()">
  <form action="./enviado" method="POST">
    <p>CAPTCHA: <input type="text" value="<?php include 'gcaptcha.php' ?>" name="captcha" id="captcha" readonly> <a id='reload' onclick="newCaptcha()" title="Actualizar CAPTCHA">&#x27F3;</a></p>
    <p>Escribe el CAPTCHA:<br>
      <input type="text" name="verificar" id="verificar" value="" maxlength="6" placeholder="CAPTCHA" onkeyup="funcVerificar()" autofocus>
      <span id="test">&nbsp;</span></p>
      <script>
        const chars = '<?php $chrs = implode("", $chars); echo $chrs ?>';
        function captcha() {
          document.getElementById('verificar').value = '';
        }
      </script>
      <button>Enviar</button>
  </form>
  <script src="/captcha/captcha.js"></script>
</body>
</html>
