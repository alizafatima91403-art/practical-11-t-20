<?php
$arr = array(50,20,90,10,70,40,30,80,100,60);

echo "<b>Original Array:</b><br>";
print_r($arr);
echo "<br><br>";

$temp = $arr;
sort($temp);
echo "<b>sorted array (sort - ascending by value):</b><br>";
print_r($temp);
echo "<br><br>";

$temp = $arr;
rsort($temp);
echo "<b>sorted array (rsort - descending by value):</b><br>";
print_r($temp);
echo "<br><br>";

$temp = $arr;
arsort($temp);
echo "<b>sorted array (asort - ascending index preserved):</b><br>";
print_r($temp);
echo "<br><br>";

$temp = $arr;
ksort($temp);
echo "<b>sorted array (ksort - ascending by key):</b><br>";
print_r($temp);
echo "<br><br>";

$temp = $arr;
ksort($temp);
echo "<b>sorted array (ksort - descending by key):</b><br>";
print_r($temp);
echo "<br><br>";




?>