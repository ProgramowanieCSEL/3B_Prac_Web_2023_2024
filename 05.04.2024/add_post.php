<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if (isset($_POST["content"]) && isset($_POST["title"]) && isset($_POST['author']) && isset($_POST['login'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "strona"; 
            // Create connection
            $conn = new mysqli($servername, $username, $password,$dbname);
            $sql = "INSERT INTO wpisy(data,autor,tresc,tytul,login) VALUES(CURRENT_DATE(),'" . $_POST['author'] . "'," . "'". $_POST['content'] . "','" . $_POST['title'] . "','" . $_POST['login'] . "')"; 
            $result = $conn->query($sql);
            if ($result == 1) {
                echo "Dodano Wpis";
            }
            else {
                echo "Nie udało się dodać wpisu, wystąpił błąd";
             }
             $conn->close();
        }
    ?>
</body>
</html>