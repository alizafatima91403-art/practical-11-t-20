<?php
$choice = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choice = $_POST['language'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Programming Language</title>
</head>
<body>
    <h2>Choose Your Favorite Programming Language</h2>
    <form method="POST" action="">
        <label>Which is your favorite programming language?</label><br><br>
        <input type="radio" name="language" value="PHP" required> PHP <br>
        <input type="radio" name="language" value="JavaScript"> JavaScript <br>
        <input type="radio" name="language" value="Python"> Python <br><br>

        <input type="submit" value="Submit">
    </form>

    <?php if ($choice != ""): ?>
        <h3>Your favorite programming language is: <?php echo $choice; ?></h3>
    <?php endif; ?>
</body>
</html>
