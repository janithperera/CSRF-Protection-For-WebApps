<?php
$username = $_POST['uname'];
$password = $_POST['pword'];
session_start();
if(($username=="admin") && ($password=="admin"))
{
    $cookie_name = "admin";
    $cookie_value =session_id();
    setcookie($cookie_name, $cookie_value, time() + (60*60*24*30), "/");
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Failed to set cookie.";
    } else {
            $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
            $_SESSION['cookie_value'] =$cookie_value;
            
        echo "<script> location.href='main.php'; </script>";
    }
}
else
{
    echo 'Login failed!';
}
?>
