<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="./zmiennay.php" method="POST">
<input type="submit" value="usun" name="usun">
</form>

<?php
// Echo session variables that were set on previous page
if(isset($_SESSION["x"]) && (isset( $_SESSION["y"]))){
echo "Favorite color is " . $_SESSION["x"] . ".<br>";
echo "Favorite animal is " . $_SESSION["y"] . ".";
}

if(isset($_POST['usun'])){
    session_destroy();
    echo "usunelo";
}
?>

</body>
</html>