<?php
   if (!isset($_COOKIE["username"])) {
    setcookie("username","Mateusz Mikołajczyk",time() + 86400 * 30); // zad1
   }
?>
<html>
<body>

<?php
    if (isset($_COOKIE["username"])) {
        echo $_COOKIE['username']; // zad2
        setcookie("username","Mateusz Zmienione",time() + 86400 * 30); // zad3
        setcookie("username",false); //zad4
    }
?>

</body>
</html>