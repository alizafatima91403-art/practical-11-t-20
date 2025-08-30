<?php
// WAP to print odd numbers between 20 and 80

echo "Odd numbers between 20 and 80 are:<br>";

for($i = 20; $i <= 80; $i++) {
    if($i % 2 != 0) {
        echo $i . " ";
    }
}
?>
