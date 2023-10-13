<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź wiek</title>
</head>
<body>
    <h1>Sprawdź wiek</h1>
    <form method="post">
        Podaj swój wiek: <input type="text" name="wiek">
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if (isset($_POST['wiek'])) {
        $wiek = intval($_POST['wiek']);

        if ($wiek < 11) {
            echo "Masz mniej niż 11 lat. Jesteś dzieckiem.";
        } elseif ($wiek >= 11 && $wiek <= 17) {
            echo "Masz od 11 do 17 lat. Jesteś nastolatkiem.";
        } else {
            echo "Masz 18 lat lub więcej. Jesteś dorosły.";
        }
    }
    ?>
</body>
</html>
