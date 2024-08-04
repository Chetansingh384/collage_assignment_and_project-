<?php
echo "printing hello world 5 times <br>";
for ($i = 0; $i < 5; $i++) {
    echo "Hello world <br>";
}
?>

<br>
<br>

<?php
echo "printing numbers 1 to 5 <br> ";
for ($i=1; $i < 6; $i++) { 
    echo $i. "<br>";
}
?>

<br>
<br>

<?php
echo "printing pattern of stars <br> ";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>


<br>
<br>


<?php
echo "printing pattern of stars reverse <br> ";
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>

<br>
<br>

<?php
echo "printing even numbers <br> ";
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . "<br>";
}
?>


