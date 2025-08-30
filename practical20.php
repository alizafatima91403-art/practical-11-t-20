<?php
// WAP to create and print indexed array of size 10

// creating indexed array
$numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);

// printing array elements using index
echo "Indexed Array Elements:<br>";

for($i = 0; $i < 10; $i++) {
    echo "Element at index $i = " . $numbers[$i] . "<br>";
}
?>
