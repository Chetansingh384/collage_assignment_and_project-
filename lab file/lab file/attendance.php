<html>
<head>
    <title>Mark Attendance</title>
</head>
<body>
    <h2>Mark Attendance</h2>
    <form action="calculate.php" method="post">
        <?php
        $n = $_POST['num_students'];
        for ($i = 1; $i <= $n; $i++) {
            echo "<label for='student_$i'>Student $i:</label>";
            echo "<input type='radio' name='attendance[$i]' value='P'> P";
            echo "<input type='radio' name='attendance[$i]' value='A'> A<br>";
        }
        ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
