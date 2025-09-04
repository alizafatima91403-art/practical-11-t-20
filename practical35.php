<?php
// Associative array of countries and capitals
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "UK" => "London",
    "Japan" => "Tokyo"
);

// Value to search
$capital = "London";

// Search for value
$country = array_search($capital, $countries);

if($country){
    echo "$capital is the capital of $country.";
} else {
    echo "$capital not found in the array.";
}
?>
