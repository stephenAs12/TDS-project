<?php
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');
    $id=$_GET['user_id'];
    $status=$_GET['status'];

    $query="UPDATE users SET status=$status WHERE user_id=$id";

    mysqli_query($connect, $query);
    header('location:view_user.php');

?>