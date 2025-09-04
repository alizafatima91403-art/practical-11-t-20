<?php
// Check if 'name' and 'age' are passed in the URL
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']);  // prevent XSS
    $age = htmlspecialchars($_GET['age']);    // prevent XSS
    
    echo "Hello $name, you are $age years old.";
} else {
    echo "Hello Guest, please provide your name and age in the URL.";
}
?>
