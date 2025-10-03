<?php
// Cookie name
$cookie_name = "discount_offer";


if(!isset($_COOKIE[$cookie_name])) {

    setcookie($cookie_name, "active", time() + (10 * 60), "/"); 
    $show_offer = true; 
} else {
   
    $show_offer = true;
    
    if(!isset($_COOKIE[$cookie_name])) {
        $show_offer = false;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Limited-Time Offer</title>
</head>
<body>
    <?php if($show_offer): ?>
        <h2>🎉 Welcome! You get 10% off (valid for 10 minutes).</h2>
    <?php else: ?>
        <h2>The discount offer has expired.</h2>
    <?php endif; ?>
</body>
</html>
