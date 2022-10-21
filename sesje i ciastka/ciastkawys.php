<?php

?>
<!DOCTYPE html>
<html>
<body>
<form action="./ciastkawys.php" method="POST">
<input type="submit" value="usun" name="usun">
</form>

<?php
// Echo session variables that were set on previous page
if(isset($_COOKIE[$cookie_name]) && (!isset($_COOKIE[$cookie_imie]))){
echo "Favorite color is " . $_COOKIE[$cookie_name] . ".<br>";
echo "Favorite animal is " . $_COOKIE[$cookie_imie] . ".";
}

if(isset($_POST['usun'])){
    echo "Cookie 'user' is deleted.";
    setcookie("user", "", time() - 3600);
}
?>

</body>
</html>