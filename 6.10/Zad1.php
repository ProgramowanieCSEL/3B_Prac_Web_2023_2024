<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź parzystość</title>
</head>
<body>
    <h1>Sprawdź parzystość</h1>
    <form method="post">
        Podaj liczbę: <input type="text" name="liczba">
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if (isset($_POST['liczba'])) {
        $liczba = intval($_POST['liczba']);
        if ($liczba % 2 == 0) {
            echo "Liczba $liczba jest parzysta.";
        } else {
            echo "Liczba $liczba jest nieparzysta.";
        }
    }
    ?>
</body>
</html>
