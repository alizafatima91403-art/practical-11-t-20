<?php
if(isset($_GET['marks'])){
    $marks = (int)$_GET['marks'];
    echo ($marks >= 40) ? "PASS" : "FAIL";
}
?>
