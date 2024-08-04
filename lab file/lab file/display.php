<html>
<head>
<title>Submitted Data</title>
</head>
<body>
<h1>Submitted Data</h1>
<?php
echo "<p><strong>Text Input:</strong> " . $_POST["text-input"] . "</p>";
echo "<p><strong>Email Input:</strong> " . $_POST["email-input"] . "</p>";
echo "<p><strong>Password Input:</strong> " . $_POST["password-input"] . "</p>";
echo "<p><strong>Textarea:</strong> " . $_POST["textarea-input"] . "</p>";
echo "<p><strong>Select:</strong> " . $_POST["select-input"] . "</p>";
if (isset($_POST["checkbox-input"])) {
    echo "<p><strong>Checkbox:</strong> Checked</p>";
} else {
    echo "<p><strong>Checkbox:</strong> Not Checked</p>";
}
echo "<p><strong>Radio:</strong> " . $_POST["radio-input"] . "</p>";
echo "<p><strong>Date:</strong> " . $_POST["date-input"] . "</p>";
?>
</body>
</html>
