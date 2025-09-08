<?php
$result = ""; // default empty

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero not allowed!";
                }
                break;
        }
    } else {
        $result = "Please enter valid numbers!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method="POST" action="">
        <label>First Number: </label>
        <input type="text" name="num1" required><br><br>

        <label>Second Number: </label>
        <input type="text" name="num2" required><br><br>

        <label>Operation: </label>
        <select name="operation">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php if ($result !== ""): ?>
        <h3>Result: <?php echo $result; ?></h3>
    <?php endif; ?>
</body>
</html>
