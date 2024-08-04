<?php
echo "printing hello world 5 times <br>";

$i = 0;
do {
    echo "Hello world <br>";
    $i++;
} while ($i < 5);
?>

<br>
<br>

<?php
echo "printing numbers 1 to 5 <br>";

$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);
?>


<br>
<br>

<?php
echo "printing pattern of stars <br>";

$i = 1;
do {
    $j = 1;
    do {
        echo "* ";
        $j++;
    } while ($j <= $i);
    echo "<br>";
    $i++;
} while ($i <= 5);
?>


<br>
<br>

<?php
echo "printing pattern of stars reverse <br>";

$i = 5;
do {
    $j = 1;
    do {
        echo "* ";
        $j++;
    } while ($j <= $i);
    echo "<br>";
    $i--;
} while ($i >= 1);
?>

<br>
<br>

<?php
echo "printing even numbers <br>";

$i = 2;
do {
    echo $i . "<br>";
    $i += 2;
} while ($i <= 10);
?>
