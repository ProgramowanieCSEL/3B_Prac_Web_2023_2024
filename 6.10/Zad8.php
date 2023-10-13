<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź, czy dwie liczby są takie same</title>
</head>
<body>
    <h1>Sprawdź, czy dwie liczby są takie same</h1>
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

        if ($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3) {
            echo "Przynajmniej dwie z podanych liczb są takie same.";
        } else {
            echo "Żadne dwie z podanych liczb nie są takie same.";
        }
    }
    ?>
</body>
</html>
