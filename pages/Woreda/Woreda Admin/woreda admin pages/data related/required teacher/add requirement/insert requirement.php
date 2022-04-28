<?php 

session_start();
    
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    $Zone       = $_SESSION['user_address'];
    $Woreda       = $_SESSION['user_woreda'];
    $School       = ($_POST['school_name']) ? $_POST['school_name'] : '';
    $educationLevel       = ($_POST['education_level_name']) ? $_POST['education_level_name'] : '';
    $Major       = ($_POST['major_name']) ? $_POST['major_name'] : '';
    $numTeacher       = ($_POST['num_teacher_name']) ? $_POST['num_teacher_name'] : '';
    
    $sql = "INSERT INTO required(zone ,woreda ,school ,education_level,major,number) VALUES ('$Zone','$Woreda','$School','$educationLevel','$Major','$numTeacher')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }
