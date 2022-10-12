<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>

<form action="./formularz-zad4.php" method="POST">


<h1> Podaj imię: </h1>
<input type="text" name="imie">
<h1> Podaj nazwisko: </h1>
<input type="text" name="nazwisko">



<h1> Wybierz płeć: </h1>
Kobieta: <input type="radio" name="h" value="k"> <br>
Mężczyzna: <input type="radio" name="h" value="m"> <br><br>



<input type="submit" value="wyslij" name="wyslij"><br>


</form>

<?php

if(isset($_POST['h'])){
    if($_POST['h'] == 'k') echo "Witam Panią ". $_POST['imie'] . " " . $_POST['nazwisko'] . "<br>";
    else echo "Witam Pana ". $_POST['imie'] . " " . $_POST['nazwisko'] . "<br>";
}


?>