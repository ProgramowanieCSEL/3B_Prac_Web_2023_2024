<!DOCTYPE html>
<html>
<head>
    <title>Ilość dni w lutym</title>
</head>
<body>
    <h1>Ilość dni w lutym</h1>
    <form method="post">
        Podaj rok: <input type="text" name="rok">
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    function czyRokPrzestepny($rok) {
        return ($rok % 4 == 0 && ($rok % 100 != 0 || $rok % 400 == 0));
    }

    if (isset($_POST['rok'])) {
        $rok = intval($_POST['rok']);

        if ($rok >= 1582) {
            if (czyRokPrzestepny($rok)) {
                echo "Rok $rok jest przestępny, więc luty ma 29 dni.";
            } else {
                echo "Rok $rok nie jest przestępny, więc luty ma 28 dni.";
            }
        } else {
            echo "Rok $rok jest przed reformą kalendarza z 1582 roku, więc obliczenia nie są dokładne.";
        }
    }
    ?>
</body>
</html>
