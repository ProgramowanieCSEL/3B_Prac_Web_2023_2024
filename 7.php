
<html>
<body>
   <form method="GET">
        <button type='submit'>Dodaj</button>
   </form>
   <?php
        if (isset($_COOKIE['counter'])) {
            $counter = $_COOKIE['counter'];
            echo $counter;
            $counter++;
            setcookie("counter","$counter",time() + 86400 * 30);
            
        }
        else {
            $counter  = 0;
            echo $counter;
            $counter++;
            setcookie("counter","$counter",time() + 86400 * 30);
        }
    ?>

</body>
</html>