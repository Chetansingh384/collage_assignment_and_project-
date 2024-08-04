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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $_POST["taskName"];
    $taskDate = $_POST["taskDate"];

    // Prepare and execute SQL query to insert task into database
    $sql = "INSERT INTO tasks (task_name, task_date) VALUES ('$taskName', '$taskDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Task added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>