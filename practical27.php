<?php
// Store some numbers in an array
$numbers = array(50, 10, 70, 30, 90, 20);

echo "<h3>Original Array:</h3>";
echo implode(", ", $numbers);

// Sort in Ascending Order
sort($numbers);
echo "<h3>Ascending Order (using sort()):</h3>";
echo implode(", ", $numbers);

// Sort in Descending Order
rsort($numbers);
echo "<h3>Descending Order (using rsort()):</h3>";
echo implode(", ", $numbers);
?>
