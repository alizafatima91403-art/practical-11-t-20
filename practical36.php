<?php
// Check if 'name' is passed in the URL
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']); // to prevent XSS
    echo "Hello, " . $name;
} else {
    echo "Hello, Guest";
}
?>
