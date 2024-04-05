<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuwanie wpisu</title>
</head>
<body>
    <?php
    if (isset($_POST["id"])) {
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "strona";
         // Create connection
         $conn = new mysqli($servername, $username, $password,$dbname);
         $sql = 'DELETE FROM wpisy WHERE id = ' . $_POST['id'];
         $result = $conn->query($sql);
         if ($result == 1) {
            echo "Usunięto Wpis";
         }
         else {
            echo "Nie udało się usunąć wpisu, wystąpił błąd";
         }
         $conn->close();
    }
    ?>
</body>
</html>