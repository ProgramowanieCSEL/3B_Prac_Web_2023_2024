<!DOCTYPE html>
<html>
<head>
    <title>Wyznacz najmniejszą liczbę</title>
</head>
<body>
    <h1>Wyznacz najmniejszą liczbę</h1>
    <form method="post">
        Podaj pierwszą liczbę: <input type="text" name="liczba1"><br>
        Podaj drugą liczbę: <input type="text" name="liczba2"><br>
        Podaj trzecią liczbę: <input type="text" name="liczba3"><br>
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if (isset($_POST['liczba1']) && isset($_POST['liczba2']) && isset($_POST['liczba3'])) {
        $liczba1 = floatval($_POST['liczba1']);
        $liczba2 = floatval($_POST['liczba2']);
        $liczba3 = floatval($_POST['liczba3']);

        $najmniejsza = $liczba1;

        if ($liczba2 < $najmniejsza) {
            $najmniejsza = $liczba2;
        }

        if ($liczba3 < $najmniejsza) {
            $najmniejsza = $liczba3;
        }

        echo "Najmniejsza z podanych liczb to $najmniejsza.";
    }
    ?>
</body>
</html>
