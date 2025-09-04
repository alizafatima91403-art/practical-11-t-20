<?php
// Indexed array
$numbers = array(25, 12, 89, 45, 67, 3, 99, 54);

// Find largest and smallest
$largest = $numbers[0];
$smallest = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $largest) {
        $largest = $numbers[$i];
    }
    if ($numbers[$i] < $smallest) {
        $smallest = $numbers[$i];
    }
}

// Display result
echo "Array Elements: " . implode(", ", $numbers) . "<br>";
echo "Largest Number: " . $largest . "<br>";
echo "Smallest Number: " . $smallest;
?>
