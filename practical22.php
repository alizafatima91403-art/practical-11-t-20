<?php
$arr = array();

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = $i + 1;

}
echo "indexed array elements: <br>";
for ($i = 0; $i < 10; $i++){
    echo "element [$i] = " . $arr[$i] . 
"<br>";
}
?>