<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "strona";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);
        $sql = "SELECT * FROM wpisy";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "autor: " . $row['autor'] . "<br/>";
              echo "tresc: " . $row['tresc'] . "<br/>";
              echo "data: " . $row['data'] . "<br/>";
            }
          } else {
            echo "brak wpisów";
          }
          $conn->close();
    ?>
</body>
</html>