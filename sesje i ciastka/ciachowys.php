<?php

?>
<!DOCTYPE html>
<html>
<body>
<form action="./ciachowys.php" method="POST">
<input type="submit" value="usun" name="usun">
</form>

<h1> PANEL UŻYTKOWNIKA </h1><br><br>

<?php

if(count($_COOKIE)> 0){
echo "Twoje imie to " . $_COOKIE[$cookie_name] . ".<br>";
echo "Twoje haslo to " . $_COOKIE[$cookie_pass] . ".";
}
else {
    echo "nie masz nazwy";
}

if(isset($_POST['usun'])){
    echo "Cookie 'user' is deleted.";
    setcookie("name", "", time() - 3600);
}
?>

</body>
</html>