
<?php
session_start();
$sid=session_id();
if(isset($_SESSION['csrf_token'])&&($_SESSION['cookie_value'])==$sid){
    echo ($_SESSION['csrf_token']);    
}else{
    echo 'Invalid token';
}
?>
