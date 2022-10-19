<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>

<form action="./formularz-funk.php" method="POST">


<h1> Podaj tekst: </h1>
<input type="text" name="imie">
<input type="submit" value="wyslij" name="wyslij"><br>
<input type="submit" value="dwa" name="dwa"><br>
</form>


<form action="./formularz-funk.php" method="POST">

<h1> Podaj liczbę: </h1>
<input type="number" name="liczba">
<input type="submit" value="wyslij1" name="wyslij1"><br>
<input type="submit" value="jeden" name="jeden"><br>


</form>

<?php

$tab = array("orange", "banana", "kiwi");

if(isset($_POST['wyslij'])) {
    if(isset($_POST['imie'])){

        $y = $_POST['imie'];
        array_push($tab, $_POST['imie']);
        print_r($tab);



    }
    
    

}


    



        $tablica = array(1, 2, 3);

if(isset($_POST['wyslij1'])) {

    if(isset($_POST['liczba'])){

        $x = $_POST['liczba'];
        array_push($tablica, $_POST['liczba']);
    print_r($tablica);
        
    }
  
    }




    if(isset($_POST['dwa'])) {
    
    $literki = array_pop($tab);
    print_r($tab);

    }

    if(isset($_POST['jeden'])) {
    $numerki = array_pop($tablica);
    print_r($tablica);
    }


?>