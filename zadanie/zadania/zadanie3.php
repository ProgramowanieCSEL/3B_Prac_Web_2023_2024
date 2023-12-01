<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 100; $i >= 0; $i--) {
        if ($i % 5 === 0) echo $i . "<br/>";
    }
    echo "<br/>";
    echo "Koniec Petli for <br/>";
    echo "<br/>";
    $i = 100;
    while ($i >= 0) {
        if ($i % 5 === 0) echo $i . "<br/>";
        $i--;
    }
    echo "<br/>";
    echo "Koniec Petli while <br/>";
    echo "<br/>";
    $i = 100;
    do {
        if ($i % 5 === 0) echo $i . "<br/>";
        $i--;
    } while($i >= 0);
    echo "<br/>";
    echo "Koniec Petli do while <br/>";
    echo "<br/>";
    ?>
</body>

</html>