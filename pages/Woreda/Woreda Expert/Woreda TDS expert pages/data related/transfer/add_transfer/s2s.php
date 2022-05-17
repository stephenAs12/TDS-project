<?php 

session_start();
    
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    $knownID       = $_SESSION['teacher_id'];
    $teacherSchool       = $_SESSION['teacher_school'];
    $transferType       = 'School To School';
    $zone = $_SESSION['user_address'];
    $woreda = $_SESSION['user_woreda'];

    $schoolOne       = ($_POST['s2s_school1_name']) ? $_POST['s2s_school1_name'] : '';
    $schoolTwo       = ($_POST['s2s_school2_name']) ? $_POST['s2s_school2_name'] : '';
    $schoolThree       = ($_POST['s2s_school3_name']) ? $_POST['s2s_school3_name'] : '';

    // if (isset($_POST['r2r_region2_name'])) {
    //     $regionTwo       = ($_POST['r2r_region2_name']) ? $_POST['r2r_region2_name'] : '';
    // }else{
    //     $regionTwo = null;
    // }
 
    
    $sql = "INSERT INTO transfer_request(current_zone, current_woreda, choice_key, teacher_id,request_type,school_one,school_two, school_three) VALUES ('$zone', '$woreda', '$knownID $transferType', '$knownID','$transferType','$schoolOne','$schoolTwo', '$schoolThree')";

    if ($schoolOne != $schoolTwo && $schoolOne != $schoolThree && $schoolTwo != $schoolThree) {
        if ($teacherSchool!=$schoolOne && $teacherSchool!=$schoolTwo && $teacherSchool!=$schoolThree) {
            if(mysqli_query($connect, $sql)) {
                echo true;
            } else {
                 echo $knownID.' '.mysqli_error($connect);
            }
        } else {
            echo "You're attempting to input your current school.";
        }
        
    }else{
        echo "You're attempting to input the same value twice.";
    }
