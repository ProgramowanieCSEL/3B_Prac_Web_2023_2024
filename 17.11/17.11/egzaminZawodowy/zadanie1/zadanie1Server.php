<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dollarExchange = 4.02;
        $euroExchange = 4.37;
        $francExchange = 4.54;
        $plnAmount = $_POST["pl"];
        $targetExchange = $_POST["exchange"];
        switch ($targetExchange) {
            case "dolar": echo $dollarExchange * $plnAmount . " Pln"; break;
            case "euro": echo $euroExchange * $plnAmount . " Pln"; break;
            case "frank": echo $francExchange * $plnAmount . " Pln"; break;
            default: echo "Nieznana Waluta";
        }
    ?>
</body>
</html>