<?php
// WAP to print even numbers between 1 and 100

echo "Even numbers between 1 and 100 are:<br>";

for($i = 1; $i <= 100; $i++) {
    if($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
