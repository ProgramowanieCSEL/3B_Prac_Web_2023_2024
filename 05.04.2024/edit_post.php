<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edycja wpisu</title>
</head>
<body>
    <?php
        if ((isset($_POST["content"]) || isset($_POST['title'])) && isset($_POST["id"])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "strona";
            // Create connection
            $conn = new mysqli($servername, $username, $password,$dbname);
            $result;
            if (isset($_POST['content'])) {
                $sql = 'UPDATE wpisy SET tresc = "' . $_POST['content'] . '"' . " WHERE id = " . $_POST['id'];
                $result = $conn->query($sql);
            }
            if (isset($_POST['title'])) {
                $sql = 'UPDATE wpisy SET title = "' . $_POST['title'] . '" '." WHERE id = " . $_POST['id'];
                $result = $conn->query($sql);
            }
            if ($result == 1) {
                echo "Edytowano Wpis";
            }
            else {
                echo "Nie udało się edytować wpisu, wystąpił błąd";
             }
             $conn->close();
        }
    ?>
</body>
</html>