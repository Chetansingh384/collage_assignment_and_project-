<?php
echo "Printing 'Hello world' 5 times using foreach loop<br>";
$messages = array("Hello world", "Hello world", "Hello world", "Hello world", "Hello world");
foreach ($messages as $message) {
    echo $message . "<br>";
}
?>

<br>
<br>

<?php
echo "Printing numbers 1 to 5 using foreach loop<br>";
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    echo $number . "<br>";
}
?>

<br>
<br>

<?php
echo "printing even numbers <br> ";
$evenNumbers = array(2, 4, 6, 8, 10);
foreach ($evenNumbers as $number) {
    echo $number . "<br>";
}
?>

<br>
<br>

<?php
echo "printing odd numbers <br> ";
$oddNumbers = array(1, 3, 5, 7, 9);
foreach ($oddNumbers as $number) {
    echo $number . "<br>";
}
?>

<?php
echo "Printing names <br>";
$names = array("Kunjal", "chetan", "manu", "sourabh", "ninshu");
foreach ($names as $name) {
    echo $name . "<br>";
}
?>
