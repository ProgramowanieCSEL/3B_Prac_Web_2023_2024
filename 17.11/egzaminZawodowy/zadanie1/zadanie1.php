<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="zadanie1Server.php">
        <p>Podaj kwotę do przeliczenia w pln</p>
        <input type="number" name="pl" id="pl"/>
        <p>Podaj docelowa walutę</p>
        <select name="exchange">
            <option value="euro">Euro</option>
            <option value="dolar">Dolar</option>
            <option value="frank">Frank</option>
        </select>
        <button type="submit">Otrzymaj cenę</button>
    </form>
    <?php

    ?>
</body>
</html>