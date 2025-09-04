<?php
// Create associative array
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "UK" => "London",
    "Japan" => "Tokyo",
    "France" => "Paris"
);

// Print using foreach
echo "<h3>Countries and their Capitals:</h3>";
foreach($countries as $country => $capital){
    echo "The capital of $country is $capital. <br>";
}
?>
