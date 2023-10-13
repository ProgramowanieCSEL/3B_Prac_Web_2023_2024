<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź podzielność</title>
</head>
<body>
    <h1>Sprawdź podzielność</h1>
    <form method="post">
        Podaj pierwszą liczbę: <input type="text" name="liczba1"><br>
        Podaj drugą liczbę: <input type="text" name="liczba2"><br>
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if (isset($_POST['liczba1']) && isset($_POST['liczba2'])) {
        $liczba1 = intval($_POST['liczba1']);
        $liczba2 = intval($_POST['liczba2']);

        if ($liczba2 != 0 && $liczba1 % $liczba2 == 0) {
            echo "Liczba $liczba1 jest podzielna przez $liczba2 bez reszty.";
        } else {
            echo "Liczba $liczba1 nie jest podzielna przez $liczba2 bez reszty.";
        }
    }
    ?>
</body>
</html>
