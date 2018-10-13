<?php
$username = $_POST['uname'];
$password = $_POST['pword'];
session_start();
if(($username=="admin") && ($password=="admin"))
{
    $cookie_name = "admin";
    $csrf_token=base64_encode(openssl_random_pseudo_bytes(32));
    setcookie($cookie_name, $csrf_token, time() + (60*60*24*30), "/");
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Failed to set cookie!";
    } else {
        echo "<script> location.href='main.php'; </script>";
    }
}
else
{
    echo 'Login failed!';
}
?>
