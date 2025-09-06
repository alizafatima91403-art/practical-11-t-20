<form method="post">
  <input type="text" name="name" placeholder="Enter name">
  <button type="submit">Submit</button>
</form>

<?php
if(isset($_POST['name'])){
    echo "Welcome, " . htmlspecialchars($_POST['name']) . "!";
}
?>
