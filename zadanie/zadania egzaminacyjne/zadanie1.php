<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sum = 0;
    for ($j = 100; $j >= 0; $j--) {
        if ($j % 2 == 0) $sum += $j;
    }
    echo $sum;
    ?>
</body>

</html>