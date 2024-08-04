<html>
<head>
    <title>Generated Table</title>
</head>
<body>
    <h2>Generated Table</h2>
    <?php
    $rows = $_POST["rows"];
    echo "<h3>Generated Table with $rows rows:</h3>";
    echo "<table border='1'>";
    echo "<tr><th>NAME</th><th>NUMBER</th></tr>";
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>NUMBER $i</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
