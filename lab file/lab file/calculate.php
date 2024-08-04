<html>
<head>
    <title>Attendance Results</title>
</head>
<body>
    <h2>Attendance Results</h2>
    <?php
    $attendance = $_POST['attendance'];
    $present = 0;
    $absent = 0;
    foreach ($attendance as $value) {
        if ($value === 'P') {
            $present++;
        } elseif ($value === 'A') {
            $absent++;
        }
    }
    echo "<p>Present Students: $present</p>";
    echo "<p>Absent Students: $absent</p>";
    ?>
</body>
</html>
