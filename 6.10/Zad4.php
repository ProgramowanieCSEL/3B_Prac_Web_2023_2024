<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź liczbę</title>
</head>
<body>
    <h1>Sprawdź liczbę</h1>
    <form method="post">
        Podaj liczbę: <input type="text" name="liczba">
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if (isset($_POST['liczba'])) {
        $liczba = floatval($_POST['liczba']);

        if ($liczba < 0) {
            echo "Liczba $liczba jest mniejsza od zera.";
        } elseif ($liczba > 0) {
            echo "Liczba $liczba jest większa od zera.";
        } else {
            echo "Liczba $liczba jest równa zero.";
        }
    }
    ?>
</body>
</html>
