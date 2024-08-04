<?php
echo "printing hello world 5 times <br>";

$i = 0;
while ($i < 5) {
    echo "Hello world <br>";
    $i++;
}
?>

<br>
<br>

<?php
echo "printing numbers 1 to 5 <br> ";

$i = 1;
while ($i < 6) {
    echo $i. "<br>";
    $i++;
}
?>

<br>
<br>

<?php
echo "printing pattern of stars <br>";

$i = 1;
while ($i <= 5) {
    $j = 1;
    while ($j <= $i) {
        echo "* ";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>

<br>
<br>

<?php
echo "printing pattern of stars reverse <br>";

$i = 5;
while ($i >= 1) {
    $j = 1;
    while ($j <= $i) {
        echo "* ";
        $j++;
    }
    echo "<br>";
    $i--;
}
?>

<br>
<br>

<?php
echo "printing even numbers <br>";

$i = 2;
while ($i <= 10) {
    echo $i . "<br>";
    $i += 2;
}
?>
