<?php
// Create an array of 6 elements
$numbers = array(10, 20, 30, 40, 50, 60);

echo "<h3>Original Array:</h3>";
echo implode(", ", $numbers);

// 1) Reverse without using array_reverse()
echo "<h3>Reverse without array_reverse():</h3>";
for ($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . " ";
}

// 2) Reverse using array_reverse()
echo "<h3>Reverse using array_reverse():</h3>";
$reversed = array_reverse($numbers);
echo implode(", ", $reversed);
?>
