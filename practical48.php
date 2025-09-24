<?php
if(isset($_COOKIE['username'])){
    $name = $_COOKIE['username']
echo "<h2>Welcome back , $name!</h2>";
{
    else
}
<h2>Please enter your name:</h2>
<form method="post" action=" ">
<input type="submit" value="submit">
</form>
}
 
if(isset($_POST['username'])){
    $name = $_POST['username']
    setcookie("username",$name,time() + (30* 24* 60 * 60));
    header("locatio: index.php")
    exit();
}
?>