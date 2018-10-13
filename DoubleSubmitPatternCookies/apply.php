<?php
    session_start();
    if ((isset($_POST['token']))&&(isset($_COOKIE["admin"]))&&(($_POST['token'])==$_COOKIE["admin"])){
        echo '<script type="text/javascript">';
        echo 'alert("You have applied successfully!")';
        echo '</script>';
    }else{
        echo '<script type="text/javascript">';
        echo 'alert("Your application has been failed, please try again!")';
        echo '</script>';
    }
    echo "<script> location.href='index.html'; </script>"; 
?>