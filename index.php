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
    <h3>PDO CRUD</h3>

    <form action="create.php" method="post">
        <label for="firstname">Voornaam:</label><br>
        <input type="text" id="firstname" name="firstname"><br>
        <br>
        <label for="infix">Tussenvoegsel:</label><br>
        <input type="text" id="infix" name="infix"><br>
        <br>
        <label for="lastname">Achternaam:</label><br>
        <input type="text" id="lastname" name="lastname"><br>
        <br>
        <label for="mobiel">Telefoonnummer:</label><br>
        <input type="text" id="mobiel" name="phone"><br>
        <br>
        <label for="mobiel">StraatNaam:</label><br>
        <input type="text" id="StraatNaam" name="streetname"><br>
        <br>
        <label for="huisnummer">Huisnummer</label><br>
        <input type="text" id="Huisnummer" name="housenumber"><br>
        <br>
        <label for="woonplaats">Woonplaats</label><br>
        <input type="text" id="Woonplaats" name="residence"><br>
        <input type="submit" value="Verstuur">

    </form>



    
</body>
</html>

<?php
?>