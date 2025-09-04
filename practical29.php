<?php
// Create an array
$fruits = array("Apple", "Banana", "Mango", "Orange");

// Value to check
$check = "Mango";

// Check if value exists in array
if(in_array($check, $fruits)){
    echo "$check exists in the array.";
} else {
    echo "$check does not exist in the array.";
}
?>
