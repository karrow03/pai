<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body> 
        
    <form action="./4zad.php" method="POST">

    <h1> Podaj login </h1><br>
<input type="text" name="login"><br>
<h1> Podaj hasło </h1>
<input type="password" name="haslo"><br>
<input type="submit" name="wyslij" value="wyslij">

    </form>
        <?php
        
  
            
           
        if(isset($_POST['wyslij'])){
            $name = $_POST['login'];
            $pass = sha1($_POST['haslo']);
            $_SESSION["pass"] = $pass;
            $_SESSION["name"] = $name;
        }

            
        ?>
    </body>
</html>