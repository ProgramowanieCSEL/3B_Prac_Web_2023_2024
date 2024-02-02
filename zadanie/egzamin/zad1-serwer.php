<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwer</title>
</head>
<body>
    <?php
        $birth_year = $_POST["year"];
        $gender = $_POST["gender"];
        $concerns = $_POST["concerns"];
        
        $file = fopen("dane.txt", "a+") or die("Nie mozna utworzyc pliku");
        $content = "\nRok Urodzenia: $birth_year\nPłeć: $gender\n Uwagi o stronie: $concerns";
        fwrite($file,$content);
        fclose($file);
        echo "Zapisano Dane";
    ?>
</body>
</html>