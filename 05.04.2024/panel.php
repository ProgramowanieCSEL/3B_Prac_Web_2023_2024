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
        //isset($_POST['login']) && isset($_POST['password'])
        if (isset($_POST['login'])) {
            $login = $_POST['login'];
            $sql = 'SELECT * FROM uzytkownicy WHERE uzytkownicy.login = ' . "'" . $login . "'";
            $result = $conn->query($sql);
            $autor;
            if ($result->num_rows > 0) {
                $posts_sql = 'SELECT * FROM wpisy WHERE wpisy.autor = ' . "'" . $login . "'";
                $posts = $conn->query($posts_sql);
                if ($posts->num_rows > 0) {
                    while($row = $posts->fetch_assoc()) {
                        $autor = $row['autor'];
                        echo "autor: " . $row['autor'] . "<br/>";
                        echo "tresc: " . $row['tresc'] . "<br/>";
                        echo "data: " . $row['data'] . "<br/>";
                        echo 'id: ' . $row['id'] . "<br/>";
                      }
                }
            echo "<h1>Dodaj nowy wpis</h1>";
            echo "<form method='POST' action='add_post.php'>
                <label>
                    Tytul:
                    <input type='text' name='title' id='title' required/>
                </label>
                <label>
                    Tresc:
                    <input type='text' name='content' id='content' required/>
                </label>
                <input type='text' hidden name='author' id='author' required value=" . "'" . $autor . "'</input>" . "
                <input type='text' hidden name='login' id='login' required value=" . "'" . $login . "'</input>" . "
                <input type='submit'/>
            </form>
            ";
            echo "<br/><h1>Usuń wpis</h1>";
            echo "<form method='POST' action='remove_post.php'>
                <label>
                    Id:
                    <input type='number' id='id' name='id' required/>
                </label>
                <input type='submit'/>
            </form>
            ";
            echo "<br/><h1>Edytuj wpis</h1>";
            echo "<form method='POST' action='edit_post.php'>
                <label>
                    Tresc:  
                    <input type='text' name='content' id='content' required/>
                </label>
                <label>
                    Id:
                    <input type='number' id='id' name='id' required/>
                </label>
                <input type='submit'/>
            </form>
            ";
            }
            else echo "Konto nie istnieje";
        }   
        else {
            echo "Brak Autoryzacji!";
        }
        $conn->close();
        
    ?>
</body>
</html>