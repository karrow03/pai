
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>

<form action="./formularz-ks.php" method="POST">

Podaj login <input type="text" name="imie" /><br>
Podaj haslo <input type="password" name="haslo"><br>
Zapamiętaj mnie <input type="checkbox" name="zapamietaj" ><br><br>
<input type="submit" vaule="wyslij">


</form>

<?php

if(isset($_POST['imie'])){
echo "Login: " . htmlspecialchars($_POST['imie']) . "<br>"; }

if(isset($_POST['haslo'])){
    echo "haslo: " . sha1($_POST['haslo']) . "<br>";} 


if(isset($_POST['zapamietaj'])) echo "Zostało zaznaczone";
else echo "Nie zostało wybrane";

?>
</body>


