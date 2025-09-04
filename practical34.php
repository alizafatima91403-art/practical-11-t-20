<?php
// Associative array of fruits and prices
$fruits = array(
    "Apple" => 100,
    "Banana" => 40,
    "Mango" => 80,
    "Orange" => 60
);

// Sort by values (ascending)
asort($fruits);
echo "<h3>Sorted by Values (asort):</h3>";
foreach($fruits as $fruit => $price){
    echo "$fruit : $price <br>";
}

// Sort by keys (ascending)
ksort($fruits);
echo "<h3>Sorted by Keys (ksort):</h3>";
foreach($fruits as $fruit => $price){
    echo "$fruit
