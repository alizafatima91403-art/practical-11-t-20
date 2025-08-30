<?php
// WAP to print marksheet using PHP

$name = "XYZ";

// Subjects and marks
$subjects = ["Sub1", "Sub2", "Sub3", "Sub4", "Sub5"];
$maxMarks = [50, 50, 50, 50, 50];
$obtained = [40, 30, 45, 48, 34];

$totalMax = array_sum($maxMarks);
$totalObtained = array_sum($obtained);

$percentage = ($totalObtained / $totalMax) * 100;

// Result
if ($percentage >= 75) {
    $result = "With Distinction";
} elseif ($percentage >= 40) {
    $result = "Passed";
} else {
    $result = "Failed";
}

// Print Marksheet
echo "<h2 style='text-align:center;'>Name : $name</h2>";
echo "<table border='1' cellspacing='0' cellpadding='10' align='center'>
        <tr>
            <th>Subject Name</th>
            <th>Max Marks</th>
            <th>Obtained Marks</th>
        </tr>";

for ($i = 0; $i < count($subjects); $i++) {
    echo "<tr>
            <td>{$subjects[$i]}</td>
            <td>{$maxMarks[$i]}</td>
            <td>{$obtained[$i]}</td>
          </tr>";
}

echo "<tr>
        <td><b>Total</b></td>
        <td><b>$totalMax</b></td>
        <td><b>$totalObtained</b></td>
      </tr>
      <tr>
        <td><b>Percentage</b></td>
        <td colspan='2'>" . round($percentage, 1) . "</td>
      </tr>
      <tr>
        <td><b>Result</b></td>
        <td colspan='2'>$result</td>
      </tr>
      </table>";
?>
