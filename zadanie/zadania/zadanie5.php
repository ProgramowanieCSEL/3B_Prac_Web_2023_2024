<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $a = 5;
        $x = 2;
        $b = 21;
        $start = -10;
        $end = 20;
        $accuracy = 0.001;
        $x1 = 0;
        // ax + b lub $a * $x1 + $b to funckja liniowa
        while (abs($start - $end) > $accuracy) {
            $x1 = ($start + $end) / 2;
            if (abs($a * $x1 + $b) <= $accuracy) {
                break;
            }
            else if (($a * $x1 + $b) * ($a * $start + $b) < 0) {
                $end = $x1;
            }
            else {
                $start = $x1;
            }
        }
        echo ($start + $end) / 2
    ?>
</body>

</html>