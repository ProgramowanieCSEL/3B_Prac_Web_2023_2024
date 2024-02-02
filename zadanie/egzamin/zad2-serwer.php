<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwer</title>
</head>
<body>
    <?php
        $height = $_GET["height"];
        $weight = $_GET["weight"];
        $height = $height / 100;

        $bmi = $weight / ($height * $height);

        if ($bmi < 18.5) {
            echo "Posiadasz niedowagę";
        }
        elseif ($bmi > 18.5 && $bmi < 24.99) {
            echo "Posiadasz prawidłową wagę"; 
        }
        else {
            echo "Posiadasz nadwagę";
        }
    ?>
</body>
</html>