<?php 
    session_start();
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    $schoolName       = ($_POST['school_name_name']) ? $_POST['school_name_name'] : '';
    $woreda = $_SESSION['user_woreda'];
    
    $sql = "INSERT INTO school(woreda_id, school_name) VALUES('$woreda', '$schoolName')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }
