<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania</title>
</head>

<body>
    <?php
    $a = 5;
    $b = 10;
    if ($a > $b) {
        echo $a . " jest wieksze od " . $b;
    } elseif ($a == $b) {
        echo "liczby sa rowne";
    } else {
        echo $b . " jest wieksze od " . $a;
    }
    ?>
</body>

</html>