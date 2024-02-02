<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwer</title>
</head>
<body>
    <?php
        $name = $_GET["imie"];
        $lastname = $_GET["nazwisko"];
        echo "Imie: $name";
        echo "<br/>";
        echo "Nazwisko: $lastname";
    ?>
</body>
</html>