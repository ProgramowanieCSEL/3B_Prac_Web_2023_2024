<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 0; $i <= 100; $i+=10) {
        for ($j = $i;$j < $i + 10;$j++) {
            echo $j . " pierwiastek z " . $j . "<br/>" . sqrt($j) . "<br/>";
        }
    }
    echo "<br/>";
    echo "Koniec Petli for <br/>";
    echo "<br/>";
    $i = 0;
    $j = 0;
    while ($i <= 100) {
        while ($j <= $i  + 10) {
            echo $j . " pierwiastek z " . $j . "<br/>" . sqrt($j) . "<br/>";
            $j++;
        }
        $i+=10;
    }
    echo "<br/>";
    echo "Koniec Petli while <br/>";
    echo "<br/>";
    $i = 100;
    $j = 0;
    do {
        do {
            echo $j . " pierwiastek z " . $j . "<br/>" . sqrt($j) . "<br/>";
            $j++;
        } while ($j <= $i + 10);
        $i+=10;
    } while($i <= 100);
    echo "<br/>";
    echo "Koniec Petli do while <br/>";
    echo "<br/>";
    ?>
</body>

</html>