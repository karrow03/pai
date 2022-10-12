<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>

<form action="./formularz-zad5.php" method="POST">

<h1> Wybierz grę </h1>
<select name="lista">
            <option>Minecraft</option>
            <option>Terraria</option>
            <option>CS:GO</option>
</select><br><br><hr>

<h1> Wybierz ilość przegranych godzin </h1>
<input type="number" name="x"><br>

<br><input type="submit" vaule="wyslij" name="wyslij"><br><br>


<?php

if(isset($_POST['wyslij'])) {

if(isset($_POST['lista'])){
    echo "Wybrana gra: " . $_POST['lista'] . "<br>";
}


$x = $_POST['x'];
$lista = $_POST['lista'];


if($lista == 'Minecraft') {

if($x<100) {
    echo "Jesteś początkujący";
}
else {
    echo "Poznałeś już grę";
}
}
else if($lista == 'Terraria'){
    if($x<500) {
        echo "Jesteś początkujący";
    }
    else {
        echo "Poznałeś już grę";
    }

}
else if($lista == 'CS:GO') {
    if($x<1000) {
        echo "Jesteś początkujący";
    }
    else {
        echo "Poznałeś już grę";
    }
}
}

?>

</body>

