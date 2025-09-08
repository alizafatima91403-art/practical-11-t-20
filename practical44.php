<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = urlencode($_POST['name']); // urlencode for safe URL passing
    header("Location: thankyou.php?name=$name");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form method="POST" action="">
        <label>Name: </label>
        <input type="text" name="name" required><br><br>

        <label>Email: </label>
        <input type="email" name="email" required><br><br>

        <label>Message: </label><br>
        <textarea name="message" rows="5" cols="30" required></textarea><br><br>

        <input type="submit" value="Submit Feedback">
    </form>
</body>
</html>
