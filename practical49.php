<?php
if(isset($_COOKIE['visits'])){
    $visits = $_COOKIE[visits] + 1;
    setcookie("visits",$visits,time()+(30 * 24 * 60 * 60 *))
    
}else{
    $visits = 1;
    setcookie("visits",$visits,time()(30 * 24 * 60 * 60));

}

if($visits == 1){
    echo "<h1>This is your first visit!</h2>";

}else{
    echo "<h2>You have visited $visits times.</h2>"
    
}
?>
