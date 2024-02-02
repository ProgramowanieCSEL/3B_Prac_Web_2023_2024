<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwer</title>
</head>
<body>
    <?php
        $name = $_POST["imie"];
        $lastname = $_POST["nazwisko"];
        echo "Imie: $name";
        echo "<br/>";
        echo "Nazwisko: $lastname";
    ?>
</body>
</html>