<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź przedział</title>
</head>
<body>
    <h1>Sprawdź przedział</h1>
    <form method="post">
        Podaj liczbę: <input type="text" name="liczba">
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if (isset($_POST['liczba'])) {
        $liczba = intval($_POST['liczba');

        if ($liczba >= 100 && $liczba < 150) {
            echo "Liczba $liczba mieści się w przedziale <100,150).";
        } else {
            echo "Liczba $liczba nie mieści się w przedziale <100,150).";
        }
    }
    ?>
</body>
</html>
