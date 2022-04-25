<?php

session_start();

    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');
    $email=$_SESSION['user_email'];
    $newPass= $_POST['password'];
    $newPassword=password_hash($newPass, PASSWORD_DEFAULT);

    $query="UPDATE users SET password='$newPassword', first_login='1' WHERE uemail='$email'";
    // echo $email;

    if(mysqli_query($connect, $query)){
        header('location: change password.php?success=success');
    }
    // header('location:view_user.php');
    
?>