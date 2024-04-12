
<html>
<body>
   <form method="GET">
        <input type="date" id="data" name="data"/>
        <input type="submit"/>
   </form>
   <?php
    if (isset($_GET["data"])) {
        $date = $_GET['data'];
        $date = substr($date,5);
        $curr_date = date("m-d");
        if ($curr_date == $date) {
            echo "Wszystkiego Najlepszego!";
        }
        else {
            echo "";
        }
    }
?>

</body>
</html>