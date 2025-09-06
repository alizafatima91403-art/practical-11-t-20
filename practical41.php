<!DOCTYPE html>
<html>
<head>
    <title>Welcome Form</title>
</head>
<body>
    <form method="post" action="">
        <label>Enter your name:</label>
        <input type="text" name="username" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']);
        echo "<h3>Welcome, $name!</h3>";
    }
    ?>
</body>
</html>
