<?php
// Create associative array of students and marks
$students = array(
    "Aliza" => 85,
    "Rahul" => 78,
    "Neha" => 92,
    "Aman" => 67
);

// Update one student's marks
$students["Rahul"] = 88;  // updated from 78 to 88

// Print updated array
echo "<h3>Students and their Marks:</h3>";
foreach($students as $name => $marks){
    echo "$name : $marks <br>";
}
?>
