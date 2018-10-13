<?php
    session_start();
    if (isset($_POST['token']) && $_POST['token'] === $_SESSION['csrf_token']) {
        echo '<script language="javascript">';
        echo 'alert("You have applied successfully!")';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Your application has been failed, please try again!")';
        echo '</script>';
    }
    echo "<script> location.href='index.html'; </script>";
  
?>