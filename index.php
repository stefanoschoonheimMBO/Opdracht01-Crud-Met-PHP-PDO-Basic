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
        <label for="mobiel">Telefoonnummer:</label>
        <input type="text" id="mobiel" name="mobiel"><br>
        <br>
        <input type="submit" value="Verstuur">

    </form>



    
</body>
</html>

<?php
    echo "1" + 1;
?>