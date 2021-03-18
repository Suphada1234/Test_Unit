<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    include "Calendar.php";
    $calendar = new Calendar();
    $month = $_POST["month"];
    $day = $_POST["day"];
    $result = $calendar->Showdate($month, $day);
    echo "<h2 id='result'>$result</h2>";

    ?>
</body>

</html>