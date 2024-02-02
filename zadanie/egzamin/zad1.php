<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <form method="POST" action="zad1-serwer.php">
        <input type="number" required name="year" placeholder="rok urodzenia">
        <input type="text" required name="gender" placeholder="płeć">
        <textarea name="concerns" required >
            Uwagi o stronie
        </textarea>
        <input type="checkbox" required> Zgadzam się na udział w badaniu
        <input type="submit"/>
    </form>
</body>
</html>