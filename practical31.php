<?php
// Existing associative array
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "UK" => "London"
);

// Add new key-value pair
$countries["Germany"] = "Berlin";

// Print array
foreach($countries as $country => $capital){
    echo "The capital of $country is $capital. <br>";
}
?>
