<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i = 10;
        $amountOfNums = 0;
        while ($i <= 1000) {
            $i+= $i + 1;
            $amountOfNums++;
        }
        echo $i . " " . $amountOfNums;
    ?>
</body>
</html>