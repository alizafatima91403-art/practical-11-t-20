<?php
// 1) Using for loop
echo "Numbers from 1 to 20 using for loop:<br>";
for($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}

echo "<br><br>";

// 2) Using while loop
echo "Numbers from 1 to 20 using while loop:<br>";
$i = 1;
while($i <= 20) {
    echo $i . " ";
    $i++;
}

echo "<br><br>";

// 3) Using do-while loop
echo "Numbers from 1 to 20 using do-while loop:<br>";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while($i <= 20);
?>
