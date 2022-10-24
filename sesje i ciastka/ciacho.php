<?php
$cookie_name = "name";


$cookie_pass = "pass";




?>
<html>
<body>

<form action="./ciacho.php" method="POST">
<h1> Podaj login </h1><br>
<input type="text" name="login"><br>
<h1> Podaj hasło </h1>
<input type="password" name="haslo"><br>
<input type="submit" value="wyslij" name="wyslij">
</form>

<?php



if(isset($_POST['wyslij'])){
    $name = $_POST['login'];
    $pass = sha1($_POST['haslo']);

    setcookie($cookie_name, $name, time() + (86400 * 30), "/"); 
    setcookie($cookie_pass, $pass, time() + (86400 * 30), "/");


}
?>

</body>
</html>