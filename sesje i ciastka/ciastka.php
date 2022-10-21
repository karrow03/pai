<?php
$cookie_name = "name";
$cookie_value = "zawartosc";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
$cookie_imie = "imie";
$cookie_inside = "inside";
setcookie($cookie_imie, $cookie_inside, time() + (86400 * 30), "/"); 
?>
<html>
<body>

<?php

if(!isset($_COOKIE[$cookie_name]) && (!isset($_COOKIE[$cookie_imie]))) {
  echo "Cookie named '" . $cookie_name . "' is not set!" . "<br>";
  echo "Cookie named '" . $cookie_imie . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";

  echo "Cookie '" . $cookie_imie . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_imie];
}
?>

</body>
</html>