<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tasks by Date</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>View Tasks by Date</h1>

    <form method="GET">
        <label for="taskDate">Select Date:</label>
        <input type="date" id="taskDate" name="taskDate">
        <button type="submit" class="btn">View Tasks</button>
    </form>

    <div id="taskList">
        <?php
        // Database configuration
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "task_manager";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve tasks based on selected date
        if (isset($_GET['taskDate'])) {
            $selectedDate = $_GET['taskDate'];

            // Prepare and execute SQL query to fetch tasks for the selected date
            $sql = "SELECT * FROM tasks WHERE task_date = '$selectedDate'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<div>{$row['task_name']} - {$row['task_date']}</div>";
                }
            } else {
                echo "No tasks found for the selected date";
            }
        }

        $conn->close();
        ?>
    </div>
</body>
</html>