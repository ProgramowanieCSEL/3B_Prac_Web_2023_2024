<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jezyk = "n";
        if ($jezyk == "a") {
            echo "angielski";
        }
        else if ($jezyk == "n") {
            echo "niemiecki";
        }
        else if ($jezyk == "h") {
            echo "hispzanski";
        }
        else {
            echo "polski";
        }
    ?>
</body>
</html>