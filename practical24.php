<?php
// Indexed array
$numbers = array(10, 20, 30, 40, 50);

// Calculate sum
$sum = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}

// Display numbers
echo "Numbers in array: ";
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

// Display sum
echo "<br>Total Sum = " . $sum;
?>
