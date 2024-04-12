<?php
   if (!isset($_COOKIE["counter"])) {
    setcookie("counter","0",time() + 86400 * 30);
   }
   else {
    $counter = (int)$_COOKIE['counter'];
    $counter++;
    setcookie("counter","$counter",time() + 86400 * 30);
   }
?>
<html>
<body>

<?php
    if (isset($_COOKIE["counter"])) {
        if ((int)$_COOKIE['counter'] >= 10) {
            echo "odwiedziłeś stronę ponad lub 10 razy";
        }
    }
?>

</body>
</html>