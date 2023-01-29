<?php
require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Verbinding";
    } else {
        // echo "Interne error";
    }
} catch(PDOException $e) {
    $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Er is op het formulier knopje gedrukt";
    var_dump($_POST);
    try {
        $sql = "UPDATE Persoon
                SET Voornaam = :Voornaam,
                    Tussenvoegsel = :Tussenvoegsel,
                    Achternaam = :Achternaam,
                    Mobiel = :Mobiel,
                    StraatNaam = :StraatNaam,
                    HuisNummer = :HuisNummer,
                    Woonplaats = :Woonplaats,
                    Postcode = :Postcode,
                    Landnaam = :Landnaam

                WHERE Id = :Id";

        $statement = $pdo->prepare($sql);
        $statement->bindValue(':Id', $_POST['id'], PDO::PARAM_INT);
        $statement->bindValue(':Voornaam', $_POST['firstname'], PDO::PARAM_STR);
        $statement->bindValue(':Tussenvoegsel', $_POST['infix'], PDO::PARAM_STR);
        $statement->bindValue(':Achternaam', $_POST['lastname'], PDO::PARAM_STR);
        $statement->bindValue(':Mobiel', $_POST['phone'], PDO::PARAM_STR);
        $statement->bindValue(':StraatNaam', $_POST['streetname'], PDO::PARAM_STR);
        $statement->bindValue(':HuisNummer', $_POST['housenumber'], PDO::PARAM_STR);
        $statement->bindValue(':Woonplaats', $_POST['residence'], PDO::PARAM_STR);
        $statement->bindValue(':Postcode', $_POST['zip'], PDO::PARAM_STR);   
        $statement->bindValue(':Landnaam', $_POST['country'], PDO::PARAM_STR);

        $statement->execute();

        header('Refresh:3; url=read.php');
    } catch(PDOException $e) {
        echo 'Het record is niet geupdate, probeer het opnieuw.'; 
        header('Refresh:3; url=read.php');
    }
    exit();
} 

$sql = "SELECT Id
              ,Voornaam as VN
              ,Tussenvoegsel as TV
              ,Achternaam as AN
              ,Mobiel as MB
              ,StraatNaam as SN
              ,HuisNummer as HN
              ,Woonplaats as WP
              ,Postcode as PC
              ,Landnaam as LN
        FROM Persoon
        WHERE Id = :Id";

$statement = $pdo->prepare($sql);

$statement->bindValue(':Id', $_GET['id'], PDO::PARAM_INT);

$statement->execute();

$result = $statement->fetch(PDO::FETCH_OBJ);

var_dump($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PDO CRUD</title>
</head>
<body>
    <h3>Wijzig het record</h3>

    <form action="update.php" method="post">
        <label for="firstname">Voornaam:</label><br>
        <input type="text" id="firstname" name="firstname" value="<?= $result->VN ?>"><br>
        <br>
        <label for="infix">Tussenvoegsel:</label><br>
        <input type="text" id="infix" name="infix" value="<?= $result->TV ?>"><br>
        <br>
        <label for="lastname">Achternaam:</label><br>
        <input type="text" id="lastname" name="lastname" value="<?= $result->AN ?>"><br>
        <br>
        <label for="mobiel">Telefoonnummer:</label><br>
        <input type="text" id="mobiel" name="phone" value="<?= $result-> MB?>"><br>
        <br>
        <label for="mobiel">StraatNaam:</label><br>
        <input type="text" id="StraatNaam" name="streetname" value="<?= $result-> SN?>"><br>
        <br>
        <label for="huisnummer">Huisnummer</label><br>
        <input type="text" id="Huisnummer" name="housenumber" value="<?= $result-> HN?>"><br>
        <br>
        <label for="woonplaats">Woonplaats</label><br>
        <input type="text" id="Woonplaats" name="residence" value="<?= $result-> WP?>"><br>
        <br>
        <label for="postcode">Postcode</label><br>
        <input type="text" id="Postcode" name="zip" value="<?= $result-> PC?>"><br>
        <br>
        <label for="landnaam">Landnaam</label><br>
        <input type="text" id="Landnaam" name="country" value="<?= $result-> LN?>"><br>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <input type="submit" value="Verstuur">

    </form>    
</body>
</html>