<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>

<form action="./formularz-zad2.php" method="POST">

Pseudonim <input type="text" name="pseudo" /><br>
Komentarz <textarea name='area'> </textarea><br>
<input type="submit" vaule="wyslij">


</form>

<?php

if(isset($_POST['pseudo'])){
echo "Pseudonim: " . htmlspecialchars($_POST['pseudo']) . "<br>"; }

if(isset($_POST['area'])){
    echo "Komenatrz: " . htmlspecialchars($_POST['area']) . "<br>" . $_POST['area'];
}

?>
</body>