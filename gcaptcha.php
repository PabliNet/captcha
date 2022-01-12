<?php
$chars = [];

for ($i=48; $i <= 57; $i++) { 
  array_push($chars, chr($i));
}

for ($i=65; $i <= 90; $i++) { 
  array_push($chars, chr($i));
}

for ($i=97; $i <= 122; $i++) { 
  array_push($chars, chr($i));
}

$ultimo = count($chars) - 1;

$captcha = '';

for ($i=0; $i < 6; $i++) {
  $captcha .= $chars[rand(i == 0 ? 11 : 0, $ultimo)];
}
echo $captcha;
?>