<body>

<input type="text" value="login" name="login">
<input type="password" value="haslo" name="haslo">
<input type="checkbox" name="daj">
<input type="submit" name="wyslij" value="wyslij">


<?php
$hostname = 'localhost'; // Nazwa hosta
$database = 'sus'; // Nazwa bazy danych
$username = 'root'; // Nazwa użtytkownika
$password = ''; // Hasło

$conn = new mysqli($hostname, $username, $password, $database);


$id = "id";
$numer = 344;





$query = "SELECT * FROM sas";
$result = $conn->query($query);

while($row = $result->fetch_assoc()){
    echo $row['id']. ' '. $row['numer']  . "<br>";
}

$sql = "INSERT INTO `sas` (`id`, `numer`)
        VALUES (NULL, '$numer')";

if($result = $conn -> query($sql)) echo "Dodano nowy rekord";
else echo "Nie udało się dodać nowego rekordu";



$conn -> close();
?>