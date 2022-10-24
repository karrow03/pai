<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="./4zadwys.php" method="POST">
<input type="submit" value="usun" name="usun">
</form>

<h1> PANEL UŻYTKOWNIKA </h1><br><br>

<?php
// Echo session variables that were set on previous page
if(isset($_SESSION["name"]) && (isset( $_SESSION["pass"]))){
echo "Twój login to " . $_SESSION["name"] . ".<br>";
echo "Twoje hasło to " . $_SESSION["pass"] . ".";
}

if(isset($_POST['usun'])){
    session_destroy();
    echo "usunelo";
}
?>

</body>
</html>