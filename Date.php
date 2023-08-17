<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days Between Dates Calculator</title>
</head>
<body>
    <h1>Days Between Dates Calculator</h1>
    
    <form method="post" action="">
        <label for="date1">Date 1:</label>
        <input type="date" name="date1" required><br>
        
        <label for="date2">Date 2:</label>
        <input type="date" name="date2" required><br>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    function daysBetweenDates($date1, $date2) {
        $date1Timestamp = strtotime($date1);
        $date2Timestamp = strtotime($date2);
        
        if ($date1Timestamp === false || $date2Timestamp === false) {
            return "Invalid date format";
        }
        
        $difference = abs($date2Timestamp - $date1Timestamp);
        $days = floor($difference / (60 * 60 * 24));
        
        return $days;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date1 = $_POST["date1"];
        $date2 = $_POST["date2"];

        $days = daysBetweenDates($date1, $date2);
        echo "<p>Number of days between $date1 and $date2 is $days days</p>";
    }
    ?>
</body>
</html>
